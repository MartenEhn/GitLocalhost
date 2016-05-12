<?php
	
	/* ------------------------------------------- */
		
	/* ------ // Typography -> Table Data // ------ */
		
	/* ------------------------------------------- */
	
	/* Enable Custom Table Data Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_td_typography_enable',
		'label'       => __( 'Enable Custom Table Data Typography', 'quidus' ),
		'section'     => 'quidus_typography_td',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Table Data Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_td_size',
		'label'       => __( 'Table Data Font Size', 'quidus' ),
		'section'     => 'quidus_typography_td',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom Table Data Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_td_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_td',
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
		'setting'     => 'quidus_td_typography_padding_top',
		'label'       => __( 'Padding Top', 'quidus' ),
		'section'     => 'quidus_typography_td',
		'default'     => '0.5em',
		'priority'    => 10,
	));
	
	/* Padding Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_td_typography_padding_bottom',
		'label'       => __( 'Padding Bottom', 'quidus' ),
		'section'     => 'quidus_typography_td',
		'default'     => '0.5em',
		'priority'    => 10,
	));
	
	/* Padding Right */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_td_typography_padding_right',
		'label'       => __( 'Padding Right', 'quidus' ),
		'section'     => 'quidus_typography_td',
		'default'     => '0.5em',
		'priority'    => 10,
	));
	
	/* Padding Left */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_td_typography_padding_left',
		'label'       => __( 'Padding Left', 'quidus' ),
		'section'     => 'quidus_typography_td',
		'default'     => '0.5em',
		'priority'    => 10,
	));

?>