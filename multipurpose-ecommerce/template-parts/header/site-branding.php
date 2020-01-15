<?php
/**
 * Displays header site branding
 */

?>

<div class="site-branding">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="logo">
				    <?php if ( has_custom_logo() ) : ?>
		              <div class="site-logo"><?php the_custom_logo(); ?></div>
		              <?php else: ?>
		              <?php $blog_info = get_bloginfo( 'name' ); ?>
		              <?php if ( ! empty( $blog_info ) ) : ?>
		                <?php if ( is_front_page() && is_home() ) : ?>
		                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		                <?php else : ?>
		                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		                <?php endif; ?>
		              <?php endif; ?>
		              <?php
		              $description = get_bloginfo( 'description', 'display' );
		              if ( $description || is_customize_preview() ) :
		                ?>
		              <p class="site-description">
		                <?php echo esc_html($description); ?>
		              </p>
		            <?php endif; ?>
		            <?php endif; ?>      
				</div>
			</div>
			<div class="col-lg-7 col-md-7">
				<?php if ( has_nav_menu( 'top' ) ) : ?>
					<div class="navigation-top">
						<div class="wrap">
							<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-1 col-md-1">
		      	<div class="search-box">
					<a href="#" onclick="search_open()" ><i class="fas fa-search"></i>
			     		<span class="screen-reader-text"><?php esc_html_e( 'Search','multipurpose-ecommerce' );?></span>
			     	</a>
			    </div>
			</div>
			<div class="col-lg-1 col-md-1">
				<div class="cart_icon">
	                <?php if(class_exists('woocommerce')){ ?>
	                    <li class="cart_box">
	                     <span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
	                    </li> 
	                <?php } ?>
	                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_cart_page_id') ) ); ?>"><img src="<?php echo esc_html(get_template_directory_uri().'/assets/images/cart.png'); ?>" alt="<?php esc_html_e( 'Cart','multipurpose-ecommerce' ); ?>"/><span class="screen-reader-text"><?php esc_html_e( 'Cart','multipurpose-ecommerce' ); ?>"/></span></a>
                </div>
			</div>
		</div>
		<div class="serach_outer">
	    	<a href="#" onclick="search_close()" class="closepop">X<span class="screen-reader-text"><?php esc_html_e( 'serach-outer','multipurpose-ecommerce' );?></span></a>
	    	<div class="serach_inner">
	      <?php get_search_form(); ?>
	    </div>
	</div>
	</div>
</div>