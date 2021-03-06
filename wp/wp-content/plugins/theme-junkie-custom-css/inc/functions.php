<?php
/**
 * Custom functions needed by the plugin.
 * 
 * @package    Theme_Junkie_Custom_CSS
 * @since      0.1.0
 * @author     Theme Junkie
 * @copyright  Copyright (c) 2014, Theme Junkie
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Get the custom css value and display it on front-end
 *
 * @since  0.1.0
 * @access public
 */
function tjcc_get_custom_css() {

	$option = get_option( 'tj_custom_css' );
	$output = isset( $option['custom_css'] ) ? $option['custom_css'] : '';
	$output = wp_kses( $output, array( '\'', '\"', '>', '+' ) );
	$output = str_replace( '&gt;', '>', $output );;

	if ( $output ) {
		$css = '<!-- Custom CSS -->' . "\n";
		$css .= '<style>' . "\n";
		$css .= $output . "\n";
		$css .= '</style>' . "\n";
		$css .= '<!-- Generate by https://wordpress.org/plugins/theme-junkie-custom-css/ -->' . "\n";

		echo $css;
	}

}
add_action( 'wp_head', 'tjcc_get_custom_css', 20 );