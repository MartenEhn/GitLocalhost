<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Table Header ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Table Header Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_th_color_enable',
		'label'       => __( 'Enable Custom Table Header Color', 'quidus' ),
		'section'     => 'quidus_color_th',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Table Header */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_th',
		'label'       => __( 'Table Header', 'quidus' ),
		'section'     => 'quidus_color_th',
		'default'     => '#424242',
		'priority'    => 1
	));

?>