<?php
/**
	* The sidebar containing the main widget area
*/

if ( ! is_active_sidebar( 'sidebox-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'multipurpose-ecommerce' ); ?>">
	<?php dynamic_sidebar( 'sidebox-1' ); ?>
</aside>