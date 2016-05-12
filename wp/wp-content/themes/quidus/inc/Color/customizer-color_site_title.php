<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Site Title ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Site Title Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_site_title_color_enable',
		'label'       => __( 'Enable Custom Site Title Color', 'quidus' ),
		'section'     => 'quidus_color_site_title',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Site Title */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_site_title',
		'label'       => __( 'Site Title', 'quidus' ),
		'section'     => 'quidus_color_site_title',
		'default'     => '#424242',
		'priority'    => 1
	));

?>