<?php

	function quidus_panels( $wp_customize ) {
	
		/* ------------------------------ */
			
		/* ------ // Typography // ------ */
			
		/* ------------------------------ */
		
		$wp_customize->add_panel( 'quidus_typography_panel', array(
			'priority'    => 10,
			'title'       => __( 'Typography', 'quidus' ),
		) );
		
		/* -------------------------- */
			
		/* ------ // Social // ------ */
			
		/* -------------------------- */
		
		$wp_customize->add_panel( 'quidus_social_panel', array(
			'priority'    => 10,
			'title'       => __( 'Social', 'quidus' ),
		) );
		
		/* ------------------------- */
			
		/* ------ // Color // ------ */
			
		/* ------------------------- */
		
		$wp_customize->add_panel( 'quidus_color_panel', array(
			'priority'    => 10,
			'title'       => __( 'Color', 'quidus' ),
		) );
		
		/* -------------------------- */
			
		/* ------ // Layout // ------ */
			
		/* -------------------------- */
		
		$wp_customize->add_panel( 'quidus_layout_panel', array(
			'priority'    => 10,
			'title'       => __( 'Layout', 'quidus' ),
		) );
		
	}

	add_action('customize_register', 'quidus_panels');

?>