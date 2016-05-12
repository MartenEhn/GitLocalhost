<?php

	function quidus_sections_typography( $wp_customize ) {
		
		$wp_customize->add_section( 'quidus_typography_headers' , array(
			'title'      => __('Headers','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_widget_title' , array(
			'title'      => __('Widget Title','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_site_title' , array(
			'title'      => __('Site Title','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_site_description' , array(
			'title'      => __('Site Description','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_content_meta' , array(
			'title'      => __('Content Meta','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_p' , array(
			'title'      => __('Paragraph','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_list' , array(
			'title'      => __('Unordered & Ordered Lists','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_th' , array(
			'title'      => __('Table Header','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_td' , array(
			'title'      => __('Table Data','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_dd' , array(
			'title'      => __('Definition List Data','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_dt' , array(
			'title'      => __('Definition List Title','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_address' , array(
			'title'      => __('Address','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_blockquote' , array(
			'title'      => __('Blockquote','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_menu' , array(
			'title'      => __('Menu','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
		$wp_customize->add_section( 'quidus_typography_span' , array(
			'title'      => __('Span','quidus'),
			'panel' => 'quidus_typography_panel',
			'priority'   => 10,
		) );
		
	}

	add_action('customize_register', 'quidus_sections_typography');

?>