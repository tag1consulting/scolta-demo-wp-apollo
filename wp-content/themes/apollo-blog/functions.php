<?php

function apollo_blog_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption', 'navigation-widgets' ] );
    add_theme_support( 'automatic-feed-links' );

    register_nav_menus( [
        'primary' => __( 'Primary Menu', 'apollo-blog' ),
    ] );

    add_image_size( 'apollo-card', 900, 480, true );
    add_image_size( 'apollo-featured', 1200, 540, true );
}
add_action( 'after_setup_theme', 'apollo_blog_setup' );

function apollo_blog_enqueue() {
    wp_enqueue_style( 'apollo-blog-style', get_stylesheet_uri(), [], '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'apollo_blog_enqueue' );

function apollo_blog_widgets_init() {
    register_sidebar( [
        'name'          => __( 'Sidebar', 'apollo-blog' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ] );
}
add_action( 'widgets_init', 'apollo_blog_widgets_init' );

function apollo_blog_excerpt_length( $length ) { return 40; }
add_filter( 'excerpt_length', 'apollo_blog_excerpt_length' );

function apollo_blog_excerpt_more( $more ) { return '&hellip;'; }
add_filter( 'excerpt_more', 'apollo_blog_excerpt_more' );

// Flush rewrite rules on theme activation
function apollo_blog_activate() { flush_rewrite_rules(); }
add_action( 'after_switch_theme', 'apollo_blog_activate' );

/**
 * Enrich Scolta ContentItem with category/program filters and exclude chrome pages.
 */
add_filter( 'scolta_content_item', 'apollo_blog_scolta_enrich', 10, 2 );

function apollo_blog_scolta_enrich( $item, $post ) {
	if ( $item === null ) {
		return null;
	}

	if ( 'page' === $post->post_type && in_array( $post->post_name, array( 'about', 'search' ), true ) ) {
		return null;
	}

	$filters = $item->filters;

	$categories = wp_get_post_categories( $post->ID, array( 'fields' => 'names' ) );
	if ( ! empty( $categories ) ) {
		$program_map = array(
			'Apollo 1'        => 'Apollo',
			'Apollo 7'        => 'Apollo',
			'Apollo 8'        => 'Apollo',
			'Apollo 9'        => 'Apollo',
			'Apollo 10'       => 'Apollo',
			'Apollo 11'       => 'Apollo',
			'Apollo 12'       => 'Apollo',
			'Apollo 13'       => 'Apollo',
			'Apollo 14'       => 'Apollo',
			'Apollo 15'       => 'Apollo',
			'Apollo 16'       => 'Apollo',
			'Apollo 17'       => 'Apollo',
			'Mercury'         => 'Mercury',
			'Gemini'          => 'Gemini',
			'Gemini Program'  => 'Gemini',
			'Space Race'      => 'Space Race',
			'Technology'      => 'Technology',
			'Reflections'     => 'Reflections',
		);

		$programs = array();
		foreach ( $categories as $cat ) {
			if ( isset( $program_map[ $cat ] ) ) {
				$programs[] = $program_map[ $cat ];
			}
		}
		$programs = array_unique( $programs );
		if ( ! empty( $programs ) ) {
			$filters['program'] = array_values( $programs );
		}
		$filters['category'] = $categories;
	}

	// Per-post data the client-side renderers paint: the hero image and the
	// category badges. It rides along in the fragment's meta map, so a card and
	// a search-as-you-type suggestion each cost zero per-result server calls.
	//
	// Metadata costs only the bytes of its own keys in each fragment, unlike
	// sortable, which writes a corpus-wide pf_meta entry. The keys "title" and
	// "date" are deliberately avoided: they lose to the built-in values on a
	// collision, and the built-in date is the one the card wants anyway — it is
	// the post's publication date, which on this archive is the 1960s or 1970s
	// day the dispatch is written from.
	$metadata = $item->metadata;

	$image = apollo_blog_card_image( $post->ID );
	if ( null !== $image ) {
		$metadata['image'] = $image['url'];
		if ( '' !== $image['alt'] ) {
			$metadata['image_alt'] = $image['alt'];
		}
	}

	// A display-only copy of the category facet values, capped at two. Taken
	// from the filters resolved just above rather than re-read from the
	// taxonomy, so a badge's text is character-for-character the facet value it
	// corresponds to — click that facet and this post is in the set.
	//
	// Categories rather than the derived program: program is computed FROM
	// category by the map above, so "Apollo 11" and "Apollo" side by side would
	// be the same fact written twice. Program stays a facet; only its use as
	// badge text goes away.
	//
	// The author is deliberately not badged either, which is a departure from
	// the plan for this rollout. It carries nothing here: 154 of the 206
	// indexed items have no author display name at all and the other 52 are
	// "admin", so an author badge would print one meaningless word on a quarter
	// of the cards and nothing on the rest.
	//
	// JSON rather than a delimited string: a category name is free text, so
	// there is no separator a future one provably cannot contain.
	$badges = array_slice( $filters['category'] ?? array(), 0, APOLLO_BLOG_CARD_BADGE_LIMIT );
	if ( ! empty( $badges ) ) {
		$encoded = wp_json_encode( array_values( $badges ) );
		if ( is_string( $encoded ) ) {
			$metadata['badges'] = $encoded;
		}
	}

	if ( $filters !== $item->filters || $metadata !== $item->metadata ) {
		$item = $item->cloneWith(
			array(
				'filters'  => $filters,
				'metadata' => $metadata,
			)
		);
	}

	return $item;
}

/**
 * How many category badges a search result card paints.
 *
 * Two, because the date sits in the same row and three chips beside it wrapped
 * the row on the narrower half of the corpus's category names.
 */
const APOLLO_BLOG_CARD_BADGE_LIMIT = 2;

/**
 * Image size the search result card's thumbnail uses.
 *
 * The theme's own apollo-card, a 900x480 hard crop it already generates for
 * every featured image, so the card introduces no new derivative. It is a
 * landscape crop rather than a square, which is why the card's thumbnail box
 * is 16:9 and not the square other demos in this rollout use: cropping a
 * mission photograph to a square is how you cut the rocket out of the frame.
 */
const APOLLO_BLOG_CARD_IMAGE_SIZE = 'apollo-card';

/**
 * Resolves a post's featured image to a card thumbnail URL and alt text.
 *
 * The URL is made root-relative. WordPress stores an absolute one built from
 * home_url(), and the committed index has to work on the DDEV site and in the
 * container image, which do not share a hostname; a root-relative path is the
 * same string on both.
 *
 * 70 of the 206 indexed items carry a hero image. The rest get the same card
 * minus the thumbnail rather than a placeholder or Scolta's built-in card.
 *
 * @param int $post_id The post.
 * @return array{url: string, alt: string}|null Thumbnail data, or null when the
 *   post has no usable featured image.
 */
function apollo_blog_card_image( int $post_id ): ?array {
	$attachment_id = get_post_thumbnail_id( $post_id );
	if ( ! $attachment_id ) {
		return null;
	}

	$src = wp_get_attachment_image_src( $attachment_id, APOLLO_BLOG_CARD_IMAGE_SIZE );
	if ( ! is_array( $src ) || empty( $src[0] ) ) {
		return null;
	}

	$url  = (string) $src[0];
	$home = wp_parse_url( home_url(), PHP_URL_HOST );
	$path = wp_parse_url( $url, PHP_URL_PATH );
	$host = wp_parse_url( $url, PHP_URL_HOST );
	if ( is_string( $path ) && '' !== $path && ( null === $host || $host === $home ) ) {
		$url = $path;
	}

	return array(
		'url' => $url,
		'alt' => trim( (string) get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ),
	);
}

/**
 * Loads the Scolta result-card renderer and its stylesheet.
 *
 * Hooked to wp_footer rather than wp_enqueue_scripts, and gated on the Scolta
 * handle actually being enqueued. The plugin's shortcode enqueues scolta.js
 * while the page content renders, which is after wp_enqueue_scripts has run,
 * so at that earlier hook the handle does not exist yet and a dependency on it
 * would be silently dropped. By wp_footer it is registered, the dependency
 * takes, and both the script and the stylesheet land after the bundle's own —
 * which is what the renderer needs (window.Scolta must exist when this file
 * executes) and what the stylesheet needs (it redeclares Scolta's documented
 * custom properties at the same specificity, so it has to be second).
 *
 * Priority 5 puts it before wp_print_footer_scripts at 20.
 */
add_action( 'wp_footer', 'apollo_blog_scolta_rich_results_assets', 5 );
function apollo_blog_scolta_rich_results_assets(): void {
	if ( ! wp_script_is( 'scolta-search', 'enqueued' ) ) {
		return;
	}

	$dir = get_stylesheet_directory();
	$uri = get_stylesheet_directory_uri();

	$js = $dir . '/js/scolta-rich-results.js';
	if ( file_exists( $js ) ) {
		wp_enqueue_script(
			'apollo-scolta-rich-results',
			$uri . '/js/scolta-rich-results.js',
			array( 'scolta-search' ),
			(string) filemtime( $js ),
			true
		);
	}

	$css = $dir . '/css/scolta-rich-results.css';
	if ( file_exists( $css ) ) {
		wp_enqueue_style(
			'apollo-scolta-rich-results',
			$uri . '/css/scolta-rich-results.css',
			array( 'scolta-search' ),
			(string) filemtime( $css )
		);
	}
}
