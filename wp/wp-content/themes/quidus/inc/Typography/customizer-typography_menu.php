<?php
	
	/* ------------------------------------------- */
		
	/* ------ // Typography -> Menu // ------ */
		
	/* ------------------------------------------- */
	
	/* Enable Custom Menu Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_menu_typography_enable',
		'label'       => __( 'Enable Custom Menu Typography', 'quidus' ),
		'section'     => 'quidus_typography_menu',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Enable Custom Menu Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_menu_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_menu',
		'default'     => array(
			'font-family'    => 'Josefin Sans',
			'font-weight'    => '400',
			'line-height'    => '1.6',
			'letter-spacing' => '0',
		),
		'priority'    => 10,
		'choices'     => array(
			'font-style'     => false,
			'font-family'    => true,
			'font-size'      => false,
			'font-weight'    => true,
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