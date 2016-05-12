<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 */
?>

<section class="no-results not-found">

	<div class="page-content">
	
		<header class="page-header">
			<h2 class="page-title"><?php _e( 'No content found', 'quidus' ); ?></h2>
		</header><!-- .page-header -->
	
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Start publishing <a href="%1$s">here</a>.', 'quidus' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'No results found for your query.', 'quidus' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'We can&rsquo;t find what you are looking for. Perhaps searching can help.', 'quidus' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
