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

	if ( $filters !== $item->filters ) {
		$item = $item->cloneWith( array( 'filters' => $filters ) );
	}

	return $item;
}
