<?php
	
	/* ------------------------------------------- */
		
	/* ------ // Typography -> Table Header // ------ */
		
	/* ------------------------------------------- */
	
	/* Enable Custom Table Header Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_th_typography_enable',
		'label'       => __( 'Enable Custom Table Header Typography', 'quidus' ),
		'section'     => 'quidus_typography_th',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Table Header Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_th_size',
		'label'       => __( 'Table Header Font Size', 'quidus' ),
		'section'     => 'quidus_typography_th',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom Table Header Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_th_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_th',
		'default'     => array(
			'font-family'    => 'Playfair Display',
			'font-weight'    => '700',
			'line-height'    => '1.6',
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
	
	
	/* Padding Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_th_typography_padding_top',
		'label'       => __( 'Padding Top', 'quidus' ),
		'section'     => 'quidus_typography_th',
		'default'     => '0.5em',
		'priority'    => 10,
	));
	
	/* Padding Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_th_typography_padding_bottom',
		'label'       => __( 'Padding Bottom', 'quidus' ),
		'section'     => 'quidus_typography_th',
		'default'     => '0.5em',
		'priority'    => 10,
	));
	
	/* Padding Right */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_th_typography_padding_right',
		'label'       => __( 'Padding Right', 'quidus' ),
		'section'     => 'quidus_typography_th',
		'default'     => '0.5em',
		'priority'    => 10,
	));
	
	/* Padding Left */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_th_typography_padding_left',
		'label'       => __( 'Padding Left', 'quidus' ),
		'section'     => 'quidus_typography_th',
		'default'     => '0.5em',
		'priority'    => 10,
	));

?>