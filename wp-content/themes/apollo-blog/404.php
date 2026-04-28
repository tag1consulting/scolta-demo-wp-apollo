<?php get_header(); ?>

<div class="error-404">
    <div class="error-code">404</div>
    <h1>Entry Not Found</h1>
    <p>This page seems to have drifted off course &mdash; like a spacecraft with a dead transponder.<br>Try searching the archive, or head back to the home page.</p>
    <form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="justify-content:center; margin: 1.5rem 0;">
        <input type="search" name="s" placeholder="Search the archive&hellip;">
        <button type="submit">Search</button>
    </form>
    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">← Return to the home page</a></p>
</div>

<?php get_footer(); ?>
