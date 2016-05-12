<?php

class Quidus_Services extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'quidus-services',

			// The name of the widget for display purposes.
			__('Quidus Services', 'quidus'),

			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Display various services.', 'quidus')
			),

			//The $control_options array, which is passed through to WP_Widget
			array(
			),

			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.

			array(
				
				'single_service_color' => array(
					'type' => 'color',
					'label' => __( 'Icon Color', 'quidus' ),
				),
				
				'single_service_font_size' => array(
					'type' => 'text',
					'label' => __('Font Size', 'quidus'),
				),
				
				'single_service_width' => array(
					'type' => 'text',
					'label' => __('Width', 'quidus'),
				),
				
				'single_service_height' => array(
					'type' => 'text',
					'label' => __('Height', 'quidus'),
				),
				
				'single_service_line_height' => array(
					'type' => 'text',
					'label' => __('Line Height', 'quidus'),
				),
				
				'single_service_title_color' => array(
					'type' => 'color',
					'label' => __( 'Title Color', 'quidus' ),
				),
				
				'single_service_description_color' => array(
					'type' => 'color',
					'label' => __( 'Description Color', 'quidus' ),
				),
				
				'services' => array(
					'type' => 'repeater',
					'label' => __( 'Services', 'quidus' ),
					'item_label' => array(
						'selector'     => "[id*='title']"
					),
					
					'fields' => array(
					
						'single_service' => array(
							'type' => 'icon',
							'label' => __('Icon', 'quidus'),
						),
					
						'single_service_title' => array(
							'type' => 'text',
							'label' => __( 'Service Title', 'quidus' )
						),
						
						'single_service_description' => array(
							'type' => 'text',
							'label' => __( 'Service Description', 'quidus' )
						),
					
					)
					
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
				
				
			),

			//The $base_folder path string.
			plugin_dir_path(__FILE__)
		);
		

	}
	
	function get_template_name($instance) {
		return 'quidus_services';
	}

	function get_template_dir($instance) {
        return 'widget_templates';
	}
}

siteorigin_widget_register('quidus-services', __FILE__, 'Quidus_Services');