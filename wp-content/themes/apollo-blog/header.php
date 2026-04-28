<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <header id="masthead" class="starfield">
        <div class="dateline-strip">
            Counting Down to Apollo &mdash; A Personal Record of the Space Race &mdash; Est. 1962
        </div>
        <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        </div>
    </header>

    <nav id="site-navigation">
        <div class="main-navigation">
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary',
                'menu_class'     => '',
                'container'      => false,
                'fallback_cb'    => 'apollo_blog_fallback_menu',
            ] );
            ?>
            <a href="<?php echo esc_url( home_url( '/search/' ) ); ?>" class="nav-search-icon" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="11" cy="11" r="7"/>
                    <line x1="16.5" y1="16.5" x2="22" y2="22"/>
                </svg>
            </a>
        </div>
    </nav>

<?php
function apollo_blog_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
    wp_list_pages( [ 'title_li' => '', 'depth' => 1, 'echo' => true ] );
    echo '</ul>';
}
?>

<div id="content" class="site-content">
    <main id="primary" class="site-main">
