<?php
	
	/* ----------------------------------------- */
		
	/* ------ // Layout -> Single Post // ------ */
		
	/* ----------------------------------------- */
	
	/* Disable Featured Image */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_featured_image_single_disable',
		'label'       => __( 'Disable Featured Image On Single Post', 'quidus' ),
		'section'     => 'quidus_single_layout',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Comments Title Align Left */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_comments_title_align_left',
		'label'       => __( 'Comments Title Align Left', 'quidus' ),
		'section'     => 'quidus_single_layout',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Post Title & Meta Align Left */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_post_title_align_left',
		'label'       => __( 'Post Title & Meta Align Left', 'quidus' ),
		'section'     => 'quidus_single_layout',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Hide Entry Meta On Single Post */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_disable_entry_meta_single',
		'label'       => __( 'Hide Entry Meta On Single Posts', 'quidus' ),
		'section'     => 'quidus_single_layout',
		'default'     => false,
		'priority'    => 10,
	));

?>