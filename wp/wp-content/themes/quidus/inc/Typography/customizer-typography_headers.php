<?php
	
	/* ----------------------------------------- */
		
	/* ------ // Typography -> H1 // ------ */
		
	/* ----------------------------------------- */
	
	/* Enable Custom h1 Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_h1_typography_enable',
		'label'       => __( 'Enable Custom H1 Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* h1 Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_h1_size',
		'label'       => __( 'H1 Font Size', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom h1 Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_h1_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => array(
			'font-family'    => 'Playfair Display',
			'font-weight'    => '700',
			'line-height'    => '1.2308',
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
		'setting'     => 'quidus_h1_typography_padding_top',
		'label'       => __( 'Padding Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.41025em',
		'priority'    => 10,
	));
	
	/* Padding Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h1_typography_padding_bottom',
		'label'       => __( 'Padding Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h1_typography_margin_top',
		'label'       => __( 'Margin Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h1_typography_margin_bottom',
		'label'       => __( 'Margin Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.205125em',
		'priority'    => 10,
	));
	
	/* ----------------------------------------- */
		
	/* ------ // Typography -> H2 // ------ */
		
	/* ----------------------------------------- */
	
	/* Enable Custom h2 Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_h2_typography_enable',
		'label'       => __( 'Enable Custom H2 Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* h2 Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_h2_size',
		'label'       => __( 'H2 Font Size', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom h2 Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_h2_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => array(
			'font-family'    => 'Playfair Display',
			'font-weight'    => '700',
			'line-height'    => '1.25',
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
		'setting'     => 'quidus_h2_typography_padding_top',
		'label'       => __( 'Padding Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.5em',
		'priority'    => 10,
	));
	
	/* Padding Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h2_typography_padding_bottom',
		'label'       => __( 'Padding Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h2_typography_margin_top',
		'label'       => __( 'Margin Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h2_typography_margin_bottom',
		'label'       => __( 'Margin Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.25em',
		'priority'    => 10,
	));
	
	/* ----------------------------------------- */
		
	/* ------ // Typography -> H3 // ------ */
		
	/* ----------------------------------------- */
	
	/* Enable Custom h3 Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_h3_typography_enable',
		'label'       => __( 'Enable Custom H3 Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* h3 Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_h3_size',
		'label'       => __( 'H3 Font Size', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom h3 Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_h3_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => array(
			'font-family'    => 'Playfair Display',
			'font-weight'    => '700',
			'line-height'    => '1.1852',
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
		'setting'     => 'quidus_h3_typography_padding_top',
		'label'       => __( 'Padding Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.5926em',
		'priority'    => 10,
	));
	
	/* Padding Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h3_typography_padding_bottom',
		'label'       => __( 'Padding Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h3_typography_margin_top',
		'label'       => __( 'Margin Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h3_typography_margin_bottom',
		'label'       => __( 'Margin Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.295625em',
		'priority'    => 10,
	));
	
	/* ----------------------------------------- */
		
	/* ------ // Typography -> H4 // ------ */
		
	/* ----------------------------------------- */
	
	/* Enable Custom h4 Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_h4_typography_enable',
		'label'       => __( 'Enable Custom H4 Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* h4 Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_h4_size',
		'label'       => __( 'H4 Font Size', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom h4 Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_h4_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => array(
			'font-family'    => 'Playfair Display',
			'font-weight'    => '700',
			'line-height'    => '1.4545',
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
		'setting'     => 'quidus_h4_typography_padding_top',
		'label'       => __( 'Padding Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.727275em',
		'priority'    => 10,
	));
	
	/* Padding Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h4_typography_padding_bottom',
		'label'       => __( 'Padding Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h4_typography_margin_top',
		'label'       => __( 'Margin Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h4_typography_margin_bottom',
		'label'       => __( 'Margin Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.363625em',
		'priority'    => 10,
	));
	
	/* ----------------------------------------- */
		
	/* ------ // Typography -> H5 // ------ */
		
	/* ----------------------------------------- */
	
	/* Enable Custom h5 Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_h5_typography_enable',
		'label'       => __( 'Enable Custom H5 Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* h5 Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_h5_size',
		'label'       => __( 'H5 Font Size', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom h5 Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_h5_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => array(
			'font-family'    => 'Playfair Display',
			'font-weight'    => '700',
			'line-height'    => '1.2632',
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
	
	/* Padding Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h5_typography_padding_top',
		'label'       => __( 'Padding Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.8421em',
		'priority'    => 10,
	));
	
	/* Padding Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h5_typography_padding_bottom',
		'label'       => __( 'Padding Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h5_typography_margin_top',
		'label'       => __( 'Margin Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h5_typography_margin_bottom',
		'label'       => __( 'Margin Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.42125em',
		'priority'    => 10,
	));
	
	/* ----------------------------------------- */
		
	/* ------ // Typography -> H6 // ------ */
		
	/* ----------------------------------------- */
	
	/* Enable Custom h6 Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_h6_typography_enable',
		'label'       => __( 'Enable Custom H6 Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* h6 Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_h6_size',
		'label'       => __( 'H6 Font Size', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom h6 Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_h6_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => array(
			'font-family'    => 'Playfair Display',
			'font-weight'    => '700',
			'line-height'    => '1.13023',
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
	
	/* Padding Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h6_typography_padding_top',
		'label'       => __( 'Padding Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.94115em',
		'priority'    => 10,
	));
	
	/* Padding Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h6_typography_padding_bottom',
		'label'       => __( 'Padding Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h6_typography_margin_top',
		'label'       => __( 'Margin Top', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_h6_typography_margin_bottom',
		'label'       => __( 'Margin Bottom', 'quidus' ),
		'section'     => 'quidus_typography_headers',
		'default'     => '0.470575em',
		'priority'    => 10,
	));

?>