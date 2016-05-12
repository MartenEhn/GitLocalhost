<?php
	
	/* ---------------------------------- */
		
	/* ------ // Layout -> Search // ------ */
		
	/* ---------------------------------- */
	
	/* Hide Featured Image On Search Page */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_disable_featured_image_search',
		'label'       => __( 'Hide Featured Image On Search Page', 'quidus' ),
		'section'     => 'quidus_search_layout',
		'default'     => false,
		'priority'    => 10,
	));

?>