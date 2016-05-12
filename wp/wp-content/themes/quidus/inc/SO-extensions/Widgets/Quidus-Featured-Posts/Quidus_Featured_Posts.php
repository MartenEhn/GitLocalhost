<?php

class Quidus_Featured_Posts extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'quidus-featured-posts',

			// The name of the widget for display purposes.
			__('Quidus Featured Post', 'quidus'),

			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Displays one or multiple featured posts.', 'quidus')
			),

			//The $control_options array, which is passed through to WP_Widget
			array(
			),

			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.

			array(
				
				'featured_posts_query' => array(
					'type' => 'posts',
					'label' => __('Posts Query', 'quidus'),
				),
				
				'show_date' => array(
					'type' => 'checkbox',
					'label' => __( 'Show Date', 'quidus' ),
					'default' => true
				),
				
				'show_author' => array(
					'type' => 'checkbox',
					'label' => __( 'Show Author', 'quidus' ),
					'default' => true
				),
				
				'show_categories' => array(
					'type' => 'checkbox',
					'label' => __( 'Show Categories', 'quidus' ),
					'default' => true
				),
				
			),

			//The $base_folder path string.
			plugin_dir_path(__FILE__)
		);
		

	}
	
	function get_template_name($instance) {
		return 'quidus_featured_posts';
	}

	function get_template_dir($instance) {
        return 'widget_templates';
	}
}

siteorigin_widget_register('quidus-featured-posts', __FILE__, 'Quidus_Featured_Posts');