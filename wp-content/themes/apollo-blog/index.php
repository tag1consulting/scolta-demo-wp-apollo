<?php get_header(); ?>

<div class="posts-grid">
<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>

        <?php if ( has_post_thumbnail() ) : ?>
            <img class="post-card-image" src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'apollo-card' ) ); ?>" alt="<?php the_title_attribute(); ?>">
        <?php endif; ?>

        <div class="post-card-meta">
            <?php
            $cats = get_the_category();
            if ( $cats ) :
            ?>
            <span class="cat-label"><?php echo esc_html( $cats[0]->name ); ?></span>
            <?php endif; ?>
            <span><?php echo esc_html( get_the_date( 'F j, Y' ) ); ?></span>
        </div>

        <h2 class="post-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <div class="post-card-excerpt">
            <?php echo wp_trim_words( get_the_excerpt(), 50, '&hellip;' ); ?>
        </div>

        <a class="read-more" href="<?php the_permalink(); ?>">Read the full entry</a>

    </article>
    <?php endwhile; ?>

    <div class="pagination">
        <?php echo paginate_links( [ 'prev_text' => '&larr; Earlier', 'next_text' => 'Later &rarr;' ] ); ?>
    </div>

<?php else : ?>
    <div class="no-results">
        <h2>No entries yet.</h2>
        <p>The archive is empty &mdash; check back soon.</p>
    </div>
<?php endif; ?>
</div>

<?php get_footer(); ?>
