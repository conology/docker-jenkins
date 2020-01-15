<?php
/**
 * Multipurpose Ecommerce functions and definitions
 */
 
function multipurpose_ecommerce_setup() {
	
	load_theme_textdomain( 'multipurpose-ecommerce' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'multipurpose-ecommerce-featured-image', 2000, 1200, true );
	add_image_size( 'multipurpose-ecommerce-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'multipurpose-ecommerce' ),
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_editor_style( array( 'assets/css/editor-style.css', multipurpose_ecommerce_fonts_url() ) );
}
add_action( 'after_setup_theme', 'multipurpose_ecommerce_setup' );

/**
 * Register custom fonts.
 */
function multipurpose_ecommerce_fonts_url() {
	$font_url      = '';
	$font_family   = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';

	$query_args = array(
		'family' => rawurlencode(implode('|', $font_family)),
	);
	$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	return $font_url;
}

/**
 * Widget area.
 */
function multipurpose_ecommerce_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'multipurpose-ecommerce' ),
		'id'            => 'sidebox-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'multipurpose-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'multipurpose-ecommerce' ),
		'id'            => 'sidebox-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on Pages and archive pages.', 'multipurpose-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'multipurpose-ecommerce' ),
		'id'            => 'sidebox-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and pages.', 'multipurpose-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'multipurpose-ecommerce' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'multipurpose-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'multipurpose-ecommerce' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'multipurpose-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'multipurpose-ecommerce' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'multipurpose-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'multipurpose-ecommerce' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'multipurpose-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'multipurpose_ecommerce_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function multipurpose_ecommerce_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'multipurpose-ecommerce-fonts', multipurpose_ecommerce_fonts_url(), array(), null );


	//bootstrap
	wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.css' ), array( 'multipurpose-ecommerce-basic-style' ), '1.0' );
	
	// Theme stylesheet.
	wp_enqueue_style( 'multipurpose-ecommerce-basic-style', get_stylesheet_uri() );

	

	//font-awesome 
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.css' );


	// Paragraph
	$multipurpose_ecommerce_paragraph_color       = get_theme_mod('multipurpose_ecommerce_paragraph_color', '');
	$multipurpose_ecommerce_paragraph_font_family = get_theme_mod('multipurpose_ecommerce_paragraph_font_family', '');
	$multipurpose_ecommerce_paragraph_font_size   = get_theme_mod('multipurpose_ecommerce_paragraph_font_size', '');
	// "a" tag
	$multipurpose_ecommerce_atag_color       = get_theme_mod('multipurpose_ecommerce_atag_color', '');
	$multipurpose_ecommerce_atag_font_family = get_theme_mod('multipurpose_ecommerce_atag_font_family', '');
	// "li" tag
	$multipurpose_ecommerce_li_color       = get_theme_mod('multipurpose_ecommerce_li_color', '');
	$multipurpose_ecommerce_li_font_family = get_theme_mod('multipurpose_ecommerce_li_font_family', '');
	// H1
	$multipurpose_ecommerce_h1_color       = get_theme_mod('multipurpose_ecommerce_h1_color', '');
	$multipurpose_ecommerce_h1_font_family = get_theme_mod('multipurpose_ecommerce_h1_font_family', '');
	$multipurpose_ecommerce_h1_font_size   = get_theme_mod('multipurpose_ecommerce_h1_font_size', '');
	// H2
	$multipurpose_ecommerce_h2_color       = get_theme_mod('multipurpose_ecommerce_h2_color', '');
	$multipurpose_ecommerce_h2_font_family = get_theme_mod('multipurpose_ecommerce_h2_font_family', '');
	$multipurpose_ecommerce_h2_font_size   = get_theme_mod('multipurpose_ecommerce_h2_font_size', '');
	// H3
	$multipurpose_ecommerce_h3_color       = get_theme_mod('multipurpose_ecommerce_h3_color', '');
	$multipurpose_ecommerce_h3_font_family = get_theme_mod('multipurpose_ecommerce_h3_font_family', '');
	$multipurpose_ecommerce_h3_font_size   = get_theme_mod('multipurpose_ecommerce_h3_font_size', '');
	// H4
	$multipurpose_ecommerce_h4_color       = get_theme_mod('multipurpose_ecommerce_h4_color', '');
	$multipurpose_ecommerce_h4_font_family = get_theme_mod('multipurpose_ecommerce_h4_font_family', '');
	$multipurpose_ecommerce_h4_font_size   = get_theme_mod('multipurpose_ecommerce_h4_font_size', '');
	// H5
	$multipurpose_ecommerce_h5_color       = get_theme_mod('multipurpose_ecommerce_h5_color', '');
	$multipurpose_ecommerce_h5_font_family = get_theme_mod('multipurpose_ecommerce_h5_font_family', '');
	$multipurpose_ecommerce_h5_font_size   = get_theme_mod('multipurpose_ecommerce_h5_font_size', '');
	// H6
	$multipurpose_ecommerce_h6_color       = get_theme_mod('multipurpose_ecommerce_h6_color', '');
	$multipurpose_ecommerce_h6_font_family = get_theme_mod('multipurpose_ecommerce_h6_font_family', '');
	$multipurpose_ecommerce_h6_font_size   = get_theme_mod('multipurpose_ecommerce_h6_font_size', '');

	$custom_css = '
			p,span{
			    color:'.esc_html($multipurpose_ecommerce_paragraph_color).'!important;
			    font-family: '.esc_html($multipurpose_ecommerce_paragraph_font_family).';
			    font-size: '.esc_html($multipurpose_ecommerce_paragraph_font_size).';
			}
			a{
			    color:'.esc_html($multipurpose_ecommerce_atag_color).'!important;
			    font-family: '.esc_html($multipurpose_ecommerce_atag_font_family).';
			}
			li{
			    color:'.esc_html($multipurpose_ecommerce_li_color).'!important;
			    font-family: '.esc_html($multipurpose_ecommerce_li_font_family).';
			}
			h1{
			    color:'.esc_html($multipurpose_ecommerce_h1_color).'!important;
			    font-family: '.esc_html($multipurpose_ecommerce_h1_font_family).'!important;
			    font-size: '.esc_html($multipurpose_ecommerce_h1_font_size).'!important;
			}
			h2{
			    color:'.esc_html($multipurpose_ecommerce_h2_color).'!important;
			    font-family: '.esc_html($multipurpose_ecommerce_h2_font_family).'!important;
			    font-size: '.esc_html($multipurpose_ecommerce_h2_font_size).'!important;
			}
			h3{
			    color:'.esc_html($multipurpose_ecommerce_h3_color).'!important;
			    font-family: '.esc_html($multipurpose_ecommerce_h3_font_family).'!important;
			    font-size: '.esc_html($multipurpose_ecommerce_h3_font_size).'!important;
			}
			h4{
			    color:'.esc_html($multipurpose_ecommerce_h4_color).'!important;
			    font-family: '.esc_html($multipurpose_ecommerce_h4_font_family).'!important;
			    font-size: '.esc_html($multipurpose_ecommerce_h4_font_size).'!important;
			}
			h5{
			    color:'.esc_html($multipurpose_ecommerce_h5_color).'!important;
			    font-family: '.esc_html($multipurpose_ecommerce_h5_font_family).'!important;
			    font-size: '.esc_html($multipurpose_ecommerce_h5_font_size).'!important;
			}
			h6{
			    color:'.esc_html($multipurpose_ecommerce_h6_color).'!important;
			    font-family: '.esc_html($multipurpose_ecommerce_h6_font_family).'!important;
			    font-size: '.esc_html($multipurpose_ecommerce_h6_font_size).'!important;
			}

			';
	wp_add_inline_style('multipurpose-ecommerce-basic-style', $custom_css);
	

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'multipurpose-ecommerce-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$multipurpose_ecommerceScreenReaderText=array();
	
	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'multipurpose-ecommerce-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );

		$multipurpose_ecommerceScreenReaderText['expand']         = __( 'Expand child menu', 'multipurpose-ecommerce' );
		$multipurpose_ecommerceScreenReaderText['collapse']       = __( 'Collapse child menu', 'multipurpose-ecommerce' );
		
	}

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery') ,'',true);

	wp_enqueue_script( 'jquery-custom', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), true );

	require get_parent_theme_file_path( '/color-option.php' );
	wp_add_inline_style( 'multipurpose-ecommerce-basic-style',$custom_css );

	wp_localize_script( 'multipurpose-ecommerce-skip-link-focus-fix', 'multipurpose_ecommerceScreenReaderText', $multipurpose_ecommerceScreenReaderText );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'multipurpose_ecommerce_scripts' );

/**
 * Front Page Template 
 */
function multipurpose_ecommerce_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'multipurpose_ecommerce_front_page_template' );

/* Excerpt Limit Begin */
function multipurpose_ecommerce_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function multipurpose_ecommerce_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'multipurpose_ecommerce_loop_columns');
	if (!function_exists('multipurpose_ecommerce_loop_columns')) {
	function multipurpose_ecommerce_loop_columns() {
		return 3; // 3 products per row
	}
}

function multipurpose_ecommerce_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}


define('MULTIPURPOSE_ECOMMERCE_LIVE_DEMO','https://www.themeseye.com/demo/multipurpose-ecommerce/','multipurpose-ecommerce');
define('MULTIPURPOSE_ECOMMERCE_BUY_PRO','https://www.themeseye.com/wordpress/premium-multipurpose-ecommerce-wordpress-themes/','multipurpose-ecommerce');
define('MULTIPURPOSE_ECOMMERCE_PRO_DOC','https://www.themeseye.com/theme-demo/docs/multipurpose-ecommerce-pro/','multipurpose-ecommerce');
define('MULTIPURPOSE_ECOMMERCE_PRO_SUPPORT','https://www.themeseye.com/forums/forum/themeseye-support/','multipurpose-ecommerce');
define('MULTIPURPOSE_ECOMMERCE_FREE_SUPPORT','https://wordpress.org/support/theme/multipurpose-ecommerce/','multipurpose-ecommerce');
//footer Link
define('MULTIPURPOSE_ECOMMERCE_CREDIT','https://www.themeseye.com/wordpress/free-multipurpose-ecommerce-wordpress-themes/','multipurpose-ecommerce');

if ( ! function_exists( 'multipurpose_ecommerce_credit' ) ) {
	function multipurpose_ecommerce_credit(){
		echo "<a href=".esc_url(MULTIPURPOSE_ECOMMERCE_CREDIT).">".esc_html__('Ecommerce WordPress Theme','multipurpose-ecommerce')."</a>";
	}
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/dashboard/get_started_info.php' ); 
