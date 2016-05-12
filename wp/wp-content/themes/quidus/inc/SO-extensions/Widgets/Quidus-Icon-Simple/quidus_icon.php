<?php

/*
Widget Name: Hello world widget
Description: An example widget which displays 'Hello world!'.
Author: Me
Author URI: http://example.com
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/

class Quidus_Simple_Icon_Widget extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'quidus_simple_icon',

			// The name of the widget for display purposes.
			__('Quidus Simple Icon', 'quidus'),

			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('One simple element.', 'quidus')
			),

			//The $control_options array, which is passed through to WP_Widget
			array(
			),

			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.

			array(
			
				'simple_icon' => array(
					'type' => 'icon',
					'label' => __('Icon', 'quidus'),
				),
				
				'simple_icon_color' => array(
					'type' => 'color',
					'label' => __( 'Color', 'quidus' ),
				),
				
				'simple_icon_font_size' => array(
					'type' => 'text',
					'label' => __('Font Size', 'quidus'),
				),
				
				'simple_icon_width' => array(
					'type' => 'text',
					'label' => __('Width', 'quidus'),
				),
				
				'simple_icon_height' => array(
					'type' => 'text',
					'label' => __('Height', 'quidus'),
				),
				
				'simple_icon_line_height' => array(
					'type' => 'text',
					'label' => __('Line Height', 'quidus'),
				),
				
			),

			//The $base_folder path string.
			plugin_dir_path(__FILE__)
		);
		

	}
	
	function get_template_name($instance) {
		return 'quidus_icon_template';
	}

	function get_template_dir($instance) {
        return 'widget_templates';
	}
}

siteorigin_widget_register('quidus_simple_icon', __FILE__, 'Quidus_Simple_Icon_Widget');