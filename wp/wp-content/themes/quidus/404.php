<?php

/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="page-content">
								<header class="page-header">
									<h2 class="page-title"><?php _e( 'ERROR 404!', 'quidus' ); ?></h2>
								</header><!-- .page-header -->
					<p><?php _e( 'This page does not exist. You should go back or try a search.', 'quidus' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
