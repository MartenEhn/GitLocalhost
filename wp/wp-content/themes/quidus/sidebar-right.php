<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	<div class="right-sidebar-wrapper">
		<div class="right-sidebar-wrap">
			<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
					<div class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'right-sidebar' ); ?>
					</div><!-- .widget-area -->
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
