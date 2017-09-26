<?php
get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-md-8">
			<header class="page-header">
				<?php if ( have_posts() ) : ?>
				    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'sos' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php else : ?>
				    <h1 class="page-title"><?php _e( 'Nothing Found', 'sos' ); ?></h1>
				<?php endif; ?>
			</header><!-- .page-header -->

			<div id="primary" class="content-area">
				<main id="main" class="search-main row" role="main">

				<?php
				if ( have_posts() ) :
				    /* Start the Loop */
				    while ( have_posts() ) : the_post(); ?>
				        <article>
				        	<?php 
				        		if( has_post_thumbnail() ){
				        	?>
				        		<div class="card-image col-xs-12 col-sm-6 col-md-3">
					        		<a href="<?php the_permalink(); ?>">
					        			<?php the_post_thumbnail(full, array('class' => 'image-responsive', ) ); ?>
					        		</a>
				        		</div>
				        	<?php 
				        		}//if( has_post_thumbnail() )
				        	?>
				        	<div class="col-xs-12 col-sm-6 col-md-9">
					            <div class="loop-title">
					                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					            </div>
					            <div class="page-content">	
					               
					                 <?php the_excerpt(); ?>
					                
					            </div>
				            </div>
				        </article>
				        <div class="clearfix"></div>
				    <?php
				    endwhile; // End of the loop.

				    the_posts_pagination( array(
				        'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'sos' ) . '</span>',
				        'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'sos' ) . '</span>',
				        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'sos' ) . ' </span>',
				    ) );

				else : ?>

				    <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sos' ); ?></p>
				    <?php
				endif;
				?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div class="col-md-4 sidebar-1">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
    </div>
</div>


<?php get_footer();



