<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Table Data ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Table Data Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_td_color_enable',
		'label'       => __( 'Enable Custom Table Data Color', 'quidus' ),
		'section'     => 'quidus_color_td',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Table Data */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_td',
		'label'       => __( 'Table Data', 'quidus' ),
		'section'     => 'quidus_color_td',
		'default'     => '#515151',
		'priority'    => 1
	));

?>