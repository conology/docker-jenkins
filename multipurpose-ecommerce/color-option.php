<?php
	
	/*---------------------------First highlight color-------------------*/

	$multipurpose_ecommerce_theme_color = get_theme_mod('multipurpose_ecommerce_theme_color');

	$custom_css = '';

	if($multipurpose_ecommerce_theme_color != false){
		$custom_css .='.topbar-box, span.cart-value, .slide-button a, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce span.onsale, .search-form .search-submit, .site-info, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce .cart .button, .woocommerce .cart input.button, button, input[type="button"], input[type="submit"], nav.woocommerce-MyAccount-navigation li, .next.page-numbers, .page-numbers,.scrollup i,.tags p a,.comment-reply-link, .post-navigation .nav-next a, .post-navigation .nav-previous a,.widget .tagcloud a:hover, #sidebox .tagcloud a:hover{';
			$custom_css .='background-color: '.esc_html($multipurpose_ecommerce_theme_color).';';
		$custom_css .='}';
	}
	if($multipurpose_ecommerce_theme_color != false){
		$custom_css .='a, .logo h1 a, .navigation-top .current-menu-item > a, .navigation-top .current_page_item > a, .main-navigation a:hover, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce ul.products li.product .price, .woocommerce ul.products li.product .buttons, .woocommerce ul.products li.product .button, a.post-link:hover, .category a:hover,.date a:hover, .woocommerce ul.products li.product a, .product_meta a,.main-navigation ul ul li a,.main-navigation li li:focus > a,.main-navigation li li:hover > a, .post-info a:hover, #sidebox ul li a:hover, .site-footer ul li a:hover,.logo h1 a, .site-title, .site-title a, .site-title a:hover{';
			$custom_css .='color: '.esc_html($multipurpose_ecommerce_theme_color).';';
		$custom_css .='}';
	}
	if($multipurpose_ecommerce_theme_color != false){
		$custom_css .='hr.product-head{';
			$custom_css .='border-top-color: '.esc_html($multipurpose_ecommerce_theme_color).';';
		$custom_css .='}';
	}
	if($multipurpose_ecommerce_theme_color != false){
		$custom_css .='.scrollup i{';
			$custom_css .='border-color: '.esc_html($multipurpose_ecommerce_theme_color).';';
		$custom_css .='}';
	}
	if($multipurpose_ecommerce_theme_color != false){
		$custom_css .='.main-navigation ul ul li:hover{';
			$custom_css .='border-left-color: '.esc_html($multipurpose_ecommerce_theme_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'multipurpose_ecommerce_theme_options','Default');
    if($theme_lay == 'Default'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page .middle-header{';
			$custom_css .='width: 97.3%';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Layout'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page .middle-header{';
			$custom_css .='width: 97.7%';
		$custom_css .='}';
	}else if($theme_lay == 'Box Layout'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto !important; margin-left: auto !important;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$slider_layout = get_theme_mod( 'multipurpose_ecommerce_slider_opacity_color','0.7');
	if($slider_layout == '0'){
		$custom_css .='#slider-section img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($slider_layout == '0.1'){
		$custom_css .='#slider-section img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($slider_layout == '0.2'){
		$custom_css .='#slider-section img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($slider_layout == '0.3'){
		$custom_css .='#slider-section img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($slider_layout == '0.4'){
		$custom_css .='#slider-section img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($slider_layout == '0.5'){
		$custom_css .='#slider-section img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($slider_layout == '0.6'){
		$custom_css .='#slider-section img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($slider_layout == '0.7'){
		$custom_css .='#slider-section img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($slider_layout == '0.8'){
		$custom_css .='#slider-section img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($slider_layout == '0.9'){
		$custom_css .='#slider-section img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

		/*---------------------------Slider Content Layout -------------------*/

	$slider_layout = get_theme_mod( 'multipurpose_ecommerce_slider_content_option','Center');
    if($slider_layout == 'Left'){
		$custom_css .='#slider-section .carousel-caption, #slider-section .inner_carousel, #slider-section .inner_carousel h1, #slider-section .slide-button{';
			$custom_css .='text-align:left; left:15%; right:45%;';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width: 767px){
		#slider-section .slide-button a{';
		$custom_css .='font-size:13px;';
		$custom_css .='} }';
		$custom_css .='
		@media screen and (max-width: 990px) and (min-width: 768px){
		#slider-section .inner_carousel h1{';
		$custom_css .='font-size:40px;';
		$custom_css .='} }';
	}else if($slider_layout == 'Center'){
		$custom_css .='#slider-section .carousel-caption, #slider-section .inner_carousel, #slider-section .inner_carousel h1, #slider-section .slide-button{';
			$custom_css .='text-align:center; left:15%; right:10%;';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width: 990px) and (min-width: 768px){
		#slider-section .inner_carousel h1{';
		$custom_css .='font-size:40px;';
		$custom_css .='} }';
	}else if($slider_layout == 'Right'){
		$custom_css .='#slider-section .carousel-caption, #slider-section .inner_carousel, #slider-section .inner_carousel h1, #slider-section .slide-button{';
			$custom_css .='text-align:right; left:45%; right:15%;';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width: 767px){
		#slider-section .slide-button a{';
		$custom_css .='font-size:13px;';
		$custom_css .='} }';
		$custom_css .='
		@media screen and (max-width: 990px) and (min-width: 768px){
		#slider-section .inner_carousel h1{';
		$custom_css .='font-size:40px;';
		$custom_css .='} }';
	}
