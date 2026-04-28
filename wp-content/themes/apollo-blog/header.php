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
