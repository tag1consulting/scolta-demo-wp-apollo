<aside id="secondary" class="widget-area">

    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>

        <div class="widget">
            <h3 class="widget-title">Missions</h3>
            <ul>
                <?php
                $cats = get_categories( [ 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => true ] );
                foreach ( $cats as $cat ) :
                ?>
                <li><a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"><?php echo esc_html( $cat->name ); ?></a> <span style="color:#b8b09a;font-size:0.8em;">(<?php echo $cat->count; ?>)</span></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="widget">
            <h3 class="widget-title">Recent Posts</h3>
            <ul>
                <?php
                $recent = get_posts( [ 'numberposts' => 8, 'post_status' => 'publish' ] );
                foreach ( $recent as $p ) :
                ?>
                <li><a href="<?php echo esc_url( get_permalink( $p ) ); ?>"><?php echo esc_html( $p->post_title ); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="widget halftone" style="background:#fff3eb; border-top-color:#1a1a3a;">
            <h3 class="widget-title" style="color:#c2571a;">About This Blog</h3>
            <p style="font-size:0.85rem; line-height:1.6; color:#5a5242; font-style:italic;">
                I started clipping newspaper articles about the space program in 1962. My wife says I have a problem. I say I have a filing system.
            </p>
            <p style="margin-top:0.6rem;"><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>" style="font-size:0.8rem; font-family:sans-serif; text-transform:uppercase; letter-spacing:.1em;">Read More &rarr;</a></p>
        </div>

        <div class="widget">
            <h3 class="widget-title">Try Searching</h3>
            <ul>
                <?php
                $queries = [ 'what went wrong', 'who walked on the moon', 'scary moment', 'first', 'funny', 'what did they find', 'the last one', 'television' ];
                foreach ( $queries as $q ) :
                ?>
                <li><a href="<?php echo esc_url( home_url( '/?s=' . urlencode( $q ) ) ); ?>" style="font-style:italic;">&ldquo;<?php echo esc_html( $q ); ?>&rdquo;</a></li>
                <?php endforeach; ?>
            </ul>
        </div>

    <?php endif; ?>

</aside>
