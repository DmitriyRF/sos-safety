<?php get_header(); ?>
<?php $template_url = get_bloginfo('template_url'); ?>
<!--- Hero image slider -->   
<?php 
$args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'menu_order',
	'order'            => 'ASC',
	'post_type'        => 'slide',
);
$slider = get_posts( $args ); 
if(!empty($slider)) { ?>
	<div class="hero-slider">   
      <header id="hero-carousel" class="carousel slide carousel-fade main-banner">
          <div class="carousel-inner">
          	<?php
          	$k=0;
          	foreach($slider as $slide) { 
          		 $slide_url = get_post_meta($slide->ID, 'slide_url', true);
               $yvideo_id = trim(get_post_meta($slide->ID, 'yvideo_id', true));
          		?>
        		    <div class="item <?php echo (($k==0)?'active':''); ?>">
                  <?php if(empty($yvideo_id)) { ?>
                    <div class="fill" style="background-image:url('<?php echo get_the_post_thumbnail_url($slide, 'full'); ?>');"></div>
                  <?php } ?>
                    <div class="carousel-caption<?php echo ((!empty($yvideo_id))?' ivideo-text':''); ?>">
                      <?php if(!empty($yvideo_id)) { ?>
                        <h2><img src="<?php echo get_the_post_thumbnail_url($slide, 'full'); ?>" alt="<?php echo $slide->post_title; ?>"></h2>
                      <?php } else { ?>
                        <h2><?php echo $slide->post_title; ?></h2>
                      <?php } ?>
                        <p><?php echo $slide->post_excerpt; ?></p>
                        <a href="<?php echo $slide_url; ?>" class="btn orgbtn"><?php _e('Learn More', 'sos'); ?></a>
                    </div>
                     <?php if(!empty($yvideo_id)) { ?>
                        <span class="play-video"></span>
                      <div class="ivideo"><iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $yvideo_id; ?>" frameborder="0"></iframe></div>
                    <?php } ?>
		        </div>
            <?php $k++; } ?>
         </div>
         <!-- Controls -->
         <a class="left carousel-control" href="#hero-carousel" data-slide="prev">
         	<i class="fa fa-chevron-left" aria-hidden="true"></i>             
         </a>
         <a class="right carousel-control" href="#hero-carousel" data-slide="next">
         	<i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
        
      </header>
    </div>    
<?php } ?>       
<!-- Hero image slider end -->       
<!-- Categories slider start -->       
<div class="categories-slider">         
	<section class="categories-sec">
		<div class="container">

            <h3><a href="http://fastdev.in/sos-safety/products" class="hcat-title"><?php _e('View All Categories', 'sos'); ?></a></h3>
            <?php echo do_shortcode('[woo_category_slider include_children="false" button_text="" cols="6"]'); ?>

		</div>
	</section>
</div> 
<!-- Categories slider end -->
<!-- Client Logo -->
<?php 
$args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'menu_order',
	'order'            => 'ASC',
	'post_type'        => 'client-logo',
);
$client_logo = get_posts( $args ); 
if(!empty($client_logo)) { ?>
	<div class="client-logo">         
		<section class="client-logo-sec">   
			<div class="container">
                <?php 
                foreach($client_logo as $cl) { 
                    $cl_url = get_post_meta($cl->ID, 'slide_url', true); ?>
                    <div class="col-md-2">
                        <div class="thumbnail">
                            <img src="<?php echo get_the_post_thumbnail_url($cl, 'full'); ?>" alt="<?php echo $cl->post_title; ?>" title="<?php echo $cl->post_title; ?>">
                            <div class="caption">
                                <h3 class="brand-name"><?php echo $cl->post_title; ?></h3>
                                <p class="brand-title"><?php echo $cl->post_excerpt; ?></p> 	
                                <a href="<?php echo $cl_url; ?>"><?php _e('Click Here', 'sos'); ?></a>	                        
                            </div>
                        </div>
                    </div>
                <?php }  ?>
			</div>
		</section>
	</div>
<?php } ?>
<!-- Client Logo End -->       
        
<?php get_footer(); ?>
