<div class="clearfix"></div>
<footer>
	<div class="footer_bottom_col">
		<div class="container">
			<div class="row">
				<?php 
				for($i=1; $i<=4; $i++) {
					echo '<div class="col-md-3 col-sm-3">';
						dynamic_sidebar( 'footer-'.$i );
					echo '</div>';
				} 
				?>
			</div>
		</div>
	</div>
</footer>
<div class="copyright">
	<p><?php _e('SOS Safety International, Inc. 20283 State Road 7 Suite #400, Boca Raton, Florida 33498', 'sos'); ?><br><strong><?php _e('Tel:', 'sos'); ?></strong> <a target="_blank" href="tel:5612374247"><?php _e('(561) 237-4247', 'sos'); ?></a> | <strong><?php _e('Fax:', 'sos'); ?></strong> <?php _e('(561) 237-4248', 'sos'); ?>  | <strong><?php _e('Email', 'sos'); ?></strong>: <a target="_blank" href="<?php echo get_bloginfo( 'admin_email' ); ?>"><?php echo get_bloginfo( 'admin_email' ); ?></a></p>
<p style="font-size: 11px;"><?php _e('We accept:', 'sos'); ?><br><img width="168" border="0" height="37" src="<?php echo get_bloginfo( 'template_url' ); ?>/assets/images/credit.jpg"></p>
	<p>&copy; <?php printf(__('%d SOS Safety International, Inc. All rights reserved.', 'sos'), date('Y')); ?></p>
</div>
<?php wp_footer(); ?>
</div>
</body>
</html>
