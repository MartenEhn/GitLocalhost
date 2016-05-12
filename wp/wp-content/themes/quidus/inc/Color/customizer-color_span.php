<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Span ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Span Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_span_color_enable',
		'label'       => __( 'Enable Custom Span Color', 'quidus' ),
		'section'     => 'quidus_color_span',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Span */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_span',
		'label'       => __( 'Span', 'quidus' ),
		'section'     => 'quidus_color_span',
		'default'     => '#424242',
		'priority'    => 1
	));

?>