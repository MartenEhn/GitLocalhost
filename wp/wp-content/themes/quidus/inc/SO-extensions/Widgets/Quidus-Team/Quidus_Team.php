<?php







class Quidus_Team extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'quidus-team',
			__('Quidus Team', 'quidus'),
			array(
				'description' => __('Show your team members.', 'quidus')
			),
			array(),
			array(
				
				'team_member_name_color' => array(			
					'type' => 'color',
					'label' => __( 'Name Color', 'quidus' ),
				),
				
				'team_member_position_color' => array(			
					'type' => 'color',
					'label' => __( 'Position Color', 'quidus' ),
				),
				
				'team_member_background_color' => array(			
					'type' => 'color',
					'label' => __( 'Hover Background Color', 'quidus' ),
				),
			
				'members' => array(
					'type' => 'repeater',
					'label' => __( 'Members', 'quidus' ),
					'item_label' => array(
						'selector'     => "[id*='title']"
					),
					'fields' => array(
						'member_image' => array(
							'type' => 'media',
							'label' => __( 'Image', 'quidus')
						),
						'member_name' => array(
							'type' => 'text',
							'label' => __('Name', 'quidus'),
						),
						'member_position' => array(
							'type' => 'text',
							'label' => __('Position', 'quidus'),
						),
						
						'social_links_team' => array(
							'type' => 'repeater',
							'label' => __( 'Social Links', 'quidus' ),
							'item_label' => __( 'New Social Link', 'quidus' ),
							'fields' => array(
							
								'social_link_icon' => array(
									'type' => 'icon',
									'label' => __('Icon', 'quidus'),
								),
								
								'social_link_icon_color' => array(			
									'type' => 'color',
									'label' => __( 'Icon Color', 'quidus' ),
								),
								
								'social_link_icon_font_size' => array(
									'type' => 'text',
									'label' => __('Font Size', 'quidus'),
								),
								
								'social_link_icon_url' => array(
									'type' => 'link',
									'label' => __('Destination URL', 'quidus'),
								),

							)
							
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
			plugin_dir_path(__FILE__)
		);

	}

	function get_template_name($instance) {
		return 'Quidus-Team';
	}
}

siteorigin_widget_register('quidus-team', __FILE__, 'Quidus_Team');