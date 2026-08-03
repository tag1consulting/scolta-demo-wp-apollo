<?php
/**
 * Apollo Blog image vault — import into WordPress.
 *
 * For every post in image-manifest.json:
 *   1. Sideloads the featured image (<slug>.jpg) into the media library (once
 *      per slug, cached) and sets it as the post's featured image.
 *   2. Injects the pre-rendered inline-figure HTML into the post body, resolving
 *      {{CRED:slug}} tokens from credits.json (the real fetched license/credit),
 *      falling back to the manifest's expected_credit.
 *   3. Wraps the injection in an idempotency marker so re-running is safe.
 *
 * Placement:
 *   - hero-bleed / dropcap-inset  -> prepended to the top of the content
 *     (dropcap also adds `has-inset` to the first paragraph for the drop cap)
 *   - everything else             -> inserted after the first paragraph
 *
 * Run:
 *   ddev wp eval-file import/import-vault-images.php
 *   # options via env:  VAULT_FORCE=1 (re-inject even if marker present)
 *   #                   VAULT_DIR=/var/www/html/wp-content/uploads/vault
 *   #                   VAULT_MANIFEST=/var/www/html/import/image-manifest.json
 */

if ( ! defined( 'ABSPATH' ) ) { fwrite( STDERR, "Run through wp-cli: ddev wp eval-file ...\n" ); exit( 1 ); }

$FORCE    = getenv( 'VAULT_FORCE' ) === '1';
$VAULT    = getenv( 'VAULT_DIR' )      ?: ( WP_CONTENT_DIR . '/uploads/vault' );
$MANIFEST = getenv( 'VAULT_MANIFEST' ) ?: ( ABSPATH . 'import/image-manifest.json' );

if ( ! file_exists( $MANIFEST ) ) { fwrite( STDERR, "manifest not found: $MANIFEST\n" ); exit( 1 ); }
$data    = json_decode( file_get_contents( $MANIFEST ), true );
$library = $data['library'];
$posts   = $data['posts'];

$credits = [];
if ( file_exists( "$VAULT/credits.json" ) ) {
	$credits = json_decode( file_get_contents( "$VAULT/credits.json" ), true ) ?: [];
}

require_once ABSPATH . 'wp-admin/includes/image.php';
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/media.php';

$att_cache = [];

/** Resolve a slug's display credit: real fetched credit first, else expected. */
function vault_credit( $slug, $credits, $library ) {
	if ( isset( $credits[ $slug ]['credit'] ) && $credits[ $slug ]['credit'] !== '' ) {
		return $credits[ $slug ]['credit'];
	}
	return $library[ $slug ]['expected_credit'] ?? 'Public domain';
}

/** Sideload <slug>.jpg into the media library once; return attachment ID. */
function vault_attachment( $slug, $VAULT, &$att_cache, $library ) {
	if ( isset( $att_cache[ $slug ] ) ) { return $att_cache[ $slug ]; }

	global $wpdb;
	$existing = $wpdb->get_var( $wpdb->prepare(
		"SELECT ID FROM {$wpdb->posts} WHERE post_title = %s AND post_type='attachment' LIMIT 1",
		"vault-$slug"
	) );
	if ( $existing ) { return $att_cache[ $slug ] = (int) $existing; }

	$file = "$VAULT/$slug.jpg";
	if ( ! file_exists( $file ) ) { echo "  ! missing image file: $file\n"; return 0; }

	$tmp = wp_tempnam( "$slug.jpg" );
	copy( $file, $tmp );
	$att_id = media_handle_sideload(
		[ 'name' => "$slug.jpg", 'tmp_name' => $tmp ], 0, "vault-$slug"
	);
	if ( is_wp_error( $att_id ) ) { echo "  ! sideload failed ($slug): " . $att_id->get_error_message() . "\n"; @unlink( $tmp ); return 0; }

	$alt = $library[ $slug ]['alt'] ?? '';
	if ( $alt ) { update_post_meta( $att_id, '_wp_attachment_image_alt', $alt ); }
	return $att_cache[ $slug ] = (int) $att_id;
}

$set_featured = 0; $injected = 0; $skipped = 0;

foreach ( $posts as $pid => $p ) {
	$pid = (int) $pid;
	$post = get_post( $pid );
	if ( ! $post ) { echo "SKIP $pid (no such post)\n"; continue; }

	// --- featured image ---
	$fslug = $p['featured_image'];
	$att   = vault_attachment( $fslug, $VAULT, $att_cache, $library );
	if ( $att ) {
		if ( (int) get_post_thumbnail_id( $pid ) !== $att ) {
			set_post_thumbnail( $pid, $att );
			$set_featured++;
		}
	}

	// --- inline figures ---
	$marker_open  = "<!-- apollo-vault:$pid -->";
	$marker_close = "<!-- /apollo-vault:$pid -->";
	$content = $post->post_content;

	if ( strpos( $content, $marker_open ) !== false ) {
		if ( ! $FORCE ) { $skipped++; continue; }
		// strip the previous injection before re-inserting
		$content = preg_replace(
			'/' . preg_quote( $marker_open, '/' ) . '.*?' . preg_quote( $marker_close, '/' ) . '/s',
			'', $content
		);
	}

	// resolve {{CRED:slug}} tokens
	$html = $p['figure_html'];
	$html = preg_replace_callback( '/\{\{CRED:([a-z0-9\-]+)\}\}/', function ( $m ) use ( $credits, $library ) {
		return esc_html( vault_credit( $m[1], $credits, $library ) );
	}, $html );
	$block = "\n$marker_open\n$html\n$marker_close\n";

	$placement = $p['placement'];
	if ( $placement === 'prepend' ) {
		if ( $p['layout'] === 'dropcap-inset' ) {
			// add drop-cap class to the first paragraph that follows
			$content = $block . $content;
			$content = preg_replace( '/(<p)(?![^>]*has-inset)/', '<p class="has-inset"', $content, 1 );
		} else {
			$content = $block . $content;
		}
	} else {
		// after first paragraph (first </p>, else first blank line, else prepend)
		if ( preg_match( '/<\/p>/i', $content ) ) {
			$content = preg_replace( '/<\/p>/i', '</p>' . $block, $content, 1 );
		} elseif ( strpos( $content, "\n\n" ) !== false ) {
			$pos = strpos( $content, "\n\n" ) + 2;
			$content = substr( $content, 0, $pos ) . $block . substr( $content, $pos );
		} else {
			$content = $block . $content;
		}
	}

	wp_update_post( [ 'ID' => $pid, 'post_content' => $content ] );
	$injected++;
}

echo "\nDONE. featured set: $set_featured | posts injected: $injected | already-injected skipped: $skipped\n";
echo $FORCE ? "(force mode: re-injected existing)\n" : "(run with VAULT_FORCE=1 to re-inject)\n";
