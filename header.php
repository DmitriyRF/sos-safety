<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); wp_reset_query(); ?>
</head>
<?php $template_url = get_bloginfo('template_url'); ?>
<body <?php body_class(); ?>>
<div class="wrap watermark">
	<nav id="navbar-main" class="navbar navbar-custom navbar-absolute-top" role="navigation">
         <!-- Brand and toggle get grouped for better mobile display -->
		<div class="container">
			<div class="row">  
				<div class="hd-inner">
					<div class="col-xs-4 col-sm-3 col-md-3 logobg">
						<?php 					
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						} ?>
					</div>
					<div class="col-xs-8 col-sm-9 col-md-9 nav-head">
						<div class="nav-header-menu">
							<div id="custom-search-input" class="yith-ajaxsearchform-container">
								<form class="navbar-form" id="yith-ajaxsearchform" action="<?php echo get_bloginfo('url'); ?>" role="search">
									<div class="input-group col-md-12">
										<input type="text" id="yith-s" name="s" data-min-chars="3" data-loader-icon="" autocomplete="off" class="form-control input-lg yith-s" placeholder="<?php _e('Search', 'sos'); ?>" />
										<span class="input-group-btn">
										    <button class="btn btn-info btn-lg" id="yith-searchsubmit" type="submit">
										        <i class="glyphicon glyphicon-search"></i>
										    </button>
										</span>
									</div>
								</form>
							</div>
							
							<div id="google_translate_element"></div>
							<script type="text/javascript">
								function googleTranslateElementInit() {
								  new google.translate.TranslateElement({
									pageLanguage: 'en',
									layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL    }, 'google_translate_element');
								}
							</script>
							<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
						</div>
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only"><?php _e('Toggle navigation', 'sos'); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-bar-bg" id="bs-example-navbar-collapse-1">
		                    <?php 
							$arg = array( 
									'theme_location' 	=> 'top',
									'container' 		=> '',
									'items_wrap' 		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'menu_class'     	=> 'nav navbar-nav',
                					'fallback_cb'    	=> 'WP_Bootstrap_Navwalker::fallback',
                					'walker'            => new WP_Bootstrap_Navwalker()
								);
							wp_nav_menu( $arg ); ?>
							
							<div class="hd-mediaicons pull-right">
								<ul class="inline-items">
									<li><a class="icon fb" href="#"><img src="<?php echo $template_url; ?>/assets/images/icon-fb.png" alt=""></a></li>
								</ul>
							</div>
							
						</div><!-- /.navbar-collapse -->
						
					</div>
					
				</div><!-- hd-inner -->
			</div>
		</div><!-- /.container -->
	</nav>
	<?php
	if(!is_front_page() && !is_product()) {
		if(is_shop() || is_archive()){
			$page_id = wc_get_page_id('shop'); 
		}else{
			$page_id = get_the_ID();
		}
		$featured_img_url = get_the_post_thumbnail_url($page_id, 'full'); 	
		if(!$featured_img_url) {
			$featured_img_url = $template_url.'/assets/images/products.png';
		}
		if(!is_product_category()) {
			?>
			<div class="container">
				<div class="head-img">
					<img class="img-responsive" src="<?php echo $featured_img_url; ?>" />
				</div>
			</div>
			<?php
		}
	}
