<?php

class Quidus_Testimonials extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'quidus-testimonials',

			// The name of the widget for display purposes.
			__('Quidus Testimonials', 'quidus'),

			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Display various testimonials.', 'quidus')
			),

			//The $control_options array, which is passed through to WP_Widget
			array(
			),

			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.

			array(
				
				'testimonial_text_color' => array(
					'type' => 'color',
					'label' => __( 'Testimonial Color', 'quidus' ),
				),
				
				'testimonial_name_color' => array(
					'type' => 'color',
					'label' => __( 'Name Color', 'quidus' ),
				),
				
				'testimonial_job_title_color' => array(
					'type' => 'color',
					'label' => __( 'Position Color', 'quidus' ),
				),
				
				'testimonial_icon_color' => array(
					'type' => 'color',
					'label' => __( 'Icon Color', 'quidus' ),
				),
				
				'testimonial_icon_bg_color' => array(
					'type' => 'color',
					'label' => __( 'Icon Background Color', 'quidus' ),
				),
				
				'testimonial_bg_color_main' => array(
					'type' => 'color',
					'label' => __( 'Testimonial Background Color', 'quidus' ),
				),
				
				'testimonials' => array(
					'type' => 'repeater',
					'label' => __( 'Testimonials', 'quidus' ),
					'item_label' => array(
						'selector'     => "[id*='title']"
					),
					
					'fields' => array(
					
						'testimonial_text' => array(
							'type' => 'text',
							'label' => __('Testimonial', 'quidus'),
						),
							
						'testimonial_job_title' => array(
							'type' => 'text',
							'label' => __('Position', 'quidus'),
						),
						
						'testimonial_name' => array(
							'type' => 'text',
							'label' => __('Name', 'quidus'),
						),
					
					
						'testimonial_icon' => array(
							'type' => 'icon',
							'label' => __('Icon', 'quidus'),
						),
					
					)
					
				),
				
				'columns_desktop' => array(
					'type' => 'slider',
					'label' => __( 'Number Of Columns On Desktop', 'quidus' ),
					'min' => 1,
					'max' => 5,
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
		return 'quidus_testimonials';
	}

	function get_template_dir($instance) {
        return 'widget_templates';
	}
}

siteorigin_widget_register('quidus-testimonials', __FILE__, 'Quidus_Testimonials');