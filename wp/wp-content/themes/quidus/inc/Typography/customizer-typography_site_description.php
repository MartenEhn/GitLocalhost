<?php
	
	/* -------------------------------------------------- */
		
	/* ------ // Typography -> Site Description // ------ */
		
	/* -------------------------------------------------- */
	
	/* Enable Custom Site Description Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_site_description_typography_enable',
		'label'       => __( 'Enable Custom Site Description Typography', 'quidus' ),
		'section'     => 'quidus_typography_site_description',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Site Description Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_site_description_size',
		'label'       => __( 'Site Description Font Size', 'quidus' ),
		'section'     => 'quidus_typography_site_description',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom Site Description Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_site_description_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_site_description',
		'default'     => array(
			'font-family'    => 'Josefin Sans',
			'font-weight'    => '400',
			'line-height'    => '1.6',
			'letter-spacing' => '0',
		),
		'priority'    => 10,
		'choices'     => array(
			'font-style'     => true,
			'font-family'    => true,
			'font-size'      => false,
			'font-weight'    => true,
			'line-height'    => false,
			'letter-spacing' => true,
		),
		'output' => array(
			array(
				'element' => array('xx'),
			),
		),
	) );