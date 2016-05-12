<?php
/**
 * The template used for displaying page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			
			if ( is_page() ) :
			
			the_content( sprintf(
				__( 'Read more %s', 'quidus' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
			else :
			the_excerpt();
			endif;
			
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'quidus' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'quidus' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );


		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
