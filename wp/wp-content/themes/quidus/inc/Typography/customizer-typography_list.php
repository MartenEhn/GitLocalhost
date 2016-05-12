<?php
	
	/* ------------------------------------------- */
		
	/* ------ // Typography -> Unordered & Ordered Lists // ------ */
		
	/* ------------------------------------------- */
	
	/* Enable Custom Unordered & Ordered Lists Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_list_typography_enable',
		'label'       => __( 'Enable Custom Unordered & Ordered Lists Typography', 'quidus' ),
		'section'     => 'quidus_typography_list',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Unordered & Ordered Lists Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_list_size',
		'label'       => __( 'Unordered & Ordered Lists Font Size', 'quidus' ),
		'section'     => 'quidus_typography_list',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom Unordered & Ordered Lists Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_list_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_list',
		'default'     => array(
			'font-family'    => 'Josefin Sans',
			'font-weight'    => '400',
			'line-height'    => '1.3',
			'letter-spacing' => '0',
		),
		'priority'    => 10,
		'choices'     => array(
			'font-style'     => true,
			'font-family'    => true,
			'font-size'      => false,
			'font-weight'    => true,
			'line-height'    => true,
			'letter-spacing' => true,
		),
		'output' => array(
			array(
				'element' => array('xx'),
			),
		),
	) );

?>