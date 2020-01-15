<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

<main id="main" role="main">
	<?php do_action( 'multipurpose_ecommerce_page_top' ); ?>
	
	<div class="container">

		<?php
			while ( have_posts() ) : the_post();?>

				<div class="feature-box">   
	                <?php the_post_thumbnail(); ?>
	            </div>
				<h1><?php the_title();?></h1>
				<div class="entry-content"><?php the_content(); ?></div>
				
				<?php
			        // If comments are open or we have at least one comment, load up the comment template.
			        if ( comments_open() || get_comments_number() ) {
			            comments_template();
			        }
			    ?>

			<?php endwhile; // End of the loop.

			wp_reset_postdata(); ?>
	</div>

	<?php do_action( 'multipurpose_ecommerce_page_bottom' ); ?>
</main>

<?php get_footer();
