<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Definition List Title ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Definition List Title Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_dt_color_enable',
		'label'       => __( 'Enable Custom Definition List Title Color', 'quidus' ),
		'section'     => 'quidus_color_dt',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Definition List Title */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_dt',
		'label'       => __( 'Definition List Title', 'quidus' ),
		'section'     => 'quidus_color_dt',
		'default'     => '#424242',
		'priority'    => 1
	));

?>