<?php get_header(); ?>

<div class="search-results-header">
    <h1>Results for: <span class="search-query">&ldquo;<?php echo esc_html( get_search_query() ); ?>&rdquo;</span></h1>
    <p class="search-count">
        <?php
        global $wp_query;
        $total = $wp_query->found_posts;
        echo $total . ' ' . ( $total === 1 ? 'entry' : 'entries' ) . ' found';
        ?>
    </p>
</div>

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
        <h2>Nothing found for &ldquo;<?php echo esc_html( get_search_query() ); ?>&rdquo;</h2>
        <p>Try different keywords, or browse the mission archives in the sidebar.</p>
        <form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="justify-content:center; margin-top:1rem;">
            <input type="search" name="s" placeholder="Try again&hellip;">
            <button type="submit">Search</button>
        </form>
    </div>
<?php endif; ?>
</div>

<?php get_footer(); ?>
