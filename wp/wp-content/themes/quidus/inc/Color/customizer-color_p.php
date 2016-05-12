<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Paragraph ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Paragraph Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_p_color_enable',
		'label'       => __( 'Enable Custom Paragraph Color', 'quidus' ),
		'section'     => 'quidus_color_p',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Paragraph */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_p',
		'label'       => __( 'Paragraph', 'quidus' ),
		'section'     => 'quidus_color_p',
		'default'     => '#515151',
		'priority'    => 1
	));

?>