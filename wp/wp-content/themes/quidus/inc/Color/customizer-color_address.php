<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Address ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Address Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_address_color_enable',
		'label'       => __( 'Enable Custom Address Color', 'quidus' ),
		'section'     => 'quidus_color_address',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Address */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_address',
		'label'       => __( 'Address', 'quidus' ),
		'section'     => 'quidus_color_address',
		'default'     => '#515151',
		'priority'    => 1
	));

?>