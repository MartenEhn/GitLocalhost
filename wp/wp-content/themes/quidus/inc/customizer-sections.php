<?php

	function quidus_sections( $wp_customize ) {
		
		$wp_customize->remove_control( 'header_textcolor' );

		$wp_customize->remove_section( 'colors' );
		
		$wp_customize->add_section( 'quidus_colors_global' , array(
			'title'      => __('Global','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_header_social' , array(
			'title'      => __('Header Social Icons','quidus'),
			'panel' => 'quidus_social_panel',
			'priority'   => 10
		) );
		
		$wp_customize->add_section( 'quidus_author_social' , array(
			'title'      => __('Author Social Icons','quidus'),
			'panel' => 'quidus_social_panel',
			'priority'   => 10
		) );
		
		$wp_customize->add_section( 'quidus_footer_social' , array(
			'title'      => __('Footer Social Icons','quidus'),
			'panel' => 'quidus_social_panel',
			'priority'   => 10
		) );
		
		$wp_customize->add_section( 'quidus_font_family_general' , array(
			'title'      => __('Global','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_font_size_advanced' , array(
			'title'      => __('Font Size','quidus'),		
			'description' => __( 'Adjust the ratio of font size. The minimum step is 1.', 'quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_layout' , array(
			'title'      => __('Layout','quidus'),
			'priority'   => 10,
		) );
		
		if( !class_exists( 'Kirki' ) ) {
		
		$wp_customize->add_section( 'quidus_theme_info' , array(
					'title'      => __('Start Here','quidus'),       
					'description' => __( 'You need to activate "Kirki" plugin to enable most of theme options in live customizer.', 'quidus'), 
					'priority'   => 1, 
		) ); 
			
		$wp_customize->add_setting("got_it", array(
				"default" => "", 
				"transport" => "postMessage", 
				'sanitize_callback' => 'esc_attr' 
		)); 
			 
		$wp_customize->add_control(new WP_Customize_Control(
				$wp_customize, 
				"got_it", 
				array( 
				"label" => __("Got It!", "quidus"), 
					"section" => "quidus_theme_info", 
					"settings" => "got_it", 
					"type" => "checkbox", 
				) 
		));
		
		}
		
		$wp_customize->add_section( 'quidus_global_layout' , array(
			'title'      => __('Global','quidus'),
			'description' => __( 'Choose a layout to use on all pages. Other options will override this one if they are set.', 'quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_home_layout' , array(
			'title'      => __('Home','quidus'),
			'description' => __( 'Choose a layout to use on home page.', 'quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_single_layout' , array(
			'title'      => __('Single Post','quidus'),
			'description' => __( 'Choose a layout to use on single post.', 'quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_archive_layout' , array(
			'title'      => __('Archive','quidus'),
			'description' => __( 'Choose a layout to use on archive page.', 'quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_category_layout' , array(
			'title'      => __('Category','quidus'),
			'description' => __( 'Choose a layout to use on category page.', 'quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_search_layout' , array(
			'title'      => __('Search','quidus'),
			'description' => __( 'Choose a layout to use on search page.', 'quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_404_layout' , array(
			'title'      => __('Error 404','quidus'),
			'description' => __( 'Choose a layout to use on error 404 page.', 'quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		if( class_exists( 'WooCommerce' ) ) {
		$wp_customize->add_section( 'quidus_shop_layout' , array(
			'title'      => __('Shop','quidus'),
			'description' => __( 'Choose a layout to use on error shop page.', 'quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_product_layout' , array(
			'title'      => __('Product','quidus'),
			'description' => __( 'Choose a layout to use on error product page.', 'quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		}
		$wp_customize->add_section( 'quidus_page_layout' , array(
			'title'      => __('Page','quidus'),
			'description' => __( 'Choose a layout to use on page.', 'quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_header_layout' , array(
			'title'      => __('Header','quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_content_layout' , array(
			'title'      => __('Content','quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_front_page_layout' , array(
			'title'      => __('Front Page','quidus'),
			'description' => __( 'Choose a layout to use on front page.', 'quidus'),
			'panel' => 'quidus_layout_panel',
			'priority'   => 10,
		) );
		
	}

	add_action('customize_register', 'quidus_sections');

?>