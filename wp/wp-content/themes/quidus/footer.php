<?php
/**
 * The template for displaying the footer
 *
 */
?>
	
			
	<?php if ( is_active_sidebar( 'content-widget-1' ) or is_active_sidebar( 'content-widget-2' ) or is_active_sidebar( 'content-widget-3' ) ) : 
		echo '<div class="content-widgets-wrapper">'; ?>
			<?php get_sidebar('content_1'); ?>
			<?php get_sidebar('content_2'); ?>
			<?php get_sidebar('content_3'); ?>
			<div style="clear: both;"></div>
		<?php echo '</div>'; ?>
	<?php endif; ?>
	
	</div><!-- .site-content -->
	
	<?php 
	
		global $fwl;
		
		if( class_exists( 'Kirki' ) ) {
		
		global $sl;
		
		if ( $sl == '2 Columns - Right Sidebar' or $sl == '3 Columns') {
		 get_sidebar('right');
		} elseif ( $sl == '3 Columns - Sidebars Align Right') 
		{
			get_sidebar();
			get_sidebar('right');
		}
		
		} else {
			get_sidebar('right');
		}
		
	?>

	</div><!-- .site -->

	<footer id="colophon" class="site-footer" role="footerinfo">
	
		<?php if ( (is_active_sidebar( 'footer-widget-1' ) or is_active_sidebar( 'footer-widget-2' ) or is_active_sidebar( 'footer-widget-3' ) or is_active_sidebar( 'footer-widget-4' )) ) : 
			echo '<div class="footer-widgets-wrapper"><div class="footer-widgets-wrapper-inner">';
			
				 get_sidebar('footer_1'); 
				 get_sidebar('footer_2');
				 get_sidebar('footer_3');
				 get_sidebar('footer_4');
			
			?>
				<div style="clear: both;"></div>
			<?php echo '</div></div>'; ?>
		<?php endif; ?>
		
		<div class="copyright-wrap">
							<?php if( class_exists( 'Kirki' ) ) : ?><?php quidus_footer_social(); ?><?php endif; ?>
			<p class="site-info">
				<?php do_action( 'quidus_credits' ); ?>
				<a ><?php printf( __( 'Quidus 2015. All rights reserved. Theme by ', 'quidus' ) ); ?></a >
				<a class="footer-link"  href="<?php echo esc_url( __( '//qerrapress.com/quidus-theme/', 'quidus' ) ); ?>"><?php printf( __( '%s', 'quidus' ), 'qerrapress' ); ?></a>
				<a ><?php printf( __( '. Powered by ', 'quidus' ) ); ?></a>
				<a class="footer-link"  href="<?php echo esc_url( __( '//wordpress.org/', 'quidus' ) ); ?>"><?php printf( __( '%s', 'quidus' ), 'WordPress.' ); ?></a>
			</p><!-- .site-info -->
		</div>
		
	</footer><!-- .site-footer -->

	<?php wp_footer(); ?>

</body>
</html>
