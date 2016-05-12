<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Site Description ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Site Description Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_site_description_color_enable',
		'label'       => __( 'Enable Custom Site Description Color', 'quidus' ),
		'section'     => 'quidus_color_site_description',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Site Description */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_site_description',
		'label'       => __( 'Site Description', 'quidus' ),
		'section'     => 'quidus_color_site_description',
		'default'     => '#515151',
		'priority'    => 1
	));

?>