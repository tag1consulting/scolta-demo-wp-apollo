<?php
/**
 * Import NASA images into WordPress and attach them as featured images.
 *
 * Run via: ddev wp eval 'require "/var/www/html/import/import-images.php";'
 */

// Map: image filename (without .jpg) => array of post IDs to set as featured image
$image_map = [

    // Sputnik
    'sputnik' => [69, 70, 72],

    // John Glenn
    'john-glenn-friendship7' => [80, 21, 82],

    // Alan Shepard
    'alan-shepard-freedom7' => [77, 19, 78, 51, 52, 53],

    // Gagarin
    'gagarin' => [76, 18],

    // Earthrise — Apollo 8
    'earthrise' => [35, 116, 117, 115],

    // Apollo 11 Eagle landing on surface
    'apollo11-eagle-landing' => [38, 131],

    // Neil Armstrong on Moon
    'armstrong-moon' => [39, 130, 128, 37],

    // Buzz Aldrin on Moon
    'aldrin-moon' => [40, 185, 154],

    // Saturn V launch
    'saturn-v-launch' => [30, 105, 92, 128],

    // Apollo 1 crew photo
    'apollo1-crew' => [28, 101, 100, 27, 29, 102, 196],

    // Apollo 15 rover
    'apollo15-rover' => [54, 55, 58],

    // Genesis Rock sample
    'genesis-rock' => [56, 202],

    // Apollo 17 night launch
    'apollo17-night' => [61, 64, 63, 62],

    // Apollo 8 crew
    'apollo8-crew' => [34, 116, 117],

    // Apollo 13
    'apollo13' => [45, 46, 47, 48, 49, 50, 142, 44],

    // Pete Conrad / Apollo 12
    'apollo12-pete-conrad' => [42, 43, 186, 41, 139],

    // Ed White spacewalk — Gemini 4
    'ed-white-eva' => [23, 180],

    // Ham the chimp
    'ham-chimp' => [75, 177],

    // Luna Soviet spacecraft
    'luna-moon' => [161, 216, 203, 204],

    // Mariner 4 Mars
    'mariner-mars' => [167, 208],
];

$img_dir = '/var/www/html/import/images';

// Track which attachment ID is associated with which image
$attachment_cache = [];

$total_attached = 0;

foreach ( $image_map as $slug => $post_ids ) {
    $file_path = "{$img_dir}/{$slug}.jpg";

    if ( ! file_exists( $file_path ) ) {
        echo "SKIP: {$slug}.jpg not found\n";
        continue;
    }

    // Import image into WordPress media library if not already done
    if ( ! isset( $attachment_cache[ $slug ] ) ) {
        // Check if already imported by searching for the filename in attachments
        global $wpdb;
        $existing_att = $wpdb->get_var( $wpdb->prepare(
            "SELECT ID FROM {$wpdb->posts} WHERE post_title = %s AND post_type = 'attachment' LIMIT 1",
            $slug
        ) );

        if ( $existing_att ) {
            $attachment_cache[ $slug ] = (int) $existing_att;
            echo "  [{$slug}] already in media library: attachment #{$existing_att}\n";
        } else {
            // Use sideload to import
            require_once ABSPATH . 'wp-admin/includes/image.php';
            require_once ABSPATH . 'wp-admin/includes/file.php';
            require_once ABSPATH . 'wp-admin/includes/media.php';

            $file_array = [
                'name'     => "{$slug}.jpg",
                'tmp_name' => $file_path,
            ];

            // media_handle_sideload deletes tmp_name — copy it first
            $tmp = wp_tempnam( "{$slug}.jpg" );
            copy( $file_path, $tmp );
            $file_array['tmp_name'] = $tmp;

            $att_id = media_handle_sideload( $file_array, 0, $slug );
            if ( is_wp_error( $att_id ) ) {
                echo "  [{$slug}] ERROR importing: " . $att_id->get_error_message() . "\n";
                continue;
            }

            $attachment_cache[ $slug ] = $att_id;
            echo "  [{$slug}] imported as attachment #{$att_id}\n";
        }
    }

    $att_id = $attachment_cache[ $slug ];

    // Set as featured image on each post (only if not already set)
    foreach ( $post_ids as $post_id ) {
        $existing_thumb = get_post_thumbnail_id( $post_id );
        if ( $existing_thumb && $existing_thumb == $att_id ) {
            // Already set to this image
            continue;
        }
        if ( $existing_thumb && $existing_thumb != $att_id ) {
            // Post already has a different thumbnail — skip (don't override)
            continue;
        }
        $result = set_post_thumbnail( $post_id, $att_id );
        if ( $result ) {
            echo "    -> post #{$post_id}: featured image set\n";
            $total_attached++;
        } else {
            echo "    -> post #{$post_id}: FAILED to set thumbnail\n";
        }
    }
}

echo "\nDone. {$total_attached} featured images attached.\n";
