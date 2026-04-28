<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="single-post-header">
        <div class="single-post-meta">
            <?php
            $cats = get_the_category();
            if ( $cats ) :
            ?>
            <span class="cat-label"><a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" style="color:#fff;"><?php echo esc_html( $cats[0]->name ); ?></a></span>
            <?php endif; ?>
            <span><?php echo esc_html( get_the_date( 'l, F j, Y' ) ); ?></span>
        </div>
        <h1 class="single-post-title"><?php the_title(); ?></h1>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
        <img class="single-post-featured"
             src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'apollo-featured' ) ); ?>"
             alt="<?php the_title_attribute(); ?>">
    <?php endif; ?>

    <?php if ( get_the_excerpt() ) : ?>
    <div class="single-post-excerpt-box">
        <?php the_excerpt(); ?>
    </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <?php
    $tags = get_the_tags();
    if ( $tags ) :
    ?>
    <div class="post-tags">
        <strong style="font-family:sans-serif;font-size:.72rem;letter-spacing:.1em;text-transform:uppercase;color:#5a5242;">Filed under: </strong>
        <?php foreach ( $tags as $tag ) : ?>
            <a class="tag-label" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"><?php echo esc_html( $tag->name ); ?></a>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

</article>

<nav class="post-navigation">
    <?php $prev = get_previous_post(); if ( $prev ) : ?>
    <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="nav-prev">
        <span class="nav-label">&larr; Earlier entry</span>
        <span class="nav-title"><?php echo esc_html( get_the_title( $prev ) ); ?></span>
    </a>
    <?php else: ?><span></span><?php endif; ?>

    <?php $next = get_next_post(); if ( $next ) : ?>
    <a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="nav-next">
        <span class="nav-label">Later entry &rarr;</span>
        <span class="nav-title"><?php echo esc_html( get_the_title( $next ) ); ?></span>
    </a>
    <?php endif; ?>
</nav>

<?php endwhile; ?>

<?php get_footer(); ?>
