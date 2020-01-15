<?php

add_action( 'admin_menu', 'multipurpose_ecommerce_gettingstarted' );
function multipurpose_ecommerce_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'multipurpose-ecommerce'), esc_html__('About Theme', 'multipurpose-ecommerce'), 'edit_theme_options', 'multipurpose-ecommerce-guide-page', 'multipurpose_ecommerce_guide');   
}

function multipurpose_ecommerce_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'multipurpose_ecommerce_admin_theme_style');

function multipurpose_ecommerce_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Multipurpose Ecommerce Lite Theme', 'multipurpose-ecommerce' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'multipurpose-ecommerce' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=multipurpose-ecommerce-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'multipurpose-ecommerce' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'multipurpose_ecommerce_notice');


/**
 * Theme Info Page
 */
function multipurpose_ecommerce_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'multipurpose-ecommerce' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Multipurpose Ecommerce Theme', 'multipurpose-ecommerce' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'multipurpose-ecommerce' ); ?></strong></p>
							<p align="center">
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'lite_theme')">Getting Started</button>		  
			  <button class="tablinks" onclick="openCity(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Multipurpose Ecommerce Lite Theme', 'multipurpose-ecommerce' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <p><?php esc_html_e( 'Multipurpose Ecommerce Theme is an exceptional ecommerce WordPress theme which best suits online book store, mobile & tablet store, apparel store, fashion store, sport store, cosmetics shop, jewelry store and other online stores. The WooCommerce WordPress Theme also caters to the needs of agencies, travel, fashion, design, art, digital agency, bloggers, corporate business, portfolio, and product showcase to build their stunning online presence. This theme offers various personalization options to help you give a look you require on your website. It very easy to navigate and fits various screen sizes. You can showcase full-width images, call to action buttons(CTA), sections such as testimonial section to lure as many customers as possible. Furthermore, the social media integration will help you gain exposure in every nook and corner. Its an entirely SEO friendly theme that offers faster page load time and high performance. The theme has few shortcodes and numerous customizable options to fill your website with your colors. It emphasizes on the high-quality banner image that is impressive enough to attract any visitor the moment they visit your website. Built up of optimized, secure and clean codes, It is well worth your purchase. Its Bootstrap base aids web development by enabling multiple features and functionalities on the theme. Grab away this extremely user-friendly and highly professional eCommerce WordPress theme for your store now!', 'multipurpose-ecommerce' ); ?></p>
							<ol>
								<li><?php esc_html_e( 'Start','multipurpose-ecommerce'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','multipurpose-ecommerce'); ?></a> <?php esc_html_e( 'your website.','multipurpose-ecommerce'); ?> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','multipurpose-ecommerce'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'multipurpose-ecommerce'); ?></a>
							<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'multipurpose-ecommerce'); ?></a>
							<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'multipurpose-ecommerce'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','multipurpose-ecommerce'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'Multipurpose eCommerce Theme is an exceptional eCommerce WordPress theme which best suits online bookstore, mobile & tablet store, apparel store, fashion store, sports store, cosmetics shop, jewelry store and other online stores. The WooCommerce WordPress Theme also caters to the needs of agencies, travel, fashion, design, art, digital agency, bloggers, corporate business, portfolio, and product showcase to build their stunning online presence. This theme offers various personalization options to help you give a look you require on your website. It very easy to navigate and fits various screen sizes. You can showcase full-width images, call to action buttons(CTA), sections such as testimonial section to lure as many customers as possible. Furthermore, the social media integration will help you gain exposure in every nook and corner.', 'multipurpose-ecommerce' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','multipurpose-ecommerce'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Documention','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','multipurpose-ecommerce'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','multipurpose-ecommerce'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','multipurpose-ecommerce'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','multipurpose-ecommerce'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','multipurpose-ecommerce'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','multipurpose-ecommerce'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','multipurpose-ecommerce'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','multipurpose-ecommerce'); ?></a> <?php esc_html_e( 'your website.','multipurpose-ecommerce'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Help Docs','multipurpose-ecommerce'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','multipurpose-ecommerce'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','multipurpose-ecommerce'); ?></h3>
						<ol>
							<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'multipurpose-ecommerce'); ?></a>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>

<?php
}?>