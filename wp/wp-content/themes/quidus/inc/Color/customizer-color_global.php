<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Global ------ */
		
	/* ----------------------------------------------- */
	
	/* Background Color */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_background',
		'label'       => __( 'Background Color', 'quidus' ),
		'section'     => 'quidus_colors_global',
		'default'     => '#f7f7f7',
		'priority'    => 1
	));
	
	/* Main Color */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_main',
		'label'       => __( 'Main Color', 'quidus' ),
		'section'     => 'quidus_colors_global',
		'default'     => '#424242',
		'priority'    => 1
	));
	
	/* Secondary Color */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_secondary',
		'label'       => __( 'Secondary Color', 'quidus' ),
		'section'     => 'quidus_colors_global',
		'default'     => '#515151',
		'priority'    => 1
	));
	
	/* Special Color */

	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'settings'    => 'quidus_color_special',
		'label'       => __( 'Special Color', 'kirki' ),
		'section'     => 'quidus_colors_global',
		'default'     => '#8BC34A',
		'priority'    => 1,
	) );
	
	/*  Posts & sidebars background */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_content_background',
		'label'       => __( 'Posts & Sidebars Background Color', 'quidus' ),
		'section'     => 'quidus_colors_global',
		'default'     => '#FFFFFF',
		'priority'    => 1
	));
	
	/*  Enable Transparent Background */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_enable_transparent_background',
		'label'       => __( 'Enable Transparent Background On Posts & Sidebars', 'quidus' ),
		'section'     => 'quidus_colors_global',
		'default'     => false,
		'priority'    => 1,
	));
	
	/*  Posts & sidebars box shadow color */
	
	Kirki::add_field( '', array(
		'type'        => 'color-alpha',
		'settings'    => 'quidus_box_shadow_color',
		'label'       => __( 'Post & Sidebar Border Box Shadow Color', 'quidus' ),
		'section'     => 'quidus_colors_global',
		'default'     => 'rgba(50, 50, 50, 0.15)',
		'priority'    => 1,
	) );

?>