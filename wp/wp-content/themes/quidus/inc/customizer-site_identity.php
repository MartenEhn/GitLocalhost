<?php
	
	/* ---------------------------------- */
		
	/* ------ // Site Identity // ------ */
		
	/* --------------------------------- */
		
	/* Logo Upload */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'upload',
		'setting'     => 'quidus_logo',
		'label'       => __( 'Logo Upload', 'quidus' ),
		'description' => __( 'Recommended logo size is 340x136px.', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => '',
		'priority'    => 10,
	));
	
	/* Favicon Upload */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'upload',
		'setting'     => 'quidus_site_favicon',
		'label'       => __( 'Favicon Upload', 'quidus' ),
		'description' => __( 'Recommended favicon size is 16x16px.', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => '',
		'priority'    => 10,
	));
	
	/* Logo Max Width (desktop) */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_logo_max_width_desktop',
		'label'       => __( 'Logo Max Width', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 25,
			'max'  => 100,
			'step' => 1
		),
	));
	
	/* Logo Max Width (tablet large) */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_logo_max_width_tablet_large',
		'label'       => __( 'Logo Max Width (tablet large)', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => 50,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 25,
			'max'  => 60,
			'step' => 1
		),
	));
	
	/* Logo Max Width (tablet small) */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_logo_max_width_tablet_small',
		'label'       => __( 'Logo Max Width (tablet small)', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => 50,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 25,
			'max'  => 75,
			'step' => 1
		),
	));
	
	/* Logo Max Width (mobile) */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_logo_max_width_mobile',
		'label'       => __( 'Logo Max Width (mobile)', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => 60,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 25,
			'max'  => 60,
			'step' => 1
		),
	));

?>