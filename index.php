<?php get_header(); ?>

	<div class="container">	
        <header class="page-header">
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            <?php else : ?>
                <h2 class="page-title"><?php _e( 'Posts', 'sos' ); ?></h2>
            <?php endif; ?>
        </header>

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                if ( have_posts() ) :

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                    ?>
                        <article>
                            <div class="loop-title">	
                                <div class="container"><h1><?php the_title(); ?></h1></div>
                            </div>
                            <div class="page-content">	
                                <div class="container">	
                                    <?php the_excerpt(); ?>
                                </div>
                            </div><!-- .container -->
                        </article>
                    <?php 
                    endwhile;
                    the_posts_pagination( array(
                        'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'sos' ) . '</span>',
                        'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'sos' ) . '</span>',
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'sos' ) . ' </span>',
                    ) );
                endif;
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
	</div>

<?php get_footer();
