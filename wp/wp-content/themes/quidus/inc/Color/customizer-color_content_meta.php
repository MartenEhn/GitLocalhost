<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Content Meta ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Content Meta Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_content_meta_color_enable',
		'label'       => __( 'Enable Custom Content Meta Color', 'quidus' ),
		'section'     => 'quidus_color_content_meta',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Content Meta */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_content_meta',
		'label'       => __( 'Content Meta', 'quidus' ),
		'section'     => 'quidus_color_content_meta',
		'default'     => '#424242',
		'priority'    => 1
	));

?>