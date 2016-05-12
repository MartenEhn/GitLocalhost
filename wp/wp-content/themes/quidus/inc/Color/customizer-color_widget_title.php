<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Widget Title ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Widget Title Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_widget_title_color_enable',
		'label'       => __( 'Enable Custom Widget Title Color', 'quidus' ),
		'section'     => 'quidus_color_widget_title',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Widget Title */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_widget_title',
		'label'       => __( 'Widget Title', 'quidus' ),
		'section'     => 'quidus_color_widget_title',
		'default'     => '#424242',
		'priority'    => 1
	));

?>