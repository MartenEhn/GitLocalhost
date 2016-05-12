<?php
	
	/* ------------------------------------------------ */
		
	/* ------ // Layout -> Home - Layout -> Page ------ */
		
	/* ----------------------------------------------- */
	
	global $footer_widget_layout_choices;

	$sidebar_layout_choices = array(
		'Inherit' => get_template_directory_uri() . '/img/off.jpg',
		'1 Column' => get_template_directory_uri() . '/img/1_column.png',
		'2 Columns - Left Sidebar' => get_template_directory_uri() . '/img/2_column_l.png',
		'2 Columns - Right Sidebar' => get_template_directory_uri() . '/img/2_column_r.png',
		'3 Columns - Sidebars Align Left' => get_template_directory_uri() . '/img/3_column_l.png',
		'3 Columns - Sidebars Align Right' => get_template_directory_uri() . '/img/3_column_r.png',
		'3 Columns' => get_template_directory_uri() . '/img/3_column_lr.png'
	);
	
	$content_widget_layout_choices = array(
		'Inherit' => get_template_directory_uri() . '/img/off.jpg',
		'2 Columns' => get_template_directory_uri() . '/img/twocolumn1.jpg',
		'3 Columns' => get_template_directory_uri() . '/img/threecolumn1.jpg'
	);
	
	$footer_widget_layout_choices = array(
		'Inherit' => get_template_directory_uri() . '/img/off.jpg',
		'2 Columns' => get_template_directory_uri() . '/img/twocolumn1.jpg',
		'3 Columns' => get_template_directory_uri() . '/img/threecolumn1.jpg',
		'4 Columns' => get_template_directory_uri() . '/img/fourcolumn1.jpg'
	);
		
	$layout_pages = array('home', 'single', 'archive', 'category', 'search', '404', 'page', 'front_page');
		if( class_exists( 'WooCommerce' ) ) { array_push($layout_pages, "product", "shop"); }
	foreach ($layout_pages as $page) {
	
		/* Page Sidebar Layout */
	
		Kirki::add_field( 'quidus', array(
			'type'        => 'radio-image',
			'setting'     => 'quidus_layout_'.$page.'_sidebars1',
			'section'     => 'quidus_'.$page.'_layout',
			'default'     => 'Inherit',
			'priority'    => 1,
			'choices'     => $sidebar_layout_choices
		));
		
		/* Content Widgets Layout */

		Kirki::add_field( 'quidus', array(
			'type'        => 'radio-image',
			'setting'     => 'quidus_layout_'.$page.'_content_widgets_layout',
			'label'       => __( 'Content Widgets Layout', 'quidus' ),
			'description' => __( 'Choose a layout for widgets that are below content.', 'quidus' ),
			'section'     => 'quidus_'.$page.'_layout',
			'default'     => 'Inherit',
			'priority'    => 1,
			'choices'     => $content_widget_layout_choices
		));
		
		/* Footer Max Width */
		
		Kirki::add_field( 'quidus', array(
			'type'        => 'text',
			'setting'     => 'quidus_layout_'.$page.'_max_width_footer',
			'label'       => __( 'Footer Maximum Width', 'quidus' ),
			'section'     => 'quidus_'.$page.'_layout',
			'default'     => '',
			'priority'    => 1
		));
		
		/* Footer Widgets Layout */
	
		Kirki::add_field( 'quidus', array(
			'type'        => 'radio-image',
			'label'       => __( 'Footer Widgets Layout', 'quidus' ),
			'setting'     => 'quidus_layout_'.$page.'_footer_widgets',
			'section'     => 'quidus_'.$page.'_layout',
			'default'     => 'Inherit',
			'priority'    => 1,
			'choices'     => $footer_widget_layout_choices
		));
		
		/* Left Sidebar Width (desktop) */
		
		Kirki::add_field( 'quidus', array(
			'type'        => 'number',
			'setting'     => 'quidus_layout_'.$page.'_sidebar_width_desktopcc',
			'label'       => __( 'Left Sidebar Width (%/100)', 'quidus' ),
			'description' => __( 'Changes width of the left sidebar for screen sizes that are higher than 955px.', 'quidus' ),
			'help'        => __( 'If maximum width is more than 100% then sidebar and content widths will revert to default.', 'quidus' ),
			'section'     => 'quidus_'.$page.'_layout',
			'priority'    => 1,
		));
		
		/* Content Width (desktop) */
		
		Kirki::add_field( 'quidus', array(
			'type'        => 'number',
			'setting'     => 'quidus_layout_'.$page.'_content_width_desktopcc',
			'label'       => __( 'Content Width (%/100)', 'quidus' ),
			'description' => __( 'Changes width of the content for screen sizes that are higher than 955px.', 'quidus' ),
			'help'        => __( 'If maximum width is more than 100% then sidebar and content widths will revert to default.', 'quidus' ),
			'section'     => 'quidus_'.$page.'_layout',
			'priority'    => 1,
		));
	
		/* Right Sidebar Width (desktop) */
		
		Kirki::add_field( 'quidus', array(
			'type'        => 'number',
			'setting'     => 'quidus_layout_'.$page.'_right_sidebar_width_desktopcc',
			'label'       => __( 'Right Sidebar Width (%/100)', 'quidus' ),
			'description' => __( 'Changes width of the right sidebar for screen sizes that are higher than 955px.', 'quidus' ),
			'help'        => __( 'If maximum width is more than 100% then sidebar and content widths will revert to default.', 'quidus' ),
			'section'     => 'quidus_'.$page.'_layout',
			'priority'    => 1,
		));
		
		/* Max Width */
		
		Kirki::add_field( 'quidus', array(
			'type'        => 'text',
			'setting'     => 'quidus_layout_'.$page.'_max_width',
			'label'       => __( 'Maximum Width', 'quidus' ),
			'section'     => 'quidus_'.$page.'_layout',
			'default'     => '',
			'priority'    => 1
		));
	
	}
	
	/* ------------------------------------ */
		
	/* ------ // Layout -> Global // ------ */
		
	/* ------------------------------------ */
	
	/* Layout Style */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'radio-image',
		'setting'     => 'quidus_layout_global_sidebars1',
		'section'     => 'quidus_global_layout',
		'default'     => '3 Columns',
		'priority'    => 1,
		'choices'     => array(
			'1 Column' => get_template_directory_uri() . '/img/1_column.png',
			'2 Columns - Left Sidebar' => get_template_directory_uri() . '/img/2_column_l.png',
			'2 Columns - Right Sidebar' => get_template_directory_uri() . '/img/2_column_r.png',
			'3 Columns - Sidebars Align Left' => get_template_directory_uri() . '/img/3_column_l.png',
			'3 Columns - Sidebars Align Right' => get_template_directory_uri() . '/img/3_column_r.png',
			'3 Columns' => get_template_directory_uri() . '/img/3_column_lr.png'
		)
	));
	
	/* Content Widgets Layout */

	Kirki::add_field( 'quidus', array(
		'type'        => 'radio-image',
		'setting'     => 'quidus_layout_global_content_widgets_layout',
		'label'       => __( 'Content Widgets Layout', 'quidus' ),
		'description' => __( 'Choose a layout for widgets that are below content.', 'quidus' ),
		'section'     => 'quidus_global_layout',
		'default'     => '2 Columns',
		'priority'    => 1,
		'choices'     => array(
			'2 Columns' => get_template_directory_uri() . '/img/twocolumn1.jpg',
			'3 Columns' => get_template_directory_uri() . '/img/threecolumn1.jpg',
		),
	));
	
	/* Footer Widgets Layout */

	Kirki::add_field( 'quidus', array(
		'type'        => 'radio-image',
		'label'       => __( 'Footer Widgets Layout', 'quidus' ),
		'setting'     => 'quidus_layout_global_footer_widgets',
		'section'     => 'quidus_global_layout',
		'default'     => '4 Columns',
		'priority'    => 1,
		'choices'     => array(
			'2 Columns' => get_template_directory_uri() . '/img/twocolumn1.jpg',
			'3 Columns' => get_template_directory_uri() . '/img/threecolumn1.jpg',
			'4 Columns' => get_template_directory_uri() . '/img/fourcolumn1.jpg'
		),
	));
	
	/* Global Left Sidebar Width (desktop) */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'number',
		'setting'     => 'quidus_layout_global_sidebar_width_desktopcc',
		'label'       => __( 'Left Sidebar Width (%/100)', 'quidus' ),
		'description' => __( 'Changes width of the left sidebar for screen sizes that are higher than 955px.', 'quidus' ),
		'help'        => __( 'If maximum width is more than 100% then sidebar and content widths will revert to default.', 'quidus' ),
		'section'     => 'quidus_global_layout',
		'default'	  => 2200,
		'priority'    => 1
	));
	
	/* Global Content Width (desktop) */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'number',
		'setting'     => 'quidus_layout_global_content_width_desktopcc',
		'label'       => __( 'Content Width (%/100)', 'quidus' ),
		'description' => __( 'Changes width of the content for screen sizes that are higher than 955px.', 'quidus' ),
		'help'        => __( 'If maximum width is more than 100% then sidebar and content widths will revert to default.', 'quidus' ),
		'section'     => 'quidus_global_layout',
		'default'	  => 5600,
		'priority'    => 1
	));
	
	/* Global Right Sidebar Width (desktop) */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'number',
		'setting'     => 'quidus_layout_global_right_sidebar_width_desktopcc',
		'label'       => __( 'Right Sidebar Width (%/100)', 'quidus' ),
		'description' => __( 'Changes width of the right sidebar for screen sizes that are higher than 955px.', 'quidus' ),
		'help'        => __( 'If maximum width is more than 100% then sidebar and content widths will revert to default.', 'quidus' ),
		'section'     => 'quidus_global_layout',
		'default'	  => 2200,
		'priority'    => 1
	));
	
	/* Site Distance From Left */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'number',
		'setting'     => 'quidus_site_distance_from_left',
		'label'       => __( 'Site Distance From Left (desktop/%)', 'quidus' ),
		'section'     => 'quidus_global_layout',
		'default'     => 5,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 0,
			'max'  => 15,
			'step' => 1
		),
	));
	
	/* Max Width */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_layout_global_max_width',
		'label'       => __( 'Maximum Width', 'quidus' ),
		'section'     => 'quidus_global_layout',
		'default'     => '1718px',
		'priority'    => 10
	));
	
	/* Footer Max Width */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_layout_global_max_width_footer',
		'label'       => __( 'Footer Maximum Width', 'quidus' ),
		'section'     => 'quidus_global_layout',
		'default'     => '1718px',
		'priority'    => 10
	));
	
	/* Disable Post Format Icons */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_post_format_icons_disable',
		'label'       => __( 'Disable Post Format Icons', 'quidus' ),
		'section'     => 'quidus_global_layout',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Centered Site Layout */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_switch_to_centered_layout',
		'label'       => __( 'Switch To Centered Site Layout', 'quidus' ),
		'description' => __( 'Distance from right and left sides will be the same.', 'quidus'),
		'section'     => 'quidus_global_layout',
		'default'     => 1,
		'priority'    => 10,
	));

?>