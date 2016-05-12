<?php
	
	/* ------------------------------------------------ */
		
	/* ------ // Layout -> Content ------ */
		
	/* ----------------------------------------------- */
	
	/* Excerpt Length */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_excerpt_length',
		'label'       => __( 'Excerpt Length', 'quidus' ),
		'description' => __( 'Adjust length of excerpt.', 'quidus' ),
		'section'     => 'quidus_content_layout',
		'default'     => 55,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 20,
			'max'  => 85,
			'step' => 1
		),
	));

?>