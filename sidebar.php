<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage sos
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'shop-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="col-xs-12 col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9" role="complementary">
	<?php dynamic_sidebar( 'shop-sidebar' ); ?>
</aside><!-- #secondary -->