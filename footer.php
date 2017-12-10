		<?php echo " <!-- Start footer(footer.php) --> "; ?>
		<?php 
			if ( is_product() ){
				echo '</div></div></div>';
			}else{
				if ( is_page_template() ){

				}else{
					echo '</div></div>';
				}
			}
		?>
		<footer>
			<div class="footer_bottom_col">
				<div class="container footer-r1">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-4">
									<a class="stay-us" href="<?php echo esc_url( get_permalink(17) ); ?>"><?php _e('Stay with us', 'sos'); ?></a>
								</div>
								<div class="col-md-8">
									<ul class="footer-social">
										<li><a href="https://twitter.com/sossafety"target="_blank"><i class="fa fa-twitter" aria-hidden="false"></i></a></li>
										<li><a href="https://plus.google.com/u/2/104118481944376195371"target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
<li><a href="https://www.facebook.com/SOS.Safety/"target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="https://in.linkedin.com/company/sos-safety-international-inc-"target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 f-right">
							<p><strong><?php _e('Tel:', 'sos'); ?></strong>
							<a target="_blank" href="tel:5612374247"><?php _e('(561) 237-4247', 'sos'); ?></a> | 
							<strong><?php _e('Fax:', 'sos'); ?></strong>
							<?php _e('(561) 237-4248', 'sos'); ?>  | 
							<strong><?php _e('Email:', 'sos'); ?></strong>
							<a target="_blank" href="mailto:<?php echo get_bloginfo( 'admin_email' ); ?>">
							<?php echo get_bloginfo( 'admin_email' ); ?></a></p>
						</div>
						<div class="col-md-12">
							<hr/>
						</div>
					</div>
				</div>	
				<div class="container">
					<div class="row">
						
						<div class="col-md-4">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
						<div class="col-md-3">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div>
						<div class="col-md-5">
							<?php dynamic_sidebar( 'footer-3' ); ?>
						</div>
						
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<p>&copy; <?php printf(__('%d SOS Safety International, Inc. All rights reserved.', 'sos'), date('Y')); ?></p>
					</div>
					<div class="col-md-5">
						<?php wp_nav_menu( array( 'theme_location' 	=> 'footer') ); ?>
					</div>
				</div>
			</div>
		</div>
		<?php echo " <!-- Start wp_footer()(footer.php) --> "; ?>
		<?php wp_footer(); ?>
		<?php echo " <!-- End wp_footer()(footer.php) --> "; ?>
	</div>
	</body>
</html>
<?php echo " <!-- End footer(footer.php) --> "; ?>