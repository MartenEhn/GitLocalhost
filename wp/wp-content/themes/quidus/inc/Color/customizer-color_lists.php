<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> List ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom List Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_list_color_enable',
		'label'       => __( 'Enable Custom List Color', 'quidus' ),
		'section'     => 'quidus_color_list',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Unordered & Ordered Lists */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_list',
		'label'       => __( 'Unordered & Ordered Lists', 'quidus' ),
		'section'     => 'quidus_color_list',
		'default'     => '#424242',
		'priority'    => 1
	));

?>