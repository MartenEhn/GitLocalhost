		
		<div class="menu-holder">
			
			<div class="horizontal-menu-wrapper">
			
				<header id="masthead" class="site-header">
			
					<div class="site-branding">
					
						<?php if ( get_theme_mod( 'quidus_logo' ) ) : ?>
						
							<div class='site-logo'>
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'quidus_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
							</div>
							
						<?php else : 
						
							if ( is_front_page() && is_home() ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif;

							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; ?></p>
							<?php endif;
							
						endif; ?>
						
						<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'quidus' ); ?></button>
						
					</div><!-- .site-branding -->
				
				</header>
				
				<div class="float-right">
				
				<!-- Navigation menu -->

				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<div class="nav-item">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php
								// Primary navigation menu.
								wp_nav_menu( array(
									'menu_class'     => 'nav-menu-primary',
									'theme_location' => 'primary',
								) );
							?>
						</nav><!-- .main-navigation -->
					</div>
				<?php endif; ?>
				
				<!-- Social buttons -->
				<?php if( class_exists( 'Kirki' ) ) : ?>
				<div class="nav-item">
					<?php quidus_my_social(); ?>
				</div>
				<?php endif; ?>
				<!-- Search menu -->
				
				<?php if ( get_theme_mod('quidus_horizontal_menu_search_enable', 'default') == true ) : ?>
					<div class="nav-item">
						<div class="toggle-search"><i class="fa fa-search"></i></div>
						<div class="search-expand">
							<div class="search-expand-inner">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php if( class_exists( 'WooCommerce' ) ) : ?>
					<?php if ( get_theme_mod('quidus_horizontal_menu_cart_enable', 'default') == true ) : ?>
						<div class="nav-item">
							<div class="menu-cart-wrapper">
								
									<?php global $woocommerce; ?>
									<a class="cart-contents fa fa-credit-card" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'quidus'); ?>">
									<span class="header-menu-cart-count"><?php echo $woocommerce->cart->cart_contents_count;?></span>
									</a>
								
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
				</div>
			
			</div>
			
		</div>