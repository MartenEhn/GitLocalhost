<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Link ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Link Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_a_color_enable',
		'label'       => __( 'Enable Custom Link Color', 'quidus' ),
		'section'     => 'quidus_color_a',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Definition List Data */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_a',
		'label'       => __( 'Link', 'quidus' ),
		'section'     => 'quidus_color_a',
		'default'     => '#424242',
		'priority'    => 1
	));

?>