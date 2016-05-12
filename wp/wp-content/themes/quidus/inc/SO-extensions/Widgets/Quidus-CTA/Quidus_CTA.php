<?php

class Quidus_CTA extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'quidus-cta',

			// The name of the widget for display purposes.
			__('Quidus Call-To-Action', 'quidus'),

			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Increase sales or subscriptions with stylish CTA section.', 'quidus')
			),

			//The $control_options array, which is passed through to WP_Widget
			array(
			),

			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
			
				'CTA-header' => array(
					'type' => 'text',
					'label' => __('CTA Header', 'quidus'),
				),
				
				'CTA_header_color' => array(
					'type' => 'color',
					'label' => __( 'Header Color', 'quidus' ),
				),
				
				'CTA-description' => array(
					'type' => 'text',
					'label' => __('CTA Description', 'quidus'),
				),
				
				'CTA_description_color' => array(
					'type' => 'color',
					'label' => __( 'Description Color', 'quidus' ),
				),
			
				'CTA-button-1-text' => array(
					'type' => 'text',
					'label' => __('Button Text', 'quidus'),
				),
			
				'CTA-button-1-url' => array(
					'type' => 'link',
					'label' => __('Button Url', 'quidus'),
					'default' => ''
				),
				
				'CTA-button-1-nw' => array(
					'type' => 'checkbox',
					'label' => __( 'Open In A New Window', 'quidus' )
				),
				
				'CTA_button_1_color' => array(
					'type' => 'color',
					'label' => __( 'Button Color', 'quidus' ),
				),
				
				'CTA_button_1_background_color' => array(
					'type' => 'color',
					'label' => __( 'Button Background Color', 'quidus' ),
				),
				
				'CTA-button-2-text' => array(
					'type' => 'text',
					'label' => __('Button Text', 'quidus'),
				),
				
				'CTA-button-2-url' => array(
					'type' => 'link',
					'label' => __('Button Url', 'quidus'),
					'default' => ''
				),
				
				'CTA-button-2-nw' => array(
					'type' => 'checkbox',
					'label' => __( 'Open In A New Window', 'quidus' )
				),
				
				'CTA_button_2_color' => array(
					'type' => 'color',
					'label' => __( 'Button Color', 'quidus' ),
				),
				
				'CTA_button_2_background_color' => array(
					'type' => 'color',
					'label' => __( 'Button Background Color', 'quidus' ),
				),
				
			),

			//The $base_folder path string.
			plugin_dir_path(__FILE__)
			
		);

	}
	
	function get_template_name($instance) {
		return 'quidus_CTA';
	}

	function get_template_dir($instance) {
        return 'widget_templates';
	}
}

siteorigin_widget_register('quidus-cta', __FILE__, 'Quidus_CTA');