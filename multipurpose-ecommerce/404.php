<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<div class="container">
			<main id="main" class="site-main" role="main">
				<section class="error-404 not-found">
					<header class="page-header" role="banner">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'multipurpose-ecommerce' ); ?></h1>
					</header>
					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'multipurpose-ecommerce' ); ?></p>

						<?php get_search_form(); ?>

					</div>
				</section>
			</main>
		</div>
	</div>
</div>

<?php get_footer();
