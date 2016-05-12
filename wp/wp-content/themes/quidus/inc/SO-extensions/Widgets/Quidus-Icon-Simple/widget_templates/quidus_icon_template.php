<?php

    $icon_styles = array();
    if(!empty($instance['simple_icon_font_size'])) $icon_styles[] = 'font-size: '.wp_kses_post($instance['simple_icon_font_size']);
    if(!empty($instance['simple_icon_color'])) $icon_styles[] = 'color: '.$instance['simple_icon_color'];
	if(!empty($instance['simple_icon_width'])) $icon_styles[] = 'width: '.wp_kses_post($instance['simple_icon_width']);
	if(!empty($instance['simple_icon_height'])) $icon_styles[] = 'height: '.wp_kses_post($instance['simple_icon_height']);
	if(!empty($instance['simple_icon_line_height'])) $icon_styles[] = 'line-height: '.wp_kses_post($instance['simple_icon_line_height']); 

	echo siteorigin_widget_get_icon( $instance['simple_icon'], $icon_styles );
	
?>
