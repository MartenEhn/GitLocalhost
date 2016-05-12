<?php
/**
 * The template for displaying Author information
 */
?>

<div class="author-info">
	<div class="author-avatar">
	
		<?php
		
		/**
		 * Filter the author bio avatar size.
		 *
		 * @param int $size The avatar height and width size in pixels.
		 */
		 
		$author_bio_avatar_size = apply_filters( 'quidus_author_bio_avatar_size', 100 );

		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-avatar -->

	<div class="author-description">
		<h4 class="author-title"><?php echo get_the_author(); ?></h4>

		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
		</p><!-- .author-bio -->
		<?php if( class_exists( 'Kirki' ) ) : ?>
			<?php quidus_author_social(); ?>
		<?php endif; ?>
	</div><!-- .author-description -->
</div><!-- .author-info -->
