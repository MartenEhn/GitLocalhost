<?php
		
	/* ---------------------------------- */
		
	/* ------ // Layout -> Header // ------ */
		
	/* ---------------------------------- */
	
	/* Enable Search Button In Horizontal Menu */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_horizontal_menu_search_enable',
		'label'       => __( 'Show Search In Horizontal Menu', 'quidus' ),
		'section'     => 'quidus_header_layout',
		'default'     => true,
		'priority'    => 10,
	));
	if( class_exists( 'WooCommerce' ) ) {
	/* Enable Cart Button In Horizontal Menu */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_horizontal_menu_cart_enable',
		'label'       => __( 'Show Cart In Horizontal Menu', 'quidus' ),
		'section'     => 'quidus_header_layout',
		'default'     => true,
		'priority'    => 10,
	));
	}
?>