<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Menu ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Menu Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_menu_color_enable',
		'label'       => __( 'Enable Custom Menu Color', 'quidus' ),
		'section'     => 'quidus_color_menu',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Menu */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_menu',
		'label'       => __( 'Menu', 'quidus' ),
		'section'     => 'quidus_color_menu',
		'default'     => '#424242',
		'priority'    => 1
	));

?>