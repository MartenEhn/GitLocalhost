<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Definition List Data ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Definition List Data Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_dd_color_enable',
		'label'       => __( 'Enable Custom Definition List Data Color', 'quidus' ),
		'section'     => 'quidus_color_dd',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Definition List Data */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_dd',
		'label'       => __( 'Definition List Data', 'quidus' ),
		'section'     => 'quidus_color_dd',
		'default'     => '#515151',
		'priority'    => 1
	));

?>