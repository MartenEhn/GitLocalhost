<?php

class Quidus_Facts extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'quidus-facts',
			__('Quidus Facts', 'quidus'),
			array(
				'description' => __('Display various facts.', 'quidus')
			),
			array(),
			array(
				
				'single_fact_icon_color' => array(			
					'type' => 'color',
					'label' => __( 'Icon Color', 'quidus' ),
				),
				
				'single_fact_count_color' => array(			
					'type' => 'color',
					'label' => __( 'Count Color', 'quidus' ),
				),
				
				'single_fact_title_color' => array(			
					'type' => 'color',
					'label' => __( 'Title Color', 'quidus' ),
				),
				
				'single_fact_background_color' => array(			
					'type' => 'color',
					'label' => __( 'Background Color', 'quidus' ),
				),
				
				'facts' => array(
					'type' => 'repeater',
					'label' => __( 'Facts', 'quidus' ),
					'item_label' => array(
						'selector'     => "[id*='title']"
					),
					
					'fields' => array(
					
						'single_fact_icon' => array(
							'type' => 'icon',
							'label' => __('Icon', 'quidus'),
						),
						
						'single_fact_count' => array(
							'type' => 'text',
							'label' => __('Count', 'quidus'),
						),
						
						'single_fact_title' => array(
							'type' => 'text',
							'label' => __('Title', 'quidus'),
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
						
				'single_fact_icon_style' => array(
					'type' => 'select',
					'label' => __( 'Choose single fact styling.', 'quidus' ),
					'default' => 'single_fact_icon_1',
					'options' => array(
						'single_fact_icon_style_1' => __( 'Style 1', 'quidus' ),
						'single_fact_icon_style_2' => __( 'Style 2', 'quidus' )
					)
				),
				
			),
			plugin_dir_path(__FILE__)
		);

	}

	function get_template_name($instance) {
		return 'Quidus-Facts';
	}
}

siteorigin_widget_register('quidus-facts', __FILE__, 'Quidus_Facts');