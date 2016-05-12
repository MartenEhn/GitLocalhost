<?php
	
	/* ----------------------------------------- */
		
	/* ------ // Typography -> Content Meta // ------ */
		
	/* ----------------------------------------- */
	
	/* Enable Custom Content Meta Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_content_meta_typography_enable',
		'label'       => __( 'Enable Custom Content Meta Typography', 'quidus' ),
		'section'     => 'quidus_typography_content_meta',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Content Meta Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_content_meta_size',
		'label'       => __( 'Content Meta Font Size', 'quidus' ),
		'section'     => 'quidus_typography_content_meta',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom Content Meta Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_content_meta_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_content_meta',
		'default'     => array(
			'font-family'    => 'Josefin Sans',
			'font-weight'    => '400',
			'line-height'    => '1.6',
			'letter-spacing' => '1',
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