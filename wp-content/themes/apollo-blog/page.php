<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
        <img class="single-post-featured"
             src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'apollo-featured' ) ); ?>"
             alt="<?php the_title_attribute(); ?>">
    <?php endif; ?>

    <div class="page-content">
        <?php the_content(); ?>
    </div>

</article>

<?php endwhile; ?>

<?php get_footer(); ?>
