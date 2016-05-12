<?php

	function quidus_sections_color( $wp_customize ) {
		
		$wp_customize->add_section( 'quidus_color_headers' , array(
			'title'      => __('Headers','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_widget_title' , array(
			'title'      => __('Widget Title','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_site_title' , array(
			'title'      => __('Site Title','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_site_description' , array(
			'title'      => __('Site Description','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_content_meta' , array(
			'title'      => __('Content Meta','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_p' , array(
			'title'      => __('Paragraph','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_list' , array(
			'title'      => __('Unordered & Ordered Lists','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_th' , array(
			'title'      => __('Table Header','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_td' , array(
			'title'      => __('Table Data','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_dd' , array(
			'title'      => __('Definition List Data','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_dt' , array(
			'title'      => __('Definition List Title','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_address' , array(
			'title'      => __('Address','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_blockquote' , array(
			'title'      => __('Blockquote','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_menu' , array(
			'title'      => __('Menu','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_span' , array(
			'title'      => __('Span','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_color_a' , array(
			'title'      => __('Link','quidus'),
			'panel' => 'quidus_color_panel',
			'priority'   => 10,
		) );
		
	}

	add_action('customize_register', 'quidus_sections_color');

?>