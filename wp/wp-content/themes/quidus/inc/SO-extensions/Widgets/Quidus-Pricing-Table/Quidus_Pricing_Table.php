<?php

class Quidus_Pricing_Table extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'quidus-pricing-table',

			// The name of the widget for display purposes.
			__('Quidus Pricing Tables', 'quidus'),

			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Stylish Pricing Tables.', 'quidus')
			),

			//The $control_options array, which is passed through to WP_Widget
			array(
			),

			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.

			array(
				
				'special_table_bg_color' => array(
					'type' => 'color',
					'label' => __( 'Special Pricing Table Header Background Color', 'quidus' ),
				),
				
				'table_bg_color' => array(
					'type' => 'color',
					'label' => __( 'Pricing Table Background Color', 'quidus' ),
				),
				
				'plan_title_color' => array(
					'type' => 'color',
					'label' => __( 'Title Color', 'quidus' ),
				),
				
				'plan_subtitle_color' => array(
					'type' => 'color',
					'label' => __( 'Subtitle Color', 'quidus' ),
				),
				
				'plan_pricing_color' => array(
					'type' => 'color',
					'label' => __( 'Pricing Color', 'quidus' ),
				),
				
				'pricing_subtitle_color' => array(
					'type' => 'color',
					'label' => __( 'Pricing Subtitle Color', 'quidus' ),
				),
				
				'plan_features_color' => array(
					'type' => 'color',
					'label' => __( 'Plan Feature Color', 'quidus' ),
				),
				
				'plan_url_color' => array(
					'type' => 'color',
					'label' => __( 'Button Color', 'quidus' ),
				),
				
			    'pricing_tables' => array(
					'type' => 'repeater',
					'label' => __( 'Pricing Tables' , 'quidus' ),
					'item_name'  => __( 'Pricing Table', 'quidus' ),
					'fields' => array(
					
						'special_table' => array(
							'type' => 'checkbox',
							'label' => __( 'Special Offer', 'quidus' )
						),
				
						'plan_title' => array(
							'type' => 'text',
							'label' => __( 'Plan Title', 'quidus' )
						),
						
						'plan_subtitle' => array(
							'type' => 'text',
							'label' => __( 'Plan Subtitle', 'quidus' )
						),
						
						'plan_pricing' => array(
							'type' => 'text',
							'label' => __( 'Pricing', 'quidus' )
						),
						
						'pricing_subtitle' => array(
							'type' => 'text',
							'label' => __( 'Pricing Subtitle', 'quidus' )
						),
								
						'plan_features' => array(
							'type' => 'repeater',
							'label' => __( 'Plan Features' , 'quidus' ),
							'item_name'  => __( 'Feature', 'quidus' ),
							'fields' => array(
						
								'plan_feature' => array(
									'type' => 'text',
									'label' => __( 'Feature', 'quidus' )
								),
								
							)
						),
													
						'plan_url_text' => array(
							'type' => 'text',
							'label' => __( 'Button Text', 'quidus' )
						),
						
						'plan_url' => array(
							'type' => 'link',
							'label' => __('Button Url', 'quidus'),
							'default' => '#'
						),
						
						'plan_url_nw' => array(
							'type' => 'checkbox',
							'label' => __( 'Open In A New Window', 'quidus' )
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
		return 'quidus_pricing_table';
	}

	function get_template_dir($instance) {
        return 'widget_templates';
	}
}

siteorigin_widget_register('quidus-pricing-table', __FILE__, 'Quidus_Pricing_Table');