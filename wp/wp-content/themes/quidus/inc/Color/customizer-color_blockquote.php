<?php
		
	/* ------------------------------------------------ */
		
	/* ------ // Color -> Blockquote ------ */
		
	/* ----------------------------------------------- */
	
	/* Enable Custom Blockquote Color */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_blockquote_color_enable',
		'label'       => __( 'Enable Custom Blockquote Color', 'quidus' ),
		'section'     => 'quidus_color_blockquote',
		'default'     => false,
		'priority'    => 1,
	));
	
	/* Blockquote */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'color',
		'setting'     => 'quidus_color_blockquote',
		'label'       => __( 'Blockquote', 'quidus' ),
		'section'     => 'quidus_color_blockquote',
		'default'     => '#424242',
		'priority'    => 1
	));

?>