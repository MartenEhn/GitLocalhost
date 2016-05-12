<?php










class Quidus_Skills extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'quidus_skills',

			// The name of the widget for display purposes.
			__('Quidus Skills', 'quidus'),

			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Display various skills.', 'quidus')
			),

			//The $control_options array, which is passed through to WP_Widget
			array(
			),

			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.

			array(
				
				'skill_title_color' => array(			
					'type' => 'color',
					'label' => __( 'Skill Title Color', 'quidus' ),
				),
				
				'skill_desc_color' => array(			
					'type' => 'color',
					'label' => __( 'Skill Description Color', 'quidus' ),
				),
				
				'skill_perc_color' => array(		
					'type' => 'color',
					'label' => __( 'Skill Percentage Color', 'quidus' ),
				),
				
				'skill_perc_num_color' => array(		
					'type' => 'color',
					'label' => __( 'Skill Percentage Count Color', 'quidus' ),
				),
				
				'skills' => array(
					'type' => 'repeater',
					'label' => __( 'Skills', 'quidus' ),
					'item_label' => array(
						'selector'     => "[id*='title']"
					),
					
					'fields' => array(
					
						'skill_title' => array(
							'type' => 'text',
							'label' => __( 'Skill Title', 'quidus' )
						),
						
						'skill_desc' => array(
							'type' => 'text',
							'label' => __( 'Skill Description', 'quidus' )
						),
						
						'skill_percentage_number' => array(
							'type' => 'number',
							'label' => __( 'Skill Percentage', 'quidus' ),
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
				
				'skills_style' => array(
					'type' => 'select',
					'label' => __( 'Choose skill styling.', 'quidus' ),
					'default' => 'skill_style_1',
					'options' => array(
						'skill_style_1' => __( 'Style 1', 'quidus' ),
						'skill_style_2' => __( 'Style 2', 'quidus' )
					)
				),
				
			),

			//The $base_folder path string.
			plugin_dir_path(__FILE__)
		);

	}
	
	function get_template_name($instance) {
		return 'quidus_skills_template';
	}

	function get_template_dir($instance) {
        return 'widget_templates';
	}
}

siteorigin_widget_register('quidus_skills', __FILE__, 'Quidus_Skills');