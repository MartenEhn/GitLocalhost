<?php
	
	/* ------------------------------------------- */
		
	/* ------ // Typography -> Span // ------ */
		
	/* ------------------------------------------- */
	
	/* Enable Custom Span Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_span_typography_enable',
		'label'       => __( 'Enable Custom Span Typography', 'quidus' ),
		'section'     => 'quidus_typography_span',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Span Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_span_size',
		'label'       => __( 'Span Font Size', 'quidus' ),
		'section'     => 'quidus_typography_span',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom Span Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_span_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_span',
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
		'setting'     => 'quidus_span_typography_spanadding_top',
		'label'       => __( 'Padding Top', 'quidus' ),
		'section'     => 'quidus_typography_span',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Padding Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_span_typography_spanadding_bottom',
		'label'       => __( 'Padding Bottom', 'quidus' ),
		'section'     => 'quidus_typography_span',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_span_typography_margin_top',
		'label'       => __( 'Margin Top', 'quidus' ),
		'section'     => 'quidus_typography_span',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_span_typography_margin_bottom',
		'label'       => __( 'Margin Bottom', 'quidus' ),
		'section'     => 'quidus_typography_span',
		'default'     => '0',
		'priority'    => 10,
	));

?>