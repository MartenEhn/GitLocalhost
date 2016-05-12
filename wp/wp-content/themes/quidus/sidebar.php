<?php
/**
 * The sidebar containing the main widget area
 */

	if ( (is_active_sidebar( 'sidebar-1' ))  ) : ?>

		<div class="left-sidebar-wrapper">
		
			<div id="sidebar" class="sidebar">
				
					<?php if ( has_nav_menu( 'secondary' ) or ( is_active_sidebar( 'sidebar-1' )) ) : ?>
					
						<div id="secondary" class="secondary">

							<?php if ( has_nav_menu( 'secondary' ) ) : ?>
								<nav id="site-navigation" class="secondary-navigation" role="navigation">
									<?php
										// Primary navigation menu.
										wp_nav_menu( array(
											'menu_class'     => 'nav-menu',
											'theme_location' => 'secondary',
										) );
									?>
								</nav><!-- .main-navigation -->
							<?php endif; ?>

							<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
								<div id="widget-area" class="widget-area" role="complementary">
									<?php dynamic_sidebar( 'sidebar-1' ); ?>
								</div><!-- .widget-area -->
							<?php endif; ?>

						</div><!-- .secondary -->

					<?php endif; ?>

			</div><!-- .sidebar -->
				
		</div><!-- .sidebar wrapper -->
	
	<?php endif; 
	
?>
