<?php
/**
 * The template for displaying comments
 *
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
				printf( _nx( 'Comment on &ldquo;%2$s&rdquo;', '%1$s opinions on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'quidus' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h3>

		<?php quidus_comment_nav(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 70,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php quidus_comment_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comment posting is disabled at the moment.', 'quidus' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- .comments-area -->
