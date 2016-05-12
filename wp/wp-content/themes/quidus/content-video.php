<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<i class="fa fa-play-circle video-mark"></i>
	<div class="post-thumbnail"><?php quidus_post_thumbnail(); ?></div>
	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
			endif;
		?>
		<footer class="entry-footer <?php if ( is_single() ) : echo 'single'; endif;?>">
			<?php quidus_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'quidus' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		
			if ( is_single() ) :
			the_content( sprintf(
				(''),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
			else : 
			the_excerpt(); ?> <p><a href="<?php echo esc_url(get_permalink()); ?>"><?php _e('Read More', 'quidus') ?></a></p><?php
			endif;

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'quidus' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'quidus' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
			
					// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		
		if ( is_single() ) :
			the_post_navigation( array(
				'next_text' => '<h3 class="post-title">%title</h3>',
				'prev_text' => '<h3 class="post-title">%title</h3>'
			) );
		endif;
		
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
