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
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="top-section">
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
						</div>
						<div class="top-section">
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
						</div>
						<div class="top-section">
							<div class="show-top-header">						
									<span class="glyphicon glyphicon-earphone"></span>
								    <span><a href="tel:+15612374247">(561) 237-4247</a></span>
								    <span class="toggle-area dropdown-toggle " data-toggle="dropdown">
								    	<span class="caret"></span>
								    	<span class="sr-only">Menu</span>
								    </span>
								<ul class="dropdown-menu">
								    <!-- <li><a href="#">Fax: (561) 237-4248</a></li> -->
								    <li><a href="mailto:info@sos-safety.com">
								    	<span class="glyphicon glyphicon-envelope"></span>
								    	 info@sos-safety.com</a>
								    </li>
								    <li role="presentation" class="divider"></li>
								    <li><a href="<?php echo esc_url( get_permalink(17) ); ?>">Contact us</a></li>
								    <li><a href="<?php echo esc_url( get_permalink(142) ); ?>">Information Request</a></li>
								</ul>
							</div>
						</div>
						<div class="top-section">
							<div class="show-top-header main-color first-top-section">
							<a href="<?php echo esc_url( get_permalink(1) ); ?>">
								<span class="glyphicon glyphicon-fire"></span>
								<span>Advanced Protection</span>
							</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-3 logobg">
					<?php 					
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					} ?>
				</div>
				<div class="col-xs-6">
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
				</div>
				<div class="col-xs-3">
					<div class="cart-block">
						<a class="no-link-style" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('My Cart',''); ?>" >
							<div class="half-block">						
								<div class="quarter-cart">
									<span class="header-cart-count">
										<?php echo WC()->cart->get_cart_contents_count(); ?>
									</span>
								</div>
								<div class="quarter-cart">
									<span class="cart-name">Cart</span>
								</div>
							</div>
							<div class="half-block">
								<span class="glyphicon glyphicon-shopping-cart"></span>
							</div>
						</a>
					</div>
					<div class="user-account">
					<a class="no-link-style" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account',''); ?>">
						<!-- <a  href="<?php// echo get_site_url() . '/my-account'; ?>"> -->
							<div class="half-block">						
								<!-- <div class="quarter-cart"> -->
									<!-- <span class="user-up">Sing up</span> -->
								<!-- </div> -->
								<!-- <div class="quarter-cart"> -->
							<span class="user-in">
							<?php 
								if ( is_user_logged_in()) {
									$user = wp_get_current_user();
									echo $user->display_name;
								}else{
									echo 'Sign in';
								}
							?>
							
							</span>
								<!-- </div> -->
							</div>
							<div class="half-block">
								<?php if ( is_user_logged_in()){ ?>
								    <img class="header-user-icon" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>"  />
								<?php } else { ?>
									<span class="glyphicon glyphicon-user"></span>
								<?php } ?>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<nav id="navbar-main">
		<div class="navbar" role="navigation">
         <!-- Brand and toggle get grouped for better mobile display -->
			<div class="container">
				<div class="row">  
					<div class="hd-inner">
						<div class="col-xs-12">
							<div class="nav-header-menu">
			                    <?php 
									wp_nav_menu( 
										array( 'theme_location' 	=> 'top') 
									); 
								?>
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
	
		
