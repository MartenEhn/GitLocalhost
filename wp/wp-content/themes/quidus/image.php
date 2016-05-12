<?php
/**
 * The template for displaying image attachments
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
		
				while ( have_posts() ) : the_post();
			?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<nav id="image-navigation" class="navigation image-navigation">
							<div class="nav-links">
								<div class="nav-previous"><?php previous_image_link( false, __( 'Previous Image', 'quidus' ) ); ?></div><div class="nav-next"><?php next_image_link( false, __( 'Next Image', 'quidus' ) ); ?></div>
							</div><!-- .nav-links -->
						</nav><!-- .image-navigation -->
						<footer class="entry-footer">
							<?php quidus_entry_meta(); ?>
							<?php edit_post_link( __( 'Edit', 'quidus' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-footer -->
					</header><!-- .entry-header -->

					<div class="entry-content">

						<div style="text-align:center;" class="entry-attachment">
							<?php
								/**
								 * Filter the default Quidus image attachment size.
								 *
								 * @since Quidus 1.0
								 *
								 * @param string $image_size Image size. Default 'large'.
								 */
								$image_size = apply_filters( 'quidus_attachment_size', 'large' );

								echo wp_get_attachment_image( get_the_ID(), $image_size );
							?>

							<?php if ( has_excerpt() ) : ?>
								<div class="entry-caption">
									<?php the_excerpt(); ?>
								</div><!-- .entry-caption -->
							<?php endif; ?>

						</div><!-- .entry-attachment -->

						<?php
							the_content();
							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'quidus' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'quidus' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );
							
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						// Previous/next post navigation.
						the_post_navigation( array(
							'prev_text' => _x( '<span class="meta-nav published-in">Published in</span><h3 class="post-title">%title</h3>', 'Parent post link', 'quidus' ),
						) );
						?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

				<?php
		
				endwhile;
			?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->		

<?php get_footer(); ?>
