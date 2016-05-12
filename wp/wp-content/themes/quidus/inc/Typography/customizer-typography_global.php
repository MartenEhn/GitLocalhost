<?php
	
	/* ------------------------------------- */
		
	/* ------ // Typography -> Global ------ */
		
	/* ------------------------------------- */
	
	/* Body Font Family */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_body_font',
		'label'       => __( 'Body Font Family', 'quidus' ),
		'description' => __( 'Changes font of all non-header elements.', 'quidus'),
		'section'     => 'quidus_font_family_general',
		'default'     => array(
			'font-family'    => 'Josefin Sans',
		),
		'priority'    => 10,
		'choices'     => array(
			'font-style'     => false,
			'font-family'    => true,
			'font-size'      => false,
			'font-weight'    => false,
			'line-height'    => false,
			'letter-spacing' => false,
		),
		'output' => array(
			array(
				'element' => array('xx'),
			),
		),
	) );
	
	/* Header Font Family */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_header_font',
		'label'       => __( 'Headers Font Family', 'quidus' ),
		'description' => __( 'Changes font of all the header elements.', 'quidus'),
		'section'     => 'quidus_font_family_general',
		'default'     => array(
			'font-family'    => 'Playfair Display',
		),
		'priority'    => 10,
		'choices'     => array(
			'font-style'     => false,
			'font-family'    => true,
			'font-size'      => false,
			'font-weight'    => false,
			'line-height'    => false,
			'letter-spacing' => false,
		),
		'output' => array(
			array(
				'element' => array('xx'),
			),
		),
	) );

?>