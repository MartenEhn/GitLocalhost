<?php	

	function quidus_panels_add_widget_groups($widgets){
		$widgets['Quidus_Testimonials']['groups'] = array('quidus');
		$widgets['Quidus_Services']['groups'] = array('quidus');
		$widgets['Quidus_Simple_Icon_Widget']['groups'] = array('quidus');
		$widgets['Quidus_Facts']['groups'] = array('quidus');
		$widgets['Quidus_Skills']['groups'] = array('quidus');
		$widgets['Quidus_Team']['groups'] = array('quidus');
		$widgets['Quidus_Pricing_Table']['groups'] = array('quidus');
		$widgets['Quidus_Recent_Posts']['groups'] = array('quidus');
		$widgets['Quidus_Featured_Posts']['groups'] = array('quidus');
		$widgets['Quidus_CTA']['groups'] = array('quidus');
		return $widgets;

	}
	
	add_filter('siteorigin_panels_widgets', 'quidus_panels_add_widget_groups');

	function quidus_panels_add_widgets_dialog_tabs($tabs){

		$tabs[] = array(
			'title' => __('Quidus SiteOrigin Widgets', 'quidus'),
			'filter' => array(
				'installed' => true,
				'groups' => array('quidus')
			)
		);

		return $tabs;
		
	}
	
	add_filter('siteorigin_panels_widget_dialog_tabs', 'quidus_panels_add_widgets_dialog_tabs');
	
?>