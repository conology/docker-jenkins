<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'multipurpose_ecommerce_hide_show_scroll',true) != '') { ?>
    <?php $theme_lay = get_theme_mod( 'multipurpose_ecommerce_footer_options','Right');
        if($theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'multipurpose-ecommerce' ); ?></span></a>
        <?php }else if($theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'multipurpose-ecommerce' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'multipurpose-ecommerce' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<div class="container">
		<span><?php multipurpose_ecommerce_credit(); ?> <?php echo esc_html(get_theme_mod('multipurpose_ecommerce_footer_text',__('By ThemesEye','multipurpose-ecommerce'))); ?> </span>
		<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','multipurpose-ecommerce') ?></span>
	</div>
</div>