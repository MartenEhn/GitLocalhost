<?php

/**
 * Extensions for default page builder styling options
 */
	
	function custom_row_style_fields($fields) {
		// Add the attribute fields
		
		$fields['padding-t'] = array(
			'name' => __('Padding Top', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 8,
			'multiple' => true
		);
		
		$fields['padding-r'] = array(
			'name' => __('Padding Right', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 9,
			'multiple' => true
		);
		
		$fields['padding-b'] = array(
			'name' => __('Padding Bottom', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 10,
			'multiple' => true
		);
		
		$fields['padding-l'] = array(
			'name' => __('Padding Left', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 11,
			'multiple' => true
		);
		
		$fields['margin'] = array(
			'name' => __('Margin', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 12,
			'multiple' => true
		);
		
		$fields['margin-t'] = array(
			'name' => __('Margin Top', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 13,
			'multiple' => true
		);
		
		$fields['margin-r'] = array(
			'name' => __('Margin Right', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 14,
			'multiple' => true
		);
		
		$fields['margin-b'] = array(
			'name' => __('Margin Bottom', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 15,
			'multiple' => true
		);
		
		$fields['margin-l'] = array(
			'name' => __('Margin Left', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 16,
			'multiple' => true
		);
		
		$fields['translate-X'] = array(
			'name' => __('Translate X', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 17,
			'multiple' => true
		);
		
		$fields['translate-Y'] = array(
			'name' => __('Translate Y', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 18,
			'multiple' => true
		);
		
		$fields['top'] = array(
			'name' => __('Top', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 19,
			'multiple' => true
		);
		
		$fields['right'] = array(
			'name' => __('Right', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 20,
			'multiple' => true
		);
		
		$fields['bottom'] = array(
			'name' => __('Bottom', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 21,
			'multiple' => true
		);
		
		$fields['left'] = array(
			'name' => __('Left', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 22,
			'multiple' => true
		);
		
		$fields['width'] = array(
			'name' => __('Width', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 24,
		);
		
		$fields['height'] = array(
			'name' => __('Height', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 23,
		);
		
		$fields['position'] = array(
			'name' => __('Position', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 25,
		);
		
		$fields['max-width'] = array(
			'name' => __('Maximum Width', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 26,
			'multiple' => true
		);
		
		$fields['row_stretch']['priority'] = 27;
		
		unset($fields['bottom_margin']);

		return $fields;
	}
	
	add_filter( 'siteorigin_panels_row_style_fields', 'custom_row_style_fields' );
	
	function custom_widget_style_fields($fields) {
		// Add the attribute fields
		
		$fields['padding-t'] = array(
			'name' => __('Padding Top', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 11,
			'multiple' => true
		);
		
		$fields['padding-r'] = array(
			'name' => __('Padding Right', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 12,
			'multiple' => true
		);
		
		$fields['padding-b'] = array(
			'name' => __('Padding Bottom', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 13,
			'multiple' => true
		);
		
		$fields['padding-l'] = array(
			'name' => __('Padding Left', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 14,
			'multiple' => true
		);
		
		$fields['margin'] = array(
			'name' => __('Margin', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 14,
			'multiple' => true
		);
		
		$fields['margin-t'] = array(
			'name' => __('Margin Top', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 15,
			'multiple' => true
		);
		
		$fields['margin-r'] = array(
			'name' => __('Margin Right', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 16,
			'multiple' => true
		);
		
		$fields['margin-b'] = array(
			'name' => __('Margin Bottom', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 17,
			'multiple' => true
		);
		
		$fields['margin-l'] = array(
			'name' => __('Margin Left', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 18,
			'multiple' => true
		);
		
		$fields['translate-X'] = array(
			'name' => __('Translate X', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 19,
			'multiple' => true
		);
		
		$fields['translate-Y'] = array(
			'name' => __('Translate Y', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 19,
			'multiple' => true
		);
		
		$fields['left'] = array(
			'name' => __('Left', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 20,
			'multiple' => true
		);
		
		$fields['bottom'] = array(
			'name' => __('Bottom', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 20,
			'multiple' => true
		);
		
		$fields['right'] = array(
			'name' => __('Right', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 20,
			'multiple' => true
		);
		
		$fields['top'] = array(
			'name' => __('Top', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 20,
			'multiple' => true
		);
		
		$fields['width'] = array(
			'name' => __('Width', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 21,
		);
		
		$fields['height'] = array(
			'name' => __('Height', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 21,
		);
		
		$fields['position'] = array(
			'name' => __('Position', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 22,
		);
		
		$fields['max-width'] = array(
			'name' => __('Maximum Width', 'quidus'),
			'type' => 'text',
			'group' => 'layout',
			'priority' => 23,
			'multiple' => true
		);

		return $fields;
	}
	
	add_filter( 'siteorigin_panels_widget_style_fields', 'custom_widget_style_fields' );
	
	function custom_row_style_attributes( $attributes, $args ) {
	
		if( !empty( $args['padding-b'] ) ) {
			$attributes['style'] .= 'padding-bottom: ' . esc_attr($args['padding-b']) . ';';
		}
		
		if( !empty( $args['padding-t'] ) ) {
			$attributes['style'] .= 'padding-top: ' . esc_attr($args['padding-t']) . ';';
		}
		
		if( !empty( $args['padding-r'] ) ) {
			$attributes['style'] .= 'padding-right: ' . esc_attr($args['padding-r']) . ';';
		}
		
		if( !empty( $args['padding-l'] ) ) {
			$attributes['style'] .= 'padding-left: ' . esc_attr($args['padding-l']) . ';';
		}
		
		if( !empty( $args['margin'] ) ) {
			$attributes['style'] .= 'margin: ' . esc_attr($args['margin']) . ';';
		}
		
		if( !empty( $args['margin-t'] ) ) {
			$attributes['style'] .= 'margin-top: ' . esc_attr($args['margin-t']) . ';';
		}
		
		if( !empty( $args['margin-r'] ) ) {
			$attributes['style'] .= 'margin-right: ' . esc_attr($args['margin-r']) . ';';
		}
		
		if( !empty( $args['margin-b'] ) ) {
			$attributes['style'] .= 'margin-bottom: ' . esc_attr($args['margin-b']) . ';';
		}
		
		if( !empty( $args['margin-l'] ) ) {
			$attributes['style'] .= 'margin-left: ' . esc_attr($args['margin-l']) . ';';
		}
		
		if( !empty( $args['top'] ) ) {
			$attributes['style'] .= 'top: ' . esc_attr($args['top']) . ';';
		}
		
		if( !empty( $args['right'] ) ) {
			$attributes['style'] .= 'right: ' . esc_attr($args['right']) . ';';
		}
		
		if( !empty( $args['bottom'] ) ) {
			$attributes['style'] .= 'bottom: ' . esc_attr($args['bottom']) . ';';
		}
		
		if( !empty( $args['left'] ) ) {
			$attributes['style'] .= 'left: ' . esc_attr($args['left']) . ';';
		}
		
		if( !empty( $args['translate-X'] ) ) {
			$attributes['style'] .= 'transform: translateX(' . esc_attr($args['translate-X']) . ');';
		}
		
		if( !empty( $args['translate-Y'] ) ) {
			$attributes['style'] .= 'transform: translateY(' . esc_attr($args['translate-Y']) . ');';
		}
		
		if( !empty( $args['translate-X'] ) and !empty( $args['translate-Y'] ) ) {
			$attributes['style'] .= 'transform: translate(' . esc_attr($args['translate-X']) . ', ' . esc_attr($args['translate-Y']) . ');';
		}
		
		if( !empty( $args['height'] ) ) {
			$attributes['style'] .= 'height: ' . esc_attr($args['height']) . ';';
		}
		
		if( !empty( $args['width'] ) ) {
			$attributes['style'] .= 'width: ' . esc_attr($args['width']) . ';';
		}
		
		if( !empty( $args['max-width'] ) ) {
			$attributes['style'] .= 'max-width: ' . esc_attr($args['max-width']) . ';';
		}
		
		if( !empty( $args['position'] ) ) {
			$attributes['style'] .= 'position: ' . esc_attr($args['position']) . ';';
		}

		return $attributes;
		
	}
	
	add_filter( 'siteorigin_panels_row_style_attributes', 'custom_row_style_attributes', 10, 2);
	
	function custom_widget_style_attributes( $attributes, $args ) {
	
		if( !empty( $args['padding-t'] ) ) {
			$attributes['style'] .= 'padding-top: ' . esc_attr($args['padding-t']) . ';';
		}
		
		if( !empty( $args['padding-r'] ) ) {
			$attributes['style'] .= 'padding-right: ' . esc_attr($args['padding-r']) . ';';
		}
		
		if( !empty( $args['padding-b'] ) ) {
			$attributes['style'] .= 'padding-bottom: ' . esc_attr($args['padding-b']) . ';';
		}
		
		if( !empty( $args['padding-l'] ) ) {
			$attributes['style'] .= 'padding-left: ' . esc_attr($args['padding-l']) . ';';
		}
		
		if( !empty( $args['margin'] ) ) {
			$attributes['style'] .= 'margin: ' . esc_attr($args['margin']) . ';';
		}
		
		if( !empty( $args['margin-t'] ) ) {
			$attributes['style'] .= 'margin-top: ' . esc_attr($args['margin-t']) . ';';
		}
		
		if( !empty( $args['margin-r'] ) ) {
			$attributes['style'] .= 'margin-right: ' . esc_attr($args['margin-r']) . ';';
		}
		
		if( !empty( $args['margin-b'] ) ) {
			$attributes['style'] .= 'margin-bottom: ' . esc_attr($args['margin-b']) . ';';
		}
		
		if( !empty( $args['margin-l'] ) ) {
			$attributes['style'] .= 'margin-left: ' . esc_attr($args['margin-l']) . ';';
		}
		
		if( !empty( $args['translate-X'] ) ) {
			$attributes['style'] .= 'transform: translateX(' . esc_attr($args['translate-X']) . ');';
		}
		
		if( !empty( $args['translate-Y'] ) ) {
			$attributes['style'] .= 'transform: translateY(' . esc_attr($args['translate-Y']) . ');';
		}
		
		if( !empty( $args['translate-X'] ) and !empty( $args['translate-Y'] ) ) {
			$attributes['style'] .= 'transform: translate(' . esc_attr($args['translate-X']) . ', ' . esc_attr($args['translate-Y']) . ');';
		}
		
		if( !empty( $args['top'] ) ) {
			$attributes['style'] .= 'top: ' . esc_attr($args['top']) . ';';
		}
		
		if( !empty( $args['right'] ) ) {
			$attributes['style'] .= 'right: ' . esc_attr($args['right']) . ';';
		}
		
		if( !empty( $args['bottom'] ) ) {
			$attributes['style'] .= 'bottom: ' . esc_attr($args['bottom']) . ';';
		}
		
		if( !empty( $args['left'] ) ) {
			$attributes['style'] .= 'left: ' . esc_attr($args['left']) . ';';
		}
		
		if( !empty( $args['height'] ) ) {
			$attributes['style'] .= 'height: ' . esc_attr($args['height']) . ';';
		}
		
		if( !empty( $args['width'] ) ) {
			$attributes['style'] .= 'width: ' . esc_attr($args['width']) . ';';
		}
		
		if( !empty( $args['position'] ) ) {
			$attributes['style'] .= 'position: ' . esc_attr($args['position']) . ';';
		}
		
		if( !empty( $args['max-width'] ) ) {
			$attributes['style'] .= 'max-width: ' . esc_attr($args['max-width']) . ';';
		}
		
		return $attributes;
		
	}
	
	add_filter( 'siteorigin_panels_widget_style_attributes', 'custom_widget_style_attributes', 10, 2);
	

?>