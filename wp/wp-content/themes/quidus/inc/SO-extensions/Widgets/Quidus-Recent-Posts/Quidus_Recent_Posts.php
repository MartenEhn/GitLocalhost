<?php

class Quidus_Recent_Posts extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'quidus-recent-posts',

			// The name of the widget for display purposes.
			__('Quidus SiteOrigin Recent Posts', 'quidus'),

			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Displays your recent posts.', 'quidus')
			),

			//The $control_options array, which is passed through to WP_Widget
			array(
			),

			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.

			array(
				
				'recent_posts_query' => array(
					'type' => 'posts',
					'label' => __('Posts Query', 'quidus'),
				),
				
				'columns_desktop' => array(
					'type' => 'slider',
					'label' => __( 'Number Of Columns On Desktop', 'quidus' ),
					'min' => 1,
					'max' => 6,
					'default' => 3
				),

				'columns_tablet_large' => array(
					'type' => 'slider',
					'label' => __( 'Number Of Columns On Large Tablet', 'quidus' ),
					'min' => 1,
					'max' => 4,
					'default' => 3
				),

				'columns_tablet_small' => array(
					'type' => 'slider',
					'label' => __( 'Number Of Columns On Small Tablet', 'quidus' ),
					'min' => 1,
					'max' => 3,
					'default' => 2
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
				
				'item_height' => array(
					'type' => 'text',
					'label' => __( 'Item Height (window height - %)', 'quidus' ),
					'default' => ''
				),
				
				'recent_posts_style' => array(
					'type' => 'select',
					'label' => __( 'Choose recent posts styling.', 'quidus' ),
					'default' => 'recent_post_style_1',
					'options' => array(
						'recent_post_style_1' => __( 'Style 1', 'quidus' ),
						'recent_post_style_2' => __( 'Style 2', 'quidus' ),
						'recent_post_style_3' => __( 'Style 3', 'quidus' ),
						'recent_post_style_4' => __( 'Style 4', 'quidus' ),
						'recent_post_style_5' => __( 'Style 5', 'quidus' ),
						'recent_post_style_6' => __( 'Style 6', 'quidus' )
					)
				),
				
			),

			//The $base_folder path string.
			plugin_dir_path(__FILE__)
		);
		

	}
	
	function get_template_name($instance) {
		return 'quidus_recent_posts';
	}

	function get_template_dir($instance) {
        return 'widget_templates';
	}
}

siteorigin_widget_register('quidus-recent-posts', __FILE__, 'Quidus_Recent_Posts');