<?php get_header(); ?>

<div class="wrap">
	<div class="container">
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header>
        <div class="page-content">		
            <?php the_content(); ?>
        </div>
	</div><!-- .container -->
</div><!-- .wrap -->

<?php get_footer(); ?>
