<?php

	/* List Of Social Networks */
	
	global $social_networks;
	
	$social_networks = array('Facebook', 'Twitter', 'Linkedin', 'Pinterest', 'Googleplus', 'Tumblr', 'Feed', 'Instagram', 'Flickr', 'Youtube', 'Stumbleupon', 'Dribbble', 'Codepen', 'Digg', 'Reddit', 'Github', 'Wordpress', 'Polldaddy', 'Skype', 'Twitch', 'Foursquare');
	
	global $social_networks;
	
	/* Author Social Icons */

	foreach ($social_networks as $network) {

		Kirki::add_field( 'quidus', array(
			'type'        => 'text',
			'setting'     => 'author_' . lcfirstc($network),
			'label'       => $network,
			'section'     => 'quidus_author_social',
			'default'     => __( 'Social Network Url' , 'quidus' ),
			'priority'    => 10,
		));
	}
	
	/* Header Social Icons */
	
	foreach ($social_networks as $network) {

		Kirki::add_field( 'quidus', array(
			'type'        => 'text',
			'setting'     => 'my_' . lcfirstc($network),
			'label'       => $network,
			'section'     => 'quidus_header_social',
			'default'     => __( 'Social Network Url' , 'quidus' ),
			'priority'    => 10,
		));
	}
	
	/* Footer Social Icons */
	
	foreach ($social_networks as $network) {

		Kirki::add_field( 'quidus', array(
			'type'        => 'text',
			'setting'     => 'footer_' . lcfirstc($network),
			'label'       => $network,
			'section'     => 'quidus_footer_social',
			'default'     => __( 'Social Network Url' , 'quidus' ),
			'priority'    => 10,
		));
	}

?>