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
	<header>
		<div class="header-top">
			<nav role="navigation">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-sos-safety-navigation">
								    <span class="sr-only">Toggle navigation</span>
								    <span class="icon-bar"></span>
								    <span class="icon-bar"></span>
								    <span class="icon-bar"></span>
								</button>
							</div>
							 <div class="collapse navbar-collapse" id="top-sos-safety-navigation">
							 	<ul class="nav navbar-nav navbar-right">
									<li class="top-section">
										<div class="show-top-header">
											<div id="google_translate_element">
											</div>
											<script type="text/javascript">
												function googleTranslateElementInit() {
												  new google.translate.TranslateElement({
													pageLanguage: 'en',
													layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL    }, 'google_translate_element');
												}
											</script>
											<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
										</div>
									</li>
									<li class="top-section">
										<div class="show-top-header">
											<span class="glyphicon glyphicon-globe"></span>
											<span><a href="<?php echo esc_url( get_permalink(11) ); ?>">About us</a></span>
											<span class="toggle-area dropdown-toggle " data-toggle="dropdown">
												<span class="caret"></span>
												<span class="sr-only">Menu</span>
											</span>
											<ul class="dropdown-menu">
											    <li><a href="<?php echo esc_url( get_permalink(15) ); ?>">Location</a></li>
											    <li><a href="<?php echo esc_url( get_permalink(13) ); ?>">News</a></li>
											</ul>
										</div>
									</li>
									<li class="top-section screen-b-1356">
										<div class="show-top-header">						
												<a href="mailto:<?php echo get_bloginfo( 'admin_email' ); ?>">
											    	<span class="glyphicon glyphicon-envelope"></span>
											    	<?php echo get_bloginfo( 'admin_email' ); ?>
											    </a>
										</div>
									</li>	
									<li class="top-section screen-b-1356">
										<div class="show-top-header">						
											<a href="<?php echo esc_url( get_permalink(142) ); ?>">
												<i class="fa fa-info-circle" aria-hidden="true"></i> Information Request
											</a>
										</div>
									</li>									
									<li class="top-section">
										<div class="show-top-header">						
												<span class="glyphicon glyphicon-earphone"></span>
											    <span><a href="tel:+15612374247">(561) 237-4247</a></span>
											    <span class="toggle-area dropdown-toggle screen-l-1356" data-toggle="dropdown">
											    	<span class="caret"></span>
											    	<span class="sr-only">Menu</span>
											    </span>
											<ul class="dropdown-menu screen-l-1356">
											    <!-- <li><a href="#">Fax: (561) 237-4248</a></li> -->
											    <li><a href="mailto:<?php echo get_bloginfo( 'admin_email' ); ?>">
											    	<span class="glyphicon glyphicon-envelope"></span>  <?php echo get_bloginfo( 'admin_email' ); ?></a>
											    </li>
											    <li role="presentation" class="divider screen-l-1356"></li>
											    <li><a href="<?php echo esc_url( get_permalink(142) ); ?>">Information Request</a></li>
											</ul>
										</div>
									</li>
									<li class="top-section">
										<div class="show-top-header main-color first-top-section">
										<a>
											<span class="glyphicon glyphicon-fire"></span>
											<span>Advanced Protection</span>
										</a>
										</div>
									</li>
								</ul>
							 </div>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-5 col-sm-3 logobg">
					<?php 					
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					} ?>
				</div>
				<div class="col-xs-7">								
					<?php if(do_shortcode('[woof_text_filter]')){?>
					<?php echo do_shortcode('[woof_text_filter]');}else{?>
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
					<?php } ?>
				</div>
			</div>
		</div>
	</header>
	<nav id="navbar-main">
		<div class="navbar" role="navigation">
         <!-- Brand and toggle get grouped for better mobile display -->
			<div class="container-fluid">
				<div class="row">  
					<div class="hd-inner">
						<div class="col-xs-12">
							<div class="nav-header-menu">
								<span id="all-products-button"><span class="glyphicon glyphicon-list"></span> All products</span>
								<div id="menu-hidden-coll">
									<?php wp_nav_menu( array( 'theme_location' 	=> 'top') ); ?>
								</div>
								<div class="company-links-menu">
									<?php wp_nav_menu( array( 'theme_location' 	=> 'company') ); ?>
								</div>
							</div>
						</div>
					</div><!-- hd-inner -->
				</div>
			</div><!-- /.container -->
		</div>
	</nav>
	<?php
	// if(!is_front_page() && !is_product()) {
	// 	if(is_shop() || is_archive()){
	// 		$page_id = wc_get_page_id('shop'); 
	// 	}else{
	// 		$page_id = get_the_ID();
	// 	}
	// 	$featured_img_url = get_the_post_thumbnail_url($page_id, 'full'); 	
	// 	if(!$featured_img_url) {
	// 		$featured_img_url = $template_url.'/assets/images/products.png';
	// 	}
	// 	if(!is_product_category()) {
	// 		?>
	<!-- 	 <div class="container">
	 			<div class="head-img">
					<img class="img-responsive" src="<?php// echo $featured_img_url; ?>" />
	 			</div>
			</div> -->
	 		<?php
	// 	}
	// }
	?> 
	<?php 
		echo is_product() ? '<div class="bg-grey"><div class="container inner-edge-shadow"><div class="row">' : '<div class="container"><div class="row">';
	?>
	
		
