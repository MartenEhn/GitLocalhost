<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $format = get_post_format( );

	switch ($format) {
		case 'audio':
			echo '<i class="fa fa-volume-up post-mark"></i>';
			break;
		case 'video':
			echo '<i class="fa fa-play-circle post-mark"></i>';
			break;
		case 'gallery':
			echo '<i class="fa fa-camera post-mark"></i>';
			break;
		case 'image':
			echo '<i class="fa fa-photo post-mark"></i>';
			break;
		case 'link':
			echo '<i class="fa fa-link post-mark"></i>';
			break;
		case 'quote':
			echo '<i class="fa fa-quote-left post-mark"></i>';
			break;
		default:
			echo '<i class="fa fa-align-left post-mark"></i>';
	} 

 if ( has_post_thumbnail( ) ) : 
	echo '<div class="post-image">';
		// Post thumbnail.
		quidus_post_thumbnail();
	echo '</div>'; 
	endif;
	?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<footer class="entry-footer">
			<?php quidus_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'quidus' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php
	switch ($format) {
		case 'audio':
			the_excerpt(); ?> <p><a href="<?php echo esc_url(get_permalink()); ?>"><?php _e('Read More', 'quidus') ?></a></p><?php
			break;
		case 'video':
			the_excerpt(); ?> <p><a href="<?php echo esc_url(get_permalink()); ?>"><?php _e('Read More', 'quidus') ?></a></p><?php
			break;
		case 'gallery':
			the_excerpt(); ?> <p><a href="<?php echo esc_url(get_permalink()); ?>"><?php _e('Read More', 'quidus') ?></a></p><?php
			break;
		case 'image':
			the_excerpt(); ?> <p><a href="<?php echo esc_url(get_permalink()); ?>"><?php _e('Read More', 'quidus') ?></a></p><?php
			break;
		case 'link':
			
			if ( is_single() ) :
			the_content( sprintf(
				(''),
				the_title( '<span class="screen-reader-text">', '</span>', false ) ) ); else : the_excerpt(); ?> <p><a href="<?php echo esc_url(get_permalink()); ?>"><?php _e('Read More', 'quidus') ?></a></p><?php endif;

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'quidus' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'quidus' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
			
			break;
		case 'quote':
			if ( is_single() ) :
			the_content( sprintf(
				(''),
				the_title( '<span class="screen-reader-text">', '</span>', false ) ) ); else : the_excerpt(); ?> <p><a href="<?php echo esc_url(get_permalink()); ?>"><?php _e('Read More', 'quidus') ?></a></p><?php endif;

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'quidus' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'quidus' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
			
			break;
		default:
			the_excerpt(); ?> <p><a href="<?php echo esc_url(get_permalink()); ?>"><?php _e('Read More', 'quidus') ?></a></p><?php
	} ?>
	</div><!-- .entry-summary -->


</article><!-- #post-## -->
