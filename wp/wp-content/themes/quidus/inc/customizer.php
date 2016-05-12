<?php

/**
 * Quidus Customizer functionality
*/

/**
 * Add postMessage support for site title and description for the Customizer.
 *
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
*/

if( class_exists( 'Kirki' ) ) {

	Kirki::add_config( 'quidus', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod'
	) );
	
}

/* Load Panels */

require get_template_directory() . '/inc/customizer-panels.php';

/* Load Sections */

require get_template_directory() . '/inc/customizer-sections.php';
require get_template_directory() . '/inc/Typography/customizer-sections_typography.php';
require get_template_directory() . '/inc/Color/customizer-sections_color.php';

/* Load Layout */

if( class_exists( 'Kirki' ) ) {

require get_template_directory() . '/inc/customizer-layout_global.php';
require get_template_directory() . '/inc/customizer-layout_home.php';
require get_template_directory() . '/inc/customizer-layout_single_post.php';
require get_template_directory() . '/inc/customizer-layout_search.php';
require get_template_directory() . '/inc/customizer-layout_header.php';
require get_template_directory() . '/inc/customizer-layout_content.php';

/* Load Social Icons */

require get_template_directory() . '/inc/customizer-social.php';

/* Load Colors */

require get_template_directory() . '/inc/Color/customizer-color_global.php';
require get_template_directory() . '/inc/Color/customizer-color_headers.php';
require get_template_directory() . '/inc/Color/customizer-color_widget_title.php';
require get_template_directory() . '/inc/Color/customizer-color_address.php';
require get_template_directory() . '/inc/Color/customizer-color_content_meta.php';
require get_template_directory() . '/inc/Color/customizer-color_dd.php';
require get_template_directory() . '/inc/Color/customizer-color_dt.php';
require get_template_directory() . '/inc/Color/customizer-color_lists.php';
require get_template_directory() . '/inc/Color/customizer-color_p.php';
require get_template_directory() . '/inc/Color/customizer-color_site_description.php';
require get_template_directory() . '/inc/Color/customizer-color_site_title.php';
require get_template_directory() . '/inc/Color/customizer-color_td.php';
require get_template_directory() . '/inc/Color/customizer-color_th.php';
require get_template_directory() . '/inc/Color/customizer-color_blockquote.php';
require get_template_directory() . '/inc/Color/customizer-color_menu.php';
require get_template_directory() . '/inc/Color/customizer-color_span.php';
require get_template_directory() . '/inc/Color/customizer-color_a.php';


/* Load Site Identity */

require get_template_directory() . '/inc/customizer-site_identity.php';

/* Load Typography */

require get_template_directory() . '/inc/Typography/customizer-typography_global.php';
require get_template_directory() . '/inc/Typography/customizer-typography_headers.php';
require get_template_directory() . '/inc/Typography/customizer-typography_widget_title.php';
require get_template_directory() . '/inc/Typography/customizer-typography_address.php';
require get_template_directory() . '/inc/Typography/customizer-typography_content_meta.php';
require get_template_directory() . '/inc/Typography/customizer-typography_dd.php';
require get_template_directory() . '/inc/Typography/customizer-typography_dt.php';
require get_template_directory() . '/inc/Typography/customizer-typography_list.php';
require get_template_directory() . '/inc/Typography/customizer-typography_p.php';
require get_template_directory() . '/inc/Typography/customizer-typography_site_description.php';
require get_template_directory() . '/inc/Typography/customizer-typography_site_title.php';
require get_template_directory() . '/inc/Typography/customizer-typography_td.php';
require get_template_directory() . '/inc/Typography/customizer-typography_th.php';
require get_template_directory() . '/inc/Typography/customizer-typography_blockquote.php';
require get_template_directory() . '/inc/Typography/customizer-typography_menu.php';
require get_template_directory() . '/inc/Typography/customizer-typography_span.php';

}

function quidus_css_customizer() {

	/* Global Settings */
	
	global $font_choices;
	global $sl;
	global $fwl;
	global $cwl;
	global $cwlm;
	global $wemw;
	global $quidus_color_special;
	global $quidus_color_main;
	global $quidus_color_secondary;
	
	/* Layout Functions */
	
	if( class_exists( 'Kirki' ) ) {
	
	if( is_page() or is_single() or (class_exists( 'WooCommerce' ) and is_product()) ) {
	
		$lm = get_layout_meta();
		$fwlm = get_footer_widgets_meta();
		$cwlm = get_content_widgets_meta();
		$wmwm = get_max_width_meta();
		$fomwm = get_max_width_meta_footer();
	}
	
	if( is_page() or is_single() or (class_exists( 'WooCommerce' ) and is_product()) ) {
	
		if ($lm == 'Inherit' or $lm == null) {
			$sl = quidus_pages_layout('Inherit','3 Columns','sidebars1');
		} else {
			$sl = $lm;
		}
		
		if ($fwlm == 'Inherit' or $fwlm == null) {
			$fwl = quidus_pages_layout('Inherit','3 Columns','footer_widgets');
		} else {
			$fwl = $fwlm;
		}
		
		if ($cwlm == 'Inherit' or $cwlm == null) {
			$cwl = quidus_pages_layout('Inherit','3 Columns','content_widgets_layout');
		} else {
			$cwl = $cwlm;
		}
		
		if (empty($wmwm) or $wmwm == null) {
		
			if (quidus_max_width('max_width') == '') {
				$wemw = get_theme_mod('quidus_layout_global_max_width', '1718px');
			} else {
				$wemw = quidus_max_width('max_width');
			}
			
		} else {
			$wemw = $wmwm;
		}
		
		if (empty($fomwm) or $fomwm == null) {
		
			if (quidus_max_width('max_width_footer') == '') {
				$fomw = get_theme_mod('quidus_layout_global_max_width', '1718px');
			} else {
				$fomw = quidus_max_width('max_width_footer');
			}
			
		} else {
			$fomw = $fomwm;
		}
		
		
	} else {
		$sl = quidus_pages_layout('Inherit','3 Columns','sidebars1');
		$fwl = quidus_pages_layout('Inherit','3 Columns','footer_widgets');
		$cwl = quidus_pages_layout('Inherit','3 Columns','content_widgets_layout');
		
		if (quidus_max_width('max_width') == '') {
			$wemw = get_theme_mod('quidus_layout_global_max_width', '1718px');
		} else {
			$wemw = quidus_max_width('max_width');
		}
		
		if (quidus_max_width('max_width_footer') == '') {
			$fomw = get_theme_mod('quidus_layout_global_max_width_footer', '1718px');
		} else {
			$fomw = quidus_max_width('max_width_footer');
		}
	}
	
	}

	$cwd = get_theme_mod('quidus_layout_global_content_width_desktopcc', 5600);
	$swd = get_theme_mod('quidus_layout_global_sidebar_width_desktopcc', 2200);
	$rswd = get_theme_mod('quidus_layout_global_right_sidebar_width_desktopcc', 2200);
	
	if( class_exists( 'Kirki' ) ) {
	
	$lswd = quidus_widths('sidebar_width_desktopcc');
	$cwdc = quidus_widths('content_width_desktopcc');
	$rswdc = quidus_widths('right_sidebar_width_desktopcc');
	
	}
	
	$quidus_color_background = get_theme_mod( 'quidus_color_background', '#f7f7f7' );
	$quidus_color_main = get_theme_mod( 'quidus_color_main', '#424242' );
	$quidus_color_secondary = get_theme_mod( 'quidus_color_secondary', '#515151' );
	$quidus_color_special = get_theme_mod( 'quidus_color_special', '#8bc34a' );
	$quidus_logo_max_width_desktop = get_theme_mod( 'quidus_logo_max_width_desktop' );
	$quidus_logo_max_width_tablet_large = get_theme_mod( 'quidus_logo_max_width_tablet_large' );
	$quidus_logo_max_width_tablet_small = get_theme_mod( 'quidus_logo_max_width_tablet_small' );
	$quidus_logo_max_width_mobile = get_theme_mod( 'quidus_logo_max_width_mobile' );
	$quidus_site_distance_from_left = get_theme_mod( 'quidus_site_distance_from_left' );
	$quidus_color_content_background = get_theme_mod( 'quidus_color_content_background', '#ffffff' );
	$quidus_box_shadow_color = get_theme_mod( 'quidus_box_shadow_color', 'rgba(50, 50, 50, 0.15)' );
	
	/* Global Fonts */
	
	$body_font = get_theme_mod('quidus_body_font', array( 'font-family' => 'Josefin Sans' ));
	$headings_font = get_theme_mod('quidus_header_font', array( 'font-family' => 'Playfair Display' ));
	
	/* Typography */
	
	/* H1 */
	
	$quidus_h1_padding_top = get_theme_mod( 'quidus_h1_typography_padding_top', '0.41025em' );
	$quidus_h1_padding_bottom = get_theme_mod( 'quidus_h1_typography_padding_bottom', '0' );
	$quidus_h1_margin_top = get_theme_mod( 'quidus_h1_typography_margin_top', '0' );
	$quidus_h1_margin_bottom = get_theme_mod( 'quidus_h1_typography_margin_bottom', '0.205125em' );
	$quidus_h1_size = get_theme_mod( 'quidus_h1_size', 100 );
	$h1_typography = get_theme_mod('quidus_h1_typography', array( 'font-family' => 'Playfair Display','font-weight' => '700','line-height' => '1.2308', 'letter-spacing' => '0' ));
	
	/* H2 */
	
	$quidus_h2_padding_top = get_theme_mod( 'quidus_h2_typography_padding_top', '0.5em' );
	$quidus_h2_padding_bottom = get_theme_mod( 'quidus_h2_typography_padding_bottom', '0' );
	$quidus_h2_margin_top = get_theme_mod( 'quidus_h2_typography_margin_top', '0' );
	$quidus_h2_margin_bottom = get_theme_mod( 'quidus_h2_typography_margin_bottom', '0.25em' );
	$quidus_h2_size = get_theme_mod( 'quidus_h2_size', 100 );
	$h2_typography = get_theme_mod('quidus_h2_typography', array( 'font-family' => 'Playfair Display','font-weight' => '700','line-height' => '1.25', 'letter-spacing' => '0' ));
	
	/* H3 */
	
	$quidus_h3_padding_top = get_theme_mod( 'quidus_h3_typography_padding_top', '0.5926em' );
	$quidus_h3_padding_bottom = get_theme_mod( 'quidus_h3_typography_padding_bottom', '0' );
	$quidus_h3_margin_top = get_theme_mod( 'quidus_h3_typography_margin_top', '0' );
	$quidus_h3_margin_bottom = get_theme_mod( 'quidus_h3_typography_margin_bottom', '0.295625em' );
	$quidus_h3_size = get_theme_mod( 'quidus_h3_size', 100 );
	$h3_typography = get_theme_mod('quidus_h3_typography', array( 'font-family' => 'Playfair Display','font-weight' => '700','line-height' => '1.1852', 'letter-spacing' => '0' ));
	
	/* H4 */
	
	$quidus_h4_padding_top = get_theme_mod( 'quidus_h4_typography_padding_top', '0.727275em' );
	$quidus_h4_padding_bottom = get_theme_mod( 'quidus_h4_typography_padding_bottom', '0' );
	$quidus_h4_margin_top = get_theme_mod( 'quidus_h4_typography_margin_top', '0' );
	$quidus_h4_margin_bottom = get_theme_mod( 'quidus_h4_typography_margin_bottom', '0.363625em' );
	$quidus_h4_size = get_theme_mod( 'quidus_h4_size', 100 );
	$h4_typography = get_theme_mod('quidus_h4_typography', array( 'font-family' => 'Playfair Display','font-weight' => '700','line-height' => '1.4545', 'letter-spacing' => '0' ));
	
	/* H5 */
	
	$quidus_h5_padding_top = get_theme_mod( 'quidus_h5_typography_padding_top', '0.8421em' );
	$quidus_h5_padding_bottom = get_theme_mod( 'quidus_h5_typography_padding_bottom', '0' );
	$quidus_h5_margin_top = get_theme_mod( 'quidus_h5_typography_margin_top', '0' );
	$quidus_h5_margin_bottom = get_theme_mod( 'quidus_h5_typography_margin_bottom', '0.42125em' );
	$quidus_h5_size = get_theme_mod( 'quidus_h5_size', 100 );
	$h5_typography = get_theme_mod('quidus_h5_typography', array( 'font-family' => 'Playfair Display','font-weight' => '700','line-height' => '1.2632', 'letter-spacing' => '1' ));
	
	/* H6 */
	
	$quidus_h6_padding_top = get_theme_mod( 'quidus_h6_typography_padding_top', '0.94115em' );
	$quidus_h6_padding_bottom = get_theme_mod( 'quidus_h6_typography_padding_bottom', '0' );
	$quidus_h6_margin_top = get_theme_mod( 'quidus_h6_typography_margin_top', '0' );
	$quidus_h6_margin_bottom = get_theme_mod( 'quidus_h6_typography_margin_bottom', '0.470575em' );
	$quidus_h6_size = get_theme_mod( 'quidus_h6_size', 100 );
	$h6_typography = get_theme_mod('quidus_h6_typography', array( 'font-family' => 'Playfair Display','font-weight' => '700','line-height' => '1.13023', 'letter-spacing' => '1' ));
	
	/* Paragraph */
	
	$quidus_paragraph_padding_top = get_theme_mod( 'quidus_paragraph_typography_padding_top', '0' );
	$quidus_paragraph_padding_bottom = get_theme_mod( 'quidus_paragraph_typography_padding_bottom', '0' );
	$quidus_paragraph_margin_top = get_theme_mod( 'quidus_paragraph_typography_margin_top', '0' );
	$quidus_paragraph_margin_bottom = get_theme_mod( 'quidus_paragraph_typography_margin_bottom', '1em' );
	$quidus_paragraph_size = get_theme_mod( 'quidus_paragraph_size', 100 );
	$paragraph_typography = get_theme_mod('quidus_paragraph_typography', array( 'font-family' => 'Josefin Sans','font-weight' => '400','line-height' => '1.6', 'letter-spacing' => '0' ));
	
	/* Address */
	
	$quidus_address_padding_top = get_theme_mod( 'quidus_address_typography_padding_top', '0' );
	$quidus_address_padding_bottom = get_theme_mod( 'quidus_address_typography_padding_bottom', '0' );
	$quidus_address_margin_top = get_theme_mod( 'quidus_address_typography_margin_top', '0' );
	$quidus_address_margin_bottom = get_theme_mod( 'quidus_address_typography_margin_bottom', '1em' );
	$quidus_address_size = get_theme_mod( 'quidus_address_size', 100 );
	$address_typography = get_theme_mod('quidus_address_typography', array( 'font-family' => 'Josefin Sans','font-weight' => '400','line-height' => '1.6', 'letter-spacing' => '0' ));
	
	/* Content Meta */
	
	$quidus_content_meta_size = get_theme_mod( 'quidus_content_meta_size', 100 );
	$content_meta_typography = get_theme_mod('quidus_content_meta_typography', array( 'font-family' => 'Josefin Sans','font-weight' => '400','line-height' => '1.6', 'letter-spacing' => '0' ));
	
	/* Definition List Title */
	
	$quidus_dt_padding_top = get_theme_mod( 'quidus_dt_typography_padding_top', '0' );
	$quidus_dt_padding_bottom = get_theme_mod( 'quidus_dt_typography_padding_bottom', '0' );
	$quidus_dt_margin_top = get_theme_mod( 'quidus_dt_typography_margin_top', '0' );
	$quidus_dt_margin_bottom = get_theme_mod( 'quidus_dt_typography_margin_bottom', '0' );
	$quidus_dt_size = get_theme_mod( 'quidus_dt_size', 100 );
	$dt_typography = get_theme_mod('quidus_dt_typography', array( 'font-family' => 'Playfair Display','font-weight' => '700','line-height' => '1.6', 'letter-spacing' => '0' ));
	
	/* Definition List Data */
	
	$quidus_dd_padding_top = get_theme_mod( 'quidus_dd_typography_padding_top', '0' );
	$quidus_dd_padding_bottom = get_theme_mod( 'quidus_dd_typography_padding_bottom', '0' );
	$quidus_dd_margin_top = get_theme_mod( 'quidus_dd_typography_margin_top', '0' );
	$quidus_dd_margin_bottom = get_theme_mod( 'quidus_dd_typography_margin_bottom', '1em' );
	$quidus_dd_size = get_theme_mod( 'quidus_dd_size', 100 );
	$dd_typography = get_theme_mod('quidus_dd_typography', array( 'font-family' => 'Josefin Sans','font-weight' => '400','line-height' => '1.6', 'letter-spacing' => '0' ));
	
	/* Unordered & Ordered Lists */

	$quidus_list_size = get_theme_mod( 'quidus_list_size', 100 );
	$list_typography = get_theme_mod('quidus_list_typography', array( 'font-family' => 'Josefin Sans','font-weight' => '400','line-height' => '1.3', 'letter-spacing' => '0' ));
	
	/* Site Description */

	$quidus_site_description_size = get_theme_mod( 'quidus_site_description_size', 100 );
	$site_description_typography = get_theme_mod('quidus_site_description_typography', array( 'font-family' => 'Josefin Sans','font-weight' => '400','line-height' => '1.6', 'letter-spacing' => '0' ));
	
	/* Site Title */

	$quidus_site_title_size = get_theme_mod( 'quidus_site_title_size', 100 );
	$site_title_typography = get_theme_mod('quidus_site_title_typography', array( 'font-family' => 'Playfair Display','font-weight' => '700','line-height' => '1.6', 'letter-spacing' => '0' ));
	
	/* Table Data */
	
	$quidus_td_padding_top = get_theme_mod( 'quidus_td_typography_padding_top', '0.5em' );
	$quidus_td_padding_bottom = get_theme_mod( 'quidus_td_typography_padding_bottom', '0.5em' );
	$quidus_td_padding_right = get_theme_mod( 'quidus_td_typography_padding_right', '0.5em' );
	$quidus_td_padding_left = get_theme_mod( 'quidus_td_typography_padding_left', '0.5em' );
	$quidus_td_size = get_theme_mod( 'quidus_td_size', 100 );
	$td_typography = get_theme_mod('quidus_td_typography', array( 'font-family' => 'Josefin Sans','font-weight' => '400','line-height' => '1.6', 'letter-spacing' => '0' ));
	
	/* Table Header */
	
	$quidus_th_padding_top = get_theme_mod( 'quidus_th_typography_padding_top', '0.5em' );
	$quidus_th_padding_bottom = get_theme_mod( 'quidus_th_typography_padding_bottom', '0.5em' );
	$quidus_th_padding_right = get_theme_mod( 'quidus_th_typography_padding_right', '0.5em' );
	$quidus_th_padding_left = get_theme_mod( 'quidus_th_typography_padding_left', '0.5em' );
	$quidus_th_size = get_theme_mod( 'quidus_th_size', 100 );
	$th_typography = get_theme_mod('quidus_th_typography', array( 'font-family' => 'Playfair Display','font-weight' => '700','line-height' => '1.6', 'letter-spacing' => '0' ));
	
	/* Widget Title */

	$quidus_widget_title_padding_top = get_theme_mod( 'quidus_widget_title_typography_padding_top', '0.8421em' );
	$quidus_widget_title_padding_bottom = get_theme_mod( 'quidus_widget_title_typography_padding_bottom', '0.5em' );
	$quidus_widget_title_margin_top = get_theme_mod( 'quidus_widget_title_typography_margin_top', '0' );
	$quidus_widget_title_margin_bottom = get_theme_mod( 'quidus_widget_title_typography_margin_bottom', '1em' );
	$quidus_widget_title_size = get_theme_mod( 'quidus_widget_title_size', 100 );
	$widget_title_typography = get_theme_mod('quidus_widget_title_typography', array( 'font-family' => 'Playfair Display','font-weight' => '700','line-height' => '1.2632', 'letter-spacing' => '1' ));
	
	/* Blockquote */

	$quidus_blockquote_padding_top = get_theme_mod( 'quidus_blockquote_typography_padding_top', '0' );
	$quidus_blockquote_padding_bottom = get_theme_mod( 'quidus_blockquote_typography_padding_bottom', '0' );
	$quidus_blockquote_padding_right = get_theme_mod( 'quidus_blockquote_typography_padding_right', '0' );
	$quidus_blockquote_padding_left = get_theme_mod( 'quidus_blockquote_typography_padding_left', '0.5em' );
	$quidus_blockquote_margin_top = get_theme_mod( 'quidus_blockquote_typography_margin_top', '0' );
	$quidus_blockquote_margin_bottom = get_theme_mod( 'quidus_blockquote_typography_margin_bottom', '1em' );
	$quidus_blockquote_size = get_theme_mod( 'quidus_blockquote_size', 100 );
	$blockquote_typography = get_theme_mod('quidus_blockquote_typography', array( 'font-family' => 'Josefin Sans','font-weight' => '400','line-height' => '1.6', 'letter-spacing' => '0' ));
	
	/* Menu */

	$menu_typography = get_theme_mod('quidus_menu_typography', array( 'font-family' => 'Josefin Sans','font-weight' => '400' ));
	
	/* Span */
	
	$quidus_span_padding_top = get_theme_mod( 'quidus_span_typography_padding_top', '0' );
	$quidus_span_padding_bottom = get_theme_mod( 'quidus_span_typography_padding_bottom', '0' );
	$quidus_span_margin_top = get_theme_mod( 'quidus_span_typography_margin_top', '0' );
	$quidus_span_margin_bottom = get_theme_mod( 'quidus_span_typography_margin_bottom', '0' );
	$quidus_span_size = get_theme_mod( 'quidus_span_size', 100 );
	$span_typography = get_theme_mod('quidus_span_typography', array( 'font-family' => 'Josefin Sans','font-weight' => '400','line-height' => '1.6', 'letter-spacing' => '0' ));
	
	/* Color */
	
	/* H1 */
	
	$quidus_h1_color = get_theme_mod( 'quidus_color_h1', '#424242' );
	
	/* H2 */

	$quidus_h2_color = get_theme_mod( 'quidus_color_h2', '#424242' );
	
	/* H3 */
	
	$quidus_h3_color = get_theme_mod( 'quidus_color_h3', '#424242' );
	
	/* H4 */
	
	$quidus_h4_color = get_theme_mod( 'quidus_color_h4', '#424242' );
	
	/* H5 */

	$quidus_h5_color = get_theme_mod( 'quidus_color_h5', '#424242' );
	
	/* H6 */

	$quidus_h6_color = get_theme_mod( 'quidus_color_h6', '#424242' );
	
	/* Paragraph */

	$quidus_paragraph_color = get_theme_mod( 'quidus_color_p', '#515151' );
	
	/* Address */

	$quidus_address_color = get_theme_mod( 'quidus_color_address', '#515151' );
	
	/* Content Meta */
	
	$quidus_content_meta_color = get_theme_mod( 'quidus_color_content_meta', '#424242' );
	
	/* Definition List Title */

	$quidus_dt_color = get_theme_mod( 'quidus_color_dt', '#424242' );
	
	/* Definition List Data */

	$quidus_dd_color = get_theme_mod( 'quidus_color_dd', '#515151' );
	
	/* Unordered & Ordered Lists */

	$quidus_list_color = get_theme_mod( 'quidus_color_list', '#424242' );
	
	/* Site Description */

	$quidus_site_description_color = get_theme_mod( 'quidus_color_site_description', '#515151' );
	
	/* Site Title */

	$quidus_site_title_color = get_theme_mod( 'quidus_color_site_title', '#424242' );
	
	/* Table Data */
	
	$quidus_td_color = get_theme_mod( 'quidus_color_td', '#515151' );
	
	/* Table Header */

	$quidus_th_color = get_theme_mod( 'quidus_color_th', '#424242' );
	
	/* Widget Title */

	$quidus_widget_title_color = get_theme_mod( 'quidus_color_widget_title', '#424242' );
	
	/* Blockquote */

	$quidus_blockquote_color = get_theme_mod( 'quidus_color_blockquote', '#424242' );
	
	/* Menu */
	
	$quidus_menu_color = get_theme_mod( 'quidus_color_menu', '#424242' );
	
	/* Span */

	$quidus_span_color = get_theme_mod( 'quidus_color_span', '#424242' );
	
	/* Link */

	$quidus_a_color = get_theme_mod( 'quidus_color_a', '#424242' );
	
	
?>

<style type="text/css">

body {
background-color: <?php echo esc_attr($quidus_color_background); ?> !important;
}

.dropcap,
h1,
h2,
h3,
h4,
h5,
h6,
blockquote,
blockquote cite,
blockquote small,
.post-password-form label,
a,
.secondary-navigation a:hover,
.secondary-navigation a:focus,
.author-social,
.author-social span,
.my-social span,
.secondary-toggle:before,
.widget-title,
.widget_calendar tbody a,
.widget a,
.comment-author,
.comment-form label,
.quidus_content_link,
.quidus_content_link:after,
.comment-metadata a,
.pingback .edit-link a,
.comment-list .reply a,
.entry-footer a,
.image-navigation a,
.comment-navigation a,
.posted-on a,
.byline a,
.cat-links a,
.tags-links a,
.comments-link a,
.entry-format a,
.full-size-link a,
th,
dt,
.post-mark,
.video-mark,
label,
.woocommerce .woocommerce-breadcrumb a,
.woocommerce #reviews #comments ol.commentlist li .meta strong,
.menu-holder .my-social span,
.menu-holder .main-navigation a,
.menu-holder .toggle-search, 
.menu-holder .menu-cart-wrapper .cart-contents,
.dropdown-toggle:after,
.menu-cart-wrapper .cart-contents:focus
{
color:<?php echo esc_attr($quidus_color_main); ?>;
}

.main-navigation li,
.footer-link,
#yith-wcwl-message
{
color:<?php echo esc_attr($quidus_color_main); ?> !important;
}

.entry-content .quidus-link-wrapper {
border-left:3px solid <?php echo esc_attr($quidus_color_main); ?>;
}

.search-expand-inner .search-form .search-field {
border:3px solid <?php echo esc_attr($quidus_color_main); ?>;
}

button,
input[type="button"],
input[type="reset"],
input[type="submit"],
.pagination,
.comment-list .reply a,
.pagination,
.page-links a,
.widget_calendar tbody a,
.tagcloud a,
.woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt, 
.woocommerce button.button.alt, 
.woocommerce input.button.alt,
.woocommerce nav.woocommerce-pagination ul li a, 
.woocommerce nav.woocommerce-pagination ul li span,
.woocommerce div.product .woocommerce-tabs ul.tabs li,
.woocommerce #respond input#submit,
.woocommerce a.button,
.woocommerce button.button,
.woocommerce input.button,
.woocommerce-shipping-calculator > p a,
.woocommerce .widget_price_filter .ui-slider .ui-slider-range
{
	background-color: <?php echo esc_attr($quidus_color_main); ?>;
}

.page-links a,
.comment-list .reply a,
.search-submit {
background-color: <?php echo esc_attr($quidus_color_main); ?> !important;
}

body,
button,
input,
select,
textarea,
input,
textarea,
.post-navigation .meta-nav,
.image-navigation,
.comment-navigation,
.widget,
.author-heading,
.entry-footer,
.taxonomy-description,
.page-links > .page-links-title,
.entry-caption,
.no-comments,
.comment-notes,
.comment-awaiting-moderation,
.logged-in-as,
.form-allowed-tags,
.wp-caption-text,
.gallery-caption,
.site-info,
.widget input[type="text"],
.widget input[type="email"],
.widget input[type="url"],
.widget input[type="password"],
.widget input[type="search"],
.widget textarea,
.site-description,
.site-info a,
.site-info a:hover,
.posted-on:before, 
.byline:before,
.cat-links:before,
.tags-links:before,
.comments-link:before,
.entry-format:before,
.edit-link:before,
.full-size-link:before,
.secondary-navigation .menu-item-description,
dd,
.woocommerce .woocommerce-breadcrumb,
.woocommerce #reviews #comments ol.commentlist li .meta time,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
.woocommerce small.note,
.select2-container .select2-choice,
.select2-container .select2-choice:hover,
.woocommerce-checkout #payment div.payment_box,
.woocommerce-cart .cart-collaterals .cart_totals .discount td,
.woocommerce #reviews #comments ol.commentlist li .meta,
.woocommerce #reviews h2 small,
.woocommerce #reviews h2 small a,
.woocommerce-cart .cart-collaterals .cart_totals p small,
.woocommerce-cart .cart-collaterals .cart_totals table small,
.woocommerce-checkout #payment div.payment_box span.help
{
	color: <?php echo esc_attr($quidus_color_secondary); ?>;
}

.entry-content p,
.site-description,
::-webkit-input-placeholder,
:-moz-placeholder,
::-moz-placeholder,
:-ms-input-placeholder,
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
textarea:focus,
pre 

{
	color: <?php echo esc_attr($quidus_color_secondary); ?> !important;
}

.highlight,
.quidus-content-quote-icon
a:hover,
a:focus,
.posted-on a:hover,
.posted-on span:hover,
.byline a:hover,
.cat-links a:hover,
.tags-links a:hover,
.comments-link a:hover,
.entry-format a:hover,
.full-size-link a:hover,
.edit-link a:hover,
.bypostauthor > article .fn,
.comment-metadata a:hover,
.comment-metadata a:focus,
.pingback .edit-link a:hover,
.pingback .edit-link a:focus,
.widget a:hover,
.entry-content a:hover,
.menu-holder .site-title a:hover,
.author-social span:hover,
.footer-social span:hover,
.my-social span:hover,
.woocommerce .woocommerce-breadcrumb a:hover,
.woocommerce .woocommerce-breadcrumb a:focus,
.woocommerce div.product p.price,
.woocommerce div.product span.price,
.product_meta .tagged_as a:hover,
.product_meta .tagged_as a:focus,
.product_meta .posted_in a:hover,
.product_meta .posted_in a:focus,
.woocommerce-review-link:hover,
.woocommerce-review-link:focus,
.woocommerce .woocommerce-message:before,
.woocommerce ul.products li.product .price,
.woocommerce div.product .stock,
.woocommerce div.product .out-of-stock,
.woocommerce .woocommerce-error:before,
.woocommerce .woocommerce-info:before,
.woocommerce .widget_layered_nav ul li.chosen a:before,
.woocommerce .widget_layered_nav_filters ul li a:before,
mark,
ins,
.wishlist_table tr td.product-stock-status span.wishlist-in-stock,
.wishlist_table tr td.product-stock-status span.wishlist-out-of-stock,
.post-navigation .post-title:hover
{
	color: <?php echo esc_attr($quidus_color_special); ?>;
}

button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover,
button:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus,
.secondary-navigation ul,
.secondary-navigation li,
.pagination:hover,
.widget_calendar tbody a:hover,
.widget_calendar tbody a:focus,
.video-mark,
.post-mark,
.comment-list .reply a:hover,
.tagcloud a:hover,
.woocommerce span.onsale,
.woocommerce #respond input#submit.alt:hover,
.woocommerce a.button.alt:hover,
.woocommerce button.button.alt:hover,
.woocommerce input.button.alt:hover,
.woocommerce #respond input#submit.alt:focus,
.woocommerce a.button.alt:focus,
.woocommerce button.button.alt:focus,
.woocommerce input.button.alt:focus,
.woocommerce nav.woocommerce-pagination ul li a:focus,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce div.product .woocommerce-tabs ul.tabs li:hover,
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover,
.woocommerce button.button:hover,
.woocommerce input.button:hover,
.woocommerce-shipping-calculator > p a:hover,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
.header-menu-cart-count
{
	background:<?php echo esc_attr($quidus_color_special); ?>;
}

.page-links a:hover,
.page-links a:focus,
.comment-list .reply a:hover,
.search-submit:hover,
.woocommerce a.remove:hover {
background:<?php echo esc_attr($quidus_color_special); ?> !important;
}

blockquote 
{
	border-left:3px solid <?php echo esc_attr($quidus_color_special); ?>;
}

.image-navigation .nav-previous:not(:empty) a:hover,
.image-navigation .nav-next:not(:empty) a:hover,
.footer-link:hover,
h1 a:hover,
h2 a:hover,
h3 a:hover,
h4 a:hover,
h5 a:hover,
h6 a:hover,
.sticky-post,
.woocommerce a.remove {
	color:<?php echo esc_attr($quidus_color_special); ?> !important;
}

.woocommerce .woocommerce-message,
.woocommerce .woocommerce-error,
.woocommerce .woocommerce-info {
    border-top-color: <?php echo esc_attr($quidus_color_special); ?> !important;
}

.widget-title {
	border-bottom:3px solid <?php echo esc_attr($quidus_color_special); ?>;
}

body,
button,
input,
select,
textarea,
.main-navigation ul {
font-family: <?php echo esc_attr($body_font["font-family"]); ?>;
}

h1,
h2,
h3,
h4,
h5,
h6,
.comment-form label,
dt,
th,
.comment-navigation,
.comment-author,
.sticky-post,
.site-title,
.tptn_title {
font-family: <?php echo esc_attr($headings_font["font-family"]); ?>;
}

@media screen and (min-width: 1105px) {

.site-content {

	<?php if ($cwdc == 0) : ?>
	width: <?php echo esc_attr($cwd) / 100; ?>%;
	<?php  $tw += $cwd;;
	else : ?>
	width: <?php echo esc_attr($cwdc) / 100; ?>%;
	<?php $tw += $cwdc;;
	endif; ?>
	
}

.left-sidebar-wrapper {
	
	<?php if ($lswd == 0) : ?>
	width: <?php echo esc_attr($swd) / 100; ?>%;
	<?php if ($sl == '3 Columns - Sidebars Align Left' or $sl == '3 Columns - Sidebars Align Right' or $sl == '2 Columns - Left Sidebar' or $sl == '3 Columns') { $tw += $swd;};
	else : ?>
	width: <?php echo esc_attr($lswd) / 100; ?>%;
	<?php if ($sl == '3 Columns - Sidebars Align Left' or $sl == '3 Columns - Sidebars Align Right' or $sl == '2 Columns - Left Sidebar' or $sl == '3 Columns') { $tw += $lswd;};
	endif; ?>
	
}

.right-sidebar-wrapper {
	
	<?php if ($rswdc == 0) : ?>
	width: <?php echo esc_attr($rswd) / 100; ?>%;
	<?php if ($sl == '3 Columns - Sidebars Align Left' or $sl == '3 Columns - Sidebars Align Right' or $sl == '2 Columns - Right Sidebar' or $sl == '3 Columns') { $tw += $rswd;};
	else : ?>
	width: <?php echo esc_attr($rswdc) / 100; ?>%;
	<?php if ($sl == '3 Columns - Sidebars Align Left' or $sl == '3 Columns - Sidebars Align Right' or $sl == '2 Columns - Right Sidebar' or $sl == '3 Columns') { $tw += $rswdc;};
	endif; ?>
	
}

<?php

if ($tw > 10000 and ($sl == '3 Columns' or $sl == '3 Columns - Sidebars Align Left' or $sl == '3 Columns - Sidebars Align Right')) : ?>

.site-content {
	width: 56%;
}

.left-sidebar-wrapper {
	width: 22%;
}

.right-sidebar-wrapper {
	width: 22%;
}

<?php endif; if ($tw > 10000 and $sl == '2 Columns - Left Sidebar') : ?>

.site-content {
	width: 67%;
}

.left-sidebar-wrapper {
	width: 33%;
}

<?php endif; if ($tw > 10000 and $sl == '2 Columns - Right Sidebar') : ?>

.site-content {
	width: 67%;
}

.right-sidebar-wrapper {
	width: 33%;
}

<?php endif; ?>

}

<?php if ( $sl == '1 Column' and get_theme_mod('quidus_switch_to_centered_layout', true) == true) : ?>

.site-content {
    float: none;
	margin:0 auto;
}

<?php endif; ?>

@media screen and (min-width: 955px) {

.footer-widgets-wrapper-inner {
	max-width: <?php echo esc_attr($fomw); ?>;
	margin:0 auto;
	padding:0 0.75em;
}

}

@media screen and (min-width: 955px) and (max-width: 1105px) {

.right-sidebar-wrapper {
   width: 70%;
   padding: 1.5em 0.75em 0 !important;
   float:right;
}

.single-product .right-sidebar-wrapper {
   padding: 1.5em 0.75em 0 !important;
}

.right-sidebar-wrap {
    padding-top: 3em;
    margin-top: 0;
}

.site-content {
	width: 70%;
}

.left-sidebar-wrapper {
	width: 30%;
}

.site {
    padding-right: 0.75em;
}

<?php if ( $sl == '2 Columns - Right Sidebar') : ?>

.site-content {
	width: 70%;
}

.right-sidebar-wrapper {
   width: 30%;
   padding: 6em 0.75em 0 !important;
   float:right;
}

<?php endif; ?>

<?php if ( $sl == '3 Columns - Sidebars Align Left') : ?>

.site-content {
    padding: 1.5em 0px 0px;
}

.right-sidebar-wrapper {
    padding: 6em 0.75em 0px !important;
}

<?php endif; ?>

<?php if ( $sl == '3 Columns - Sidebars Align Right') : ?>

.site-content {
    padding: 1.5em 0px 0px;
	float:left;
}

.right-sidebar-wrapper {
	width: 70%;
   padding: 1.5em 0.75em 0 !important;
   float:left;
}

.left-sidebar-wrapper {
    width: 30%;
	float:right;
}

<?php endif; ?>

}

<?php if ( get_theme_mod('quidus_featured_image_single_disable') == 1 ) : ?>

.single-post .post-thumbnail img {
display:none;
}
.single-post .hentry.has-post-thumbnail .entry-header {
    padding: 3em 1.5em 1em !important;
}


@media screen and (min-width: 480px) and (max-width: 768px) {
  .single-post .hentry.has-post-thumbnail .entry-header {
    padding:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "2em 1.5em 1em"; else : echo "3em 1.5em 1em"; endif; ?> !important;
}
	
}

@media screen and (max-width: 480px) {
  .single-post .hentry.has-post-thumbnail .entry-header {
	padding:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "1em"; else : echo "3em 1em 1em"; endif; ?> !important;
}
}
<?php endif; ?>

.site { max-width: <?php echo esc_attr($wemw); ?>; }

<?php if (get_theme_mod('quidus_a_color_enable') == true ) : ?>

a,
.widget a,
.widget_calendar tbody a,
.comment-metadata a,
.pingback .edit-link a,
.comment-list .reply a,
.entry-footer a,
.image-navigation a,
.comment-navigation a,
.posted-on a,
.byline a,
.cat-links a,
.tags-links a,
.comments-link a,
.entry-format a,
.full-size-link a,
.woocommerce .woocommerce-breadcrumb a,
.menu-holder .main-navigation a {
color: <?php echo esc_attr($quidus_a_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h1_typography_enable') == true ) : ?>

h1 {

padding-top: <?php echo esc_attr($quidus_h1_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_h1_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_h1_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_h1_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_h1_size) * 0.039)); ?>rem;
font-family: <?php echo esc_attr($h1_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($h1_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($h1_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($h1_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h1_color_enable') == true ) : ?>

h1 {
color: <?php echo esc_attr($quidus_h1_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h2_typography_enable') == true ) : ?>

h2 {
padding-top: <?php echo esc_attr($quidus_h2_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_h2_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_h2_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_h2_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_h2_size) * 0.032)); ?>rem;
font-family: <?php echo esc_attr($h2_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($h2_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($h2_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($h2_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h2_color_enable') == true ) : ?>

h2 {
color: <?php echo esc_attr($quidus_h2_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h3_typography_enable') == true ) : ?>

h3 {
padding-top: <?php echo esc_attr($quidus_h3_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_h3_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_h3_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_h3_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_h3_size) * 0.027)); ?>rem;
font-family: <?php echo esc_attr($h3_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($h3_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($h3_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($h3_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h3_color_enable') == true ) : ?>

h3 {
color: <?php echo esc_attr($quidus_h3_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h4_typography_enable') == true ) : ?>

h4 {
padding-top: <?php echo esc_attr($quidus_h4_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_h4_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_h4_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_h4_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_h4_size) * 0.022)); ?>rem;
font-family: <?php echo esc_attr($h4_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($h4_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($h4_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($h4_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h4_color_enable') == true ) : ?>

h4 {
color: <?php echo esc_attr($quidus_h4_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h5_color_enable') == true ) : ?>

h5,
.tptn_link  {
padding-top: <?php echo esc_attr($quidus_h5_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_h5_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_h5_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_h5_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_h5_size) * 0.019)); ?>rem;
font-family: <?php echo esc_attr($h5_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($h5_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($h5_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($h5_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h5_color_enable') == true ) : ?>

h5 {
color: <?php echo esc_attr($quidus_h5_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h6_typography_enable') == true ) : ?>

h6 {
padding-top: <?php echo esc_attr($quidus_h6_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_h6_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_h6_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_h6_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_h6_size) * 0.017)); ?>rem;
font-family: <?php echo esc_attr($h6_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($h6_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($h6_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($h6_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h6_color_enable') == true ) : ?>

h6 {
color: <?php echo esc_attr($quidus_h6_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_widget_title_typography_enable') == true ) : ?>

.widget-title {
padding-top: <?php echo esc_attr($quidus_widget_title_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_widget_title_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_widget_title_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_widget_title_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_widget_title_size) * 0.019)); ?>rem;
font-family: <?php echo esc_attr($widget_title_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($widget_title_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($widget_title_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($widget_title_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_widget_title_color_enable') == true ) : ?>

.widget-title {
color: <?php echo esc_attr($quidus_widget_title_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_paragraph_typography_enable') == true ) : ?>

p {
padding-top: <?php echo esc_attr($quidus_paragraph_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_paragraph_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_paragraph_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_paragraph_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_paragraph_size) * 0.016)); ?>rem;
font-family: <?php echo esc_attr($paragraph_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($paragraph_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($paragraph_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($paragraph_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_p_color_enable') == true ) : ?>

p {
color: <?php echo esc_attr($quidus_paragraph_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_site_title_typography_enable') == true ) : ?>

.site-title {
font-size: <?php echo esc_attr((string)(intval($quidus_site_title_size) * 0.039)); ?>rem;
font-family: <?php echo esc_attr($site_title_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($site_title_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($site_title_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($site_title_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_site_description_typography_enable') == true ) : ?>

.site-description {
font-size: <?php echo esc_attr((string)(intval($quidus_site_description_size) * 0.016)); ?>rem;
font-family: <?php echo esc_attr($site_description_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($site_description_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($site_description_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($site_description_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_site_description_color_enable') == true ) : ?>

.site-description {
color: <?php echo esc_attr($quidus_site_description_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_content_meta_typography_enable') == true ) : ?>

.posted-on:before, 
.byline:before, 
.cat-links:before, 
.tags-links:before, 
.comments-link:before, 
.entry-format:before, 
.edit-link:before, 
.full-size-link:before {
font-size: <?php echo esc_attr((string)(intval($quidus_content_meta_size) * 0.016)); ?>rem;
font-weight: <?php echo esc_attr($content_meta_typography["font-weight"]); ?>;
letter-spacing: <?php echo esc_attr($content_meta_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_content_meta_color_enable') == true ) : ?>

.posted-on,
.entry-footer a,
.byline,
.byline .author,
.cat-links,
.tags-links, 
.comments-link, 
.entry-format, 
.full-size-link,
.edit-link,
.posted-on:before, 
.byline:before, 
.cat-links:before, 
.tags-links:before, 
.comments-link:before, 
.entry-format:before, 
.edit-link:before, 
.full-size-link:before {
color: <?php echo esc_attr($quidus_content_meta_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_content_meta_typography_enable') == true ) : ?>

.posted-on,
.byline,
.byline .author,
.cat-links,
.tags-links, 
.comments-link, 
.entry-format, 
.full-size-link,
.edit-link {
font-size: <?php echo esc_attr((string)(intval($quidus_content_meta_size) * 0.016)); ?>rem;
font-family: <?php echo esc_attr($content_meta_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($content_meta_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($content_meta_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($content_meta_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_list_typography_enable') == true ) : ?>

ul,
ol,
.woocommerce ul.products li.product,
.woocommerce-page ul.products li.product,
.woocommerce .order_details li,
.woocommerce .order_details li strong {
font-size: <?php echo esc_attr((string)(intval($quidus_list_size) * 0.016)); ?>rem;
font-family: <?php echo esc_attr($list_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($list_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($list_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($list_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_list_color_enable') == true ) : ?>

ul,
ol,
ul li,
ol li {
color: <?php echo esc_attr($quidus_list_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_td_typography_enable') == true ) : ?>

td {
padding-top: <?php echo esc_attr($quidus_td_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_td_padding_bottom); ?>;
padding-right: <?php echo esc_attr($quidus_td_padding_right); ?>;
padding-left: <?php echo esc_attr($quidus_td_padding_left); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_td_size) * 0.016)); ?>rem;
font-family: <?php echo esc_attr($td_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($td_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($td_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($td_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_td_color_enable') == true ) : ?>

td {
color: <?php echo esc_attr($quidus_td_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_th_typography_enable') == true ) : ?>

th {
padding-top: <?php echo esc_attr($quidus_th_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_th_padding_bottom); ?>;
padding-right: <?php echo esc_attr($quidus_th_padding_right); ?>;
padding-left: <?php echo esc_attr($quidus_th_padding_left); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_th_size) * 0.016)); ?>rem;
font-family: <?php echo esc_attr($th_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($th_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($th_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($th_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_th_color_enable') == true ) : ?>

th {
color: <?php echo esc_attr($quidus_th_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_dd_typography_enable') == true ) : ?>

dd {
padding-top: <?php echo esc_attr($quidus_dd_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_dd_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_dd_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_dd_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_dd_size) * 0.016)); ?>rem;
font-family: <?php echo esc_attr($dd_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($dd_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($dd_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($dd_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_dd_color_enable') == true ) : ?>

dd {
color: <?php echo esc_attr($quidus_dd_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_dt_typography_enable') == true ) : ?>

dt {
padding-top: <?php echo esc_attr($quidus_dt_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_dt_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_dt_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_dt_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_dt_size) * 0.016)); ?>rem;
font-family: <?php echo esc_attr($dt_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($dt_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($dt_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($dt_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_dt_color_enable') == true ) : ?>

dt {
color: <?php echo esc_attr($quidus_dt_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_address_typography_enable') == true ) : ?>

address {
padding-top: <?php echo esc_attr($quidus_address_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_address_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_address_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_address_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_address_size) * 0.016)); ?>rem;
font-family: <?php echo esc_attr($address_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($address_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($address_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($address_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_address_color_enable') == true ) : ?>

address {
color: <?php echo esc_attr($quidus_address_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_blockquote_typography_enable') == true ) : ?>

blockquote {
padding: <?php echo esc_attr($quidus_blockquote_padding_top); ?> <?php echo esc_attr($quidus_blockquote_padding_right); ?> <?php echo esc_attr($quidus_blockquote_padding_bottom); ?> <?php echo esc_attr($quidus_blockquote_padding_left); ?>;
margin-top: <?php echo esc_attr($quidus_blockquote_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_blockquote_margin_bottom); ?>;
font-family: <?php echo esc_attr($blockquote_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($blockquote_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($blockquote_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($blockquote_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_blockquote_typography_enable') == true ) : ?>

blockquote p {
font-size: <?php echo esc_attr((string)(intval($quidus_blockquote_size) * 0.016)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_blockquote_color_enable') == true ) : ?>

blockquote p {
color: <?php echo esc_attr($quidus_blockquote_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_menu_typography_enable') == true ) : ?>

.main-navigation ul {
font-family: <?php echo esc_attr($menu_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($menu_typography["font-weight"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_menu_color_enable') == true ) : ?>

.secondary-navigation li a,
.menu-holder .main-navigation a {
color: <?php echo esc_attr($quidus_menu_color); ?>
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_span_typography_enable') == true ) : ?>

span {
padding-top: <?php echo esc_attr($quidus_span_padding_top); ?>;
padding-bottom: <?php echo esc_attr($quidus_span_padding_bottom); ?>;
margin-top: <?php echo esc_attr($quidus_span_margin_top); ?>;
margin-bottom: <?php echo esc_attr($quidus_span_margin_bottom); ?>;
font-size: <?php echo esc_attr((string)(intval($quidus_span_size) * 0.016)); ?>rem;
font-family: <?php echo esc_attr($span_typography["font-family"]); ?>;
font-weight: <?php echo esc_attr($span_typography["font-weight"]); ?>;
line-height: <?php echo esc_attr($span_typography["line-height"]); ?>;
letter-spacing: <?php echo esc_attr($span_typography["letter-spacing"]); ?>;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_span_color_enable') == true ) : ?>

span {
color: <?php echo esc_attr($quidus_span_color); ?>
}

<?php endif; ?>

@media screen and (min-width: 480px) and (max-width: 768px) {

<?php if (get_theme_mod('quidus_h1_typography_enable') == true ) : ?>

h1 {
font-size: <?php echo esc_attr((string)(intval($quidus_h1_size) * 0.032)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h2_typography_enable') == true ) : ?>

h2 {
font-size: <?php echo esc_attr((string)(intval($quidus_h2_size) * 0.027)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h3_typography_enable') == true ) : ?>

h3 {
font-size: <?php echo esc_attr((string)(intval($quidus_h3_size) * 0.022)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h4_typography_enable') == true ) : ?>

h4 {
font-size: <?php echo esc_attr((string)(intval($quidus_h4_size) * 0.019)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h5_typography_enable') == true ) : ?>

h5,
.tptn_link  {
font-size: <?php echo esc_attr((string)(intval($quidus_h5_size) * 0.017)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h6_typography_enable') == true ) : ?>

h6 {
font-size: <?php echo esc_attr((string)(intval($quidus_h6_size) * 0.015)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_widget_title_typography_enable') == true ) : ?>

.widget-title {
font-size: <?php echo esc_attr((string)(intval($quidus_widget_title_size) * 0.017)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_site_title_typography_enable') == true ) : ?>

.site-title {
font-size: <?php echo esc_attr((string)(intval($quidus_site_title_size) * 0.032)); ?>rem;
}

<?php endif; ?>

}

@media screen and (max-width: 480px) {

<?php if (get_theme_mod('quidus_h1_typography_enable') == true ) : ?>

h1 {
font-size: <?php echo esc_attr((string)(intval($quidus_h1_size) * 0.027)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_site_title_typography_enable') == true ) : ?>

.site-title {
font-size: <?php echo esc_attr((string)(intval($quidus_site_title_size) * 0.027)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_site_description_typography_enable') == true ) : ?>

.site-description {
font-size: <?php echo esc_attr((string)(intval($quidus_site_description_size) * 0.014)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h2_typography_enable') == true ) : ?>

h2 {
font-size: <?php echo esc_attr((string)(intval($quidus_h2_size) * 0.022)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h3_typography_enable') == true ) : ?>

h3 {
font-size: <?php echo esc_attr((string)(intval($quidus_h3_size) * 0.021)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h4_typography_enable') == true ) : ?>

h4 {
font-size: <?php echo esc_attr((string)(intval($quidus_h4_size) * 0.019)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h5_typography_enable') == true ) : ?>

h5,
.tptn_link  {
font-size: <?php echo esc_attr((string)(intval($quidus_h5_size) * 0.017)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_h6_typography_enable') == true ) : ?>

h6 {
font-size: <?php echo esc_attr((string)(intval($quidus_h6_size) * 0.015)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_widget_title_typography_enable') == true ) : ?>

.widget-title {
font-size: <?php echo esc_attr((string)(intval($quidus_widget_title_size) * 0.017)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_paragraph_typography_enable') == true ) : ?>

p {
font-size: <?php echo esc_attr((string)(intval($quidus_paragraph_size) * 0.014)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_content_meta_typography_enable') == true ) : ?>

.posted-on,
.byline,
.byline .author,
.cat-links,
.tags-links, 
.comments-link, 
.entry-format, 
.full-size-link,
.edit-link,
.posted-on:before, 
.byline:before, 
.cat-links:before, 
.tags-links:before, 
.comments-link:before, 
.entry-format:before, 
.edit-link:before, 
.full-size-link:before {
font-size: <?php echo esc_attr((string)(intval($quidus_content_meta_size) * 0.014)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_list_typography_enable') == true ) : ?>

ul,
ol,
.woocommerce ul.products li.product,
.woocommerce-page ul.products li.product,
.woocommerce .order_details li,
.woocommerce .order_details li strong {
font-size: <?php echo esc_attr((string)(intval($quidus_list_font_size) * 0.014)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_td_typography_enable') == true ) : ?>

td {
font-size: <?php echo esc_attr((string)(intval($quidus_table_font_size) * 0.014)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_th_typography_enable') == true ) : ?>

th {
font-size: <?php echo esc_attr((string)(intval($quidus_table_font_size) * 0.014)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_dd_typography_enable') == true ) : ?>

dd {
font-size: <?php echo esc_attr((string)(intval($quidus_dd_size) * 0.014)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_dt_typography_enable') == true ) : ?>

dt {
font-size: <?php echo esc_attr((string)(intval($quidus_dt_size) * 0.014)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_address_typography_enable') == true ) : ?>

address {
font-size: <?php echo esc_attr((string)(intval($quidus_address_size) * 0.014)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_pre_typography_enable') == true ) : ?>

pre {
font-size: <?php echo esc_attr((string)(intval($quidus_pre_font_size) * 0.014)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_blockquote_typography_enable') == true ) : ?>

blockquote p {
font-size: <?php echo esc_attr((string)(intval($quidus_blockquote_size) * 0.014)); ?>rem;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_span_typography_enable') == true ) : ?>

span {
font-size: <?php echo esc_attr((string)(intval($quidus_span_size) * 0.014)); ?>rem;
}

<?php endif; ?>

}

.footer-widgets-wrapper {
text-align:left;
}

<?php if ( ( is_active_sidebar( 'footer-widget-1' ) ) or ( is_active_sidebar( 'footer-widget-2' ) ) or ( is_active_sidebar( 'footer-widget-3' ) ) or ( is_active_sidebar( 'footer-widget-4' ) )) : ?>

.footer-widget-one,
.footer-widget-two,
.footer-widget-three,
.footer-widget-fourth  {
width: <?php if ( $fwl == '2 Columns' ) : echo "50%"; elseif ( $fwl == '3 Columns' ) : echo "33.333%"; else : echo "25%"; endif; ?>
}

<?php endif; ?>

<?php if ( ($fwl == '2 Columns' or $fwl == '3 Columns' or $fwl == '4 Columns') and (( is_active_sidebar( 'footer-widget-1' ) ) or ( is_active_sidebar( 'footer-widget-2' ) ) or ( is_active_sidebar( 'footer-widget-3' ) ) or ( is_active_sidebar( 'footer-widget-4' ) ))) : ?>

.footer-widgets-wrapper {
padding:1.5em 0;
}

.footer-widget-one,
.footer-widget-two,
.footer-widget-three,
.footer-widget-fourth  {
padding:1.5em 0;
float:left;
}

.footer-widgets-wrapper .widget {
    -moz-hyphens: auto;
    padding: 0 0 0 1.5em;
    width: 100%;
    word-wrap: break-word;
    margin: 0px;
}

.footer-widgets-wrapper .widget {
    padding: 0 0.75em;
}

.footer-widget-one .widget-area .widget,
.footer-widget-two .widget-area .widget,
.footer-widget-three .widget-area .widget,
.footer-widget-fourth .widget-area .widget	{
	padding-bottom:3em;
}

.footer-widget-one .widget-area .widget:last-child, 
.footer-widget-two .widget-area .widget:last-child, 
.footer-widget-three .widget-area .widget:last-child,
.footer-widget-fourth .widget-area .widget:last-child 	{
	padding-bottom:0;
}

@media screen and (min-width: 768px) and (max-width: 955px) {

	.footer-widgets-wrapper {
	margin:0 1.5em 1.5em;
	padding:1.5em 0;
	}
	
	<?php if ( $sl == '1 Column' and (( is_active_sidebar( 'content-widget-1' ) ) or ( is_active_sidebar( 'content-widget-2' ) ) or ( is_active_sidebar( 'content-widget-3' ) ))) : ?>
	
	.footer-widgets-wrapper {
	margin: 1.5em;
	}
	
	<?php endif; ?>

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0em;
	}
	
	.footer-widget-one,
	.footer-widget-two,
	.footer-widget-three,
	.footer-widget-fourth  {
		padding:1.5em 0;
		width:100%;
	}

	.footer-widgets-wrapper .widget {
		-moz-hyphens: auto;
		padding: 0;
		width: 40%;
		word-wrap: break-word;
		margin:0 auto;
	}
	
	.footer-widget-one .widget-area .widget,
	.footer-widget-two .widget-area .widget,
	.footer-widget-three .widget-area .widget,
	.footer-widget-fourth .widget-area .widget	{
		padding-bottom:3em;
	}

	.footer-widget-one .widget-area .widget:last-child, 
	.footer-widget-two .widget-area .widget:last-child, 
	.footer-widget-three .widget-area .widget:last-child,
	.footer-widget-fourth .widget-area .widget:last-child 	{
		padding-bottom:0;
	}

}

@media screen and (min-width: 480px) and (max-width: 768px) {

	.footer-widgets-wrapper {
	margin:0 1.5em 1.5em;
	padding:1.5em 0;
	}

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0em;
	}
	
	<?php if ( $sl == '1 Column' and (( is_active_sidebar( 'content-widget-1' ) ) or ( is_active_sidebar( 'content-widget-2' ) ) or ( is_active_sidebar( 'content-widget-3' ) ))) : ?>
	
	.footer-widgets-wrapper {
	margin: 1.5em;
	}
	
	<?php endif; ?>
	
	.footer-widget-one,
	.footer-widget-two,
	.footer-widget-three,
	.footer-widget-fourth  {
		padding:1em 0;
		width:100%;
	}

	.footer-widgets-wrapper .widget {
		-moz-hyphens: auto;
		padding: 0;
		width: 60%;
		word-wrap: break-word;
		margin:0 auto;
	}
	
	.footer-widget-one .widget-area .widget,
	.footer-widget-two .widget-area .widget,
	.footer-widget-three .widget-area .widget,
	.footer-widget-fourth .widget-area .widget	{
		padding-bottom:2em;
	}

	.footer-widget-one .widget-area .widget:last-child, 
	.footer-widget-two .widget-area .widget:last-child, 
	.footer-widget-three .widget-area .widget:last-child,
	.footer-widget-fourth .widget-area .widget:last-child 	{
		padding-bottom:0;
	}
	
}

@media screen and (max-width: 480px) {
	
	.footer-widgets-wrapper {
	margin:0 1em 1em;
	padding:1em;
	}
	
	<?php if ( $sl == '1 Column' and (( is_active_sidebar( 'content-widget-1' ) ) or ( is_active_sidebar( 'content-widget-2' ) ) or ( is_active_sidebar( 'content-widget-3' ) ))) : ?>
	
	.footer-widgets-wrapper {
	margin: 1em;
	}
	
	<?php endif; ?>

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0em;
	}
	
	.footer-widget-one,
	.footer-widget-two,
	.footer-widget-three,
	.footer-widget-fourth  {
		padding:1em 0;
		width:100%;
	}

	.footer-widgets-wrapper .widget {
		-moz-hyphens: auto;
		padding: 0;
		width: 100%;
		word-wrap: break-word;
		margin:0 auto;
	}
	
	.footer-widget-one .widget-area .widget,
	.footer-widget-two .widget-area .widget,
	.footer-widget-three .widget-area .widget,
	.footer-widget-fourth .widget-area .widget	{
		padding-bottom:2em;
	}

	.footer-widget-one .widget-area .widget:last-child, 
	.footer-widget-two .widget-area .widget:last-child, 
	.footer-widget-three .widget-area .widget:last-child,
	.footer-widget-fourth .widget-area .widget:last-child 	{
		padding-bottom:0;
	}
	
}


<?php endif; ?>

<?php if ( $cwl == '3 Columns' and (( is_active_sidebar( 'content-widget-1' ) ) or ( is_active_sidebar( 'content-widget-2' ) ) or ( is_active_sidebar( 'content-widget-3' ) ))) : ?>

.content-widgets-wrapper {
margin:1.5em 0.75em 0;
}

.woocommerce-page .content-widgets-wrapper {
margin:1.5em 0.75em 0;
}

.woocommerce .site-content .content-widgets-wrapper  {
margin:1.5em 0 0;
}

.woocommerce-wishlist .site-content .content-widgets-wrapper {
margin:1.5em 0.75em 0;
}

.content-widgets-wrapper .widget-area {
padding:0 !important;
margin:0 !important;
}

.content-widget-one {
padding:3em 0;
width:33.3333%;
float:left;

}

.content-widget-two {
padding:3em 0;
width:33.3333%;
float:right;
  
}

.content-widget-three {
padding:3em 0;
width:33.3333%;
float:right;
}

.content-widgets-wrapper .widget {
    -moz-hyphens: auto;
    padding: 0 0 0 1.5em ;
    width: 100%;
    word-wrap: break-word;
    margin: 0px;
}

.content-widgets-wrapper .content-widget-two .widget {
    padding: 0px 1.5em 0 ;
}

.content-widget-one .widget-area .widget, .content-widget-two .widget-area .widget, .content-widget-three .widget-area .widget {
padding-bottom:3em ;
}

.content-widget-one .widget-area .widget:last-child, .content-widget-two .widget-area .widget:last-child, .content-widget-three .widget-area .widget:last-child {
padding-bottom:0 ;
}

@media screen and (min-width: 768px) and (max-width: 955px) {

	.content-widgets-wrapper {
	margin:<?php if ( is_active_sidebar( 'right-sidebar' )) : echo "1.5em 1.5em 0;"; else : echo "1.5em;"; endif; ?>;
	padding-bottom:3em;
	}
	
	.content-widgets-wrapper .content-widget-two .widget {
		padding: 0 0 0;
	}

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0em;
	}

	.content-widgets-wrapper .widget-area {
		padding:0 !important;
		margin:0 !important;
	}

	.content-widget-one {
		padding:3em 0;
		width:100%;
	}

	.content-widget-two {
		padding:0 0 3em;
		width:100%;
	}

	.content-widget-three {
		padding:0;
		width:100%;
	}

	.content-widgets-wrapper .widget {
		-moz-hyphens: auto;
		padding: 0 ;
		width: 40%;
		word-wrap: break-word;
		margin:0 auto;
	}

	.content-widgets-wrapper .content-widget-two .widget {
		padding: 0;
	}
	
	.woocommerce .site-content .content-widgets-wrapper  {
	margin:1.5em 0 0 ;
	}
	
	.woocommerce.woocommerce-wishlist .site-content .content-widgets-wrapper  {
	margin:1.5em 1.5em 0 ;
	}
	

	.content-widget-one .widget-area .widget, .content-widget-two .widget-area .widget, .content-widget-three .widget-area .widget {
	padding-bottom:3em;
	}

	.content-widget-one .widget-area .widget:last-child, .content-widget-two .widget-area .widget:last-child, .content-widget-three .widget-area .widget:last-child {
	padding-bottom:0;
	}

}

@media screen and (min-width: 480px) and (max-width: 768px) {

	.content-widgets-wrapper {
	margin:<?php if ( is_active_sidebar( 'right-sidebar' )) : echo "1.5em 1.5em 0;"; else : echo "1.5em;"; endif; ?>
	}

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0em;
	}
	
	.content-widgets-wrapper .widget-area {
	margin: 0 auto 3em;
	}

	.content-widget-one .widget,
	.content-widget-two .widget,
	.content-widget-three .widget {
		-webkit-hyphens: auto;
		-moz-hyphens: auto;
		-ms-hyphens: auto;
		hyphens: auto;
		margin: 0 auto;
		width: 60%;
		padding:0;
		word-wrap: break-word;
	}
	
	.content-widget-one {
		padding:2em 0;
		width:100%;
	}

	.content-widget-two {
		padding:0 0 2em;
		width:100%;
	}

	.content-widget-three {
		padding:0 0 2em;
		width:100%;
	}
	
	.content-widgets-wrapper .content-widget-three .widget {
		padding: 0 0 2em;
	}
	
	.content-widgets-wrapper .content-widget-two .widget {
		padding: 0;
	}
	
	.woocommerce .site-content .content-widgets-wrapper  {
	margin:1.5em 0 0;
	}
	
	.woocommerce.woocommerce-wishlist .site-content .content-widgets-wrapper  {
	margin:1.5em 1.5em 0;
	}
	
	.content-widget-one .widget-area .widget, .content-widget-two .widget-area .widget, .content-widget-three .widget-area .widget {
	padding-bottom:2em;
	}

	.content-widget-one .widget-area .widget:last-child, .content-widget-two .widget-area .widget:last-child, .content-widget-three .widget-area .widget:last-child {
	padding-bottom:0;
	}
	
}

@media screen and (max-width: 480px) {

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0.25em;
	}

	.content-widget-one .widget,
	.content-widget-two .widget,
	.content-widget-three .widget {
		-webkit-hyphens: auto;
		-moz-hyphens: auto;
		-ms-hyphens: auto;
		hyphens: auto;
		margin: 0 auto 2em;
		width: 100%;
		padding:0 1em;
		word-wrap: break-word;
	}
	
	.content-widget-one, .content-widget-two, .content-widget-three {
	width:100%;
	}

	.content-widgets-wrapper{
	margin:<?php if ( is_active_sidebar( 'right-sidebar' )) : echo "1em 1em 0;"; else : echo "1em;"; endif; ?>
	}

	.woocommerce-page .content-widgets-wrapper {
	margin:1em 1em 0;
	}

	.woocommerce .site-content .content-widgets-wrapper  {
	margin:1em 0 0;
	}

	.content-widgets-wrapper .widget-area {
	padding:0 !important;
	margin:0 !important;
	}

	.content-widget-one {
		padding:2em 0;
		width:100%;
	}

	.content-widget-two {
		padding:0 0 2em;
		width:100%;
	}

	.content-widget-three {
		padding:0 0 2em;
		width:100%;
	}

	.content-widgets-wrapper .widget {
		-moz-hyphens: auto;
		padding: 0 1em;
		width: 100%;
		word-wrap: break-word;
		margin: 0px;
	}

	.content-widgets-wrapper .content-widget-two .widget {
		padding: 0px 1em 0;
	}
	
	.woocommerce-wishlist .site-content .content-widgets-wrapper {
	margin:1em 1em 0;
	}
	
	.content-widgets-wrapper .content-widget-three .widget {
		padding: 0 1em 2em;
	}
	
	.content-widget-one .widget-area .widget, .content-widget-two .widget-area .widget, .content-widget-three .widget-area .widget {
	padding-bottom:2em;
	}

	.content-widget-one .widget-area .widget:last-child, .content-widget-two .widget-area .widget:last-child, .content-widget-three .widget-area .widget:last-child {
	padding-bottom:0;
	}
	
}
<?php endif; ?>

<?php if ( $cwl == '2 Columns' and (( is_active_sidebar( 'content-widget-1' ) ) or ( is_active_sidebar( 'content-widget-2' ) ) or ( is_active_sidebar( 'content-widget-3' ) ))) : ?>

.content-widgets-wrapper {
margin:1.5em 0.75em 0;
}

.woocommerce-page .content-widgets-wrapper {
margin:1.5em 0.75em 0;
}

.woocommerce .site-content .content-widgets-wrapper  {
margin:1.5em 0 0;
}

.woocommerce-wishlist .site-content .content-widgets-wrapper {
margin:1.5em 0.75em 0;
}

.content-widgets-wrapper .widget-area {
padding:0 !important;
margin:0 !important;
}

.content-widget-one {
padding:3em 0;
width:50%;
float:left;
}

.content-widget-two {
padding:3em 0;
width:50%;
float:right;
}

.content-widget-three {
padding:0 1.5em 3em 0;
width:50%;
float:left;
}

.content-widgets-wrapper .widget {
    -moz-hyphens: auto;
    padding: 0 0 0 1.5em;
    width: 100%;
    word-wrap: break-word;
    margin: 0px;
}

.content-widgets-wrapper .content-widget-two .widget {
    padding: 0px 1.5em 0;
}

.content-widget-one .widget-area .widget, .content-widget-two .widget-area .widget, .content-widget-three .widget-area .widget {
padding-bottom:3em;
}

.content-widget-one .widget-area .widget:last-child, .content-widget-two .widget-area .widget:last-child, .content-widget-three .widget-area .widget:last-child {
padding-bottom:0;
}

@media screen and (min-width: 768px) and (max-width: 955px) {

	.content-widgets-wrapper {
	margin:<?php if ( is_active_sidebar( 'right-sidebar' )) : echo "1.5em 1.5em 0;"; else : echo "1.5em;"; endif; ?>
	}

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0em;
	}

	.content-widgets-wrapper .widget-area {
		padding:0 !important;
		margin:0 !important;
	}

	.content-widget-one {
		padding:3em 0;
		width:100%;
	}

	.content-widget-two {
		padding:0 0 3em;
		width:100%;
	}

	.content-widget-three {
		padding:0 0 3em;
		width:100%;
	}

	.content-widgets-wrapper .widget {
		-moz-hyphens: auto;
		padding: 0;
		width: 40%;
		word-wrap: break-word;
		margin:0 auto;
	}

	.content-widgets-wrapper .content-widget-two .widget {
		padding: 0;
	}
	
	.woocommerce .site-content .content-widgets-wrapper  {
	margin:1.5em 0 0;
	}
	
	.woocommerce.woocommerce-wishlist .site-content .content-widgets-wrapper  {
	margin:1.5em 1.5em 0;
	}
	
	.content-widget-one .widget-area .widget, .content-widget-two .widget-area .widget, .content-widget-three .widget-area .widget {
	padding-bottom:3em;
	}

	.content-widget-one .widget-area .widget:last-child, .content-widget-two .widget-area .widget:last-child, .content-widget-three .widget-area .widget:last-child {
	padding-bottom:0;
	}

}

@media screen and (min-width: 480px) and (max-width: 768px) {

	.content-widgets-wrapper {
	margin:<?php if ( is_active_sidebar( 'right-sidebar' )) : echo "1.5em 1.5em 0;"; else : echo "1.5em;"; endif; ?>
	}

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0em;
	}
	
	.content-widgets-wrapper .widget-area {
	margin: 0 auto 3em;
	}

	.content-widget-one .widget,
	.content-widget-two .widget,
	.content-widget-three .widget {
		-webkit-hyphens: auto;
		-moz-hyphens: auto;
		-ms-hyphens: auto;
		hyphens: auto;
		margin: 0 auto;
		width: 60%;
		padding:0;
		word-wrap: break-word;
	}
	
	.content-widget-one {
		padding:2em 0;
		width:100%;
	}

	.content-widget-two {
		padding:0 0 2em;
		width:100%;
	}

	.content-widget-three {
		padding:0 0 2em;
		width:100%;
	}
	
	.content-widgets-wrapper .content-widget-two .widget {
		padding: 0;
	}
	
	.woocommerce .site-content .content-widgets-wrapper  {
	margin:1.5em 0 0;
	}
	
	.woocommerce.woocommerce-wishlist .site-content .content-widgets-wrapper  {
	margin:1.5em 1.5em 0;
	}
	
	.content-widget-one .widget-area .widget, .content-widget-two .widget-area .widget, .content-widget-three .widget-area .widget {
	padding-bottom:2em;
	}

	.content-widget-one .widget-area .widget:last-child, .content-widget-two .widget-area .widget:last-child, .content-widget-three .widget-area .widget:last-child {
	padding-bottom:0;
	}
	
}

@media screen and (max-width: 480px) {

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0.25em;
	}
	
	.content-widgets-wrapper {
	margin:2em 0;
	}
	
	.content-widgets-wrapper .widget-area {
	margin: 0 auto 2em;
	}

	.content-widget-one .widget,
	.content-widget-two .widget,
	.content-widget-three .widget {
		-webkit-hyphens: auto;
		-moz-hyphens: auto;
		-ms-hyphens: auto;
		hyphens: auto;
		margin: 0 auto 2em;
		width: 100%;
		padding:0 1em;
		word-wrap: break-word;
	}
	
	.content-widget-one, .content-widget-two, .content-widget-three {
	width:100%;
	}

	.content-widgets-wrapper	{
	margin:<?php if ( is_active_sidebar( 'right-sidebar' )) : echo "1em 1em 0;"; else : echo "1em;"; endif; ?>
	}

	.woocommerce-page .content-widgets-wrapper {
	margin:1em 1em 0;
	}

	.woocommerce .site-content .content-widgets-wrapper  {
	margin:1em 0 0;
	}

	.content-widgets-wrapper .widget-area {
	padding:0 !important;
	margin:0 !important;
	}

	.content-widget-one {
		padding:2em 0;
		width:100%;
	}

	.content-widget-two {
		padding:0 0 2em;
		width:100%;
	}

	.content-widget-three {
		padding:0 0 2em;
		width:100%;
	}

	.content-widgets-wrapper .widget {
		-moz-hyphens: auto;
		padding: 0 1em;
		width: 100%;
		word-wrap: break-word;
		margin: 0px;
	}

	.content-widgets-wrapper .content-widget-two .widget {
		padding: 0px 1em 0;
	}
	
	.woocommerce-wishlist .site-content .content-widgets-wrapper {
	margin:1em 1em 0;
	}
	
	.content-widget-one .widget-area .widget, .content-widget-two .widget-area .widget, .content-widget-three .widget-area .widget {
	padding-bottom:2em;
	}

	.content-widget-one .widget-area .widget:last-child, 
	.content-widget-two .widget-area .widget:last-child, 
	.content-widget-three .widget-area .widget:last-child {
	padding-bottom:0;
	}
	
}

<?php endif; ?>

<?php if ( is_active_sidebar( 'right-sidebar' )) : ?>

@media screen and (min-width: 768px) and (max-width: 955px) {

	.right-sidebar-wrapper {
		width: 100%;
		border:none;
		padding:0 1.5em 1.5em;
	}

	.right-sidebar-wrap {
		padding:3em 0 3em;
		margin-top: 0;
	}
	
	<?php if ( $sl == '3 Columns - Sidebars Align Left') : ?>

	.right-sidebar-wrapper {
	float:none;
	padding:0 1.5em;
	}

	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'footer-widget-1' ) or is_active_sidebar( 'footer-widget-2' ) or is_active_sidebar( 'footer-widget-3' ) ) : ?>

			.right-sidebar-wrap {
	padding:3em 0 3em;
	}
	<?php endif; ?>

	.right-sidebar-wrap .widget:last-child {
	margin-bottom: 0;
	}

}

@media screen and (min-width: 480px) and (max-width: 768px) {

	.right-sidebar-wrapper {
		width: 100%;
		border:none;
		padding:0 1.5em 1.5em;
	}

	.right-sidebar-wrap {
	padding:2em 0;
	margin-top: 0;
	}

	.right-sidebar-wrap .widget:last-child {
	margin-bottom: 0;
	}
	
	<?php if ( $sl == '3 Columns - Sidebars Align Left') : ?>

	.right-sidebar-wrapper {
	float:none;
	padding:0 1.5em;
	}

	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'footer-widget-1' ) or is_active_sidebar( 'footer-widget-2' ) or is_active_sidebar( 'footer-widget-3' ) ) : ?>
	.right-sidebar-wrap {
	padding:2em 0;
	}
	<?php endif; ?>

}

@media screen and (max-width: 480px) {

	.right-sidebar-wrapper {
		width: 100%;
		border:none;
	}
	
	.right-sidebar-wrap .widget:last-child {
	margin-bottom: 0;
	}
	
	.right-sidebar-wrap {
		top: 0px;
		left: 0px;
		right: 0px;
		bottom: 0px;
		padding: 2em 0;
		margin:0 1em 1em;
		box-sizing: border-box;
	}
	
	<?php if ( is_active_sidebar( 'footer-widget-1' ) or is_active_sidebar( 'footer-widget-2' ) or is_active_sidebar( 'footer-widget-3' ) ) : ?>
		
	.right-sidebar-wrap {
		top: 0px;
		left: 0px;
		right: 0px;
		bottom: 0px;
		padding: 2em 0;
		margin:0 1em 1em 1em;
		box-sizing: border-box;
	}
	<?php endif; ?>
	
	
	<?php if ( $sl == '3 Columns - Sidebars Align Left') : ?>

	.right-sidebar-wrapper {
	float:none;
	padding:0;
	}
	
	.right-sidebar-wrap {
	margin-bottom: 0;
	}

	<?php endif; ?>

}

<?php endif; ?>

@media screen and (min-width: 480px) and (max-width: 768px) {

.hentry.type-post {
	padding:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "2em"; else : echo "3em 2em 2em"; endif; ?> !important;
}

.hentry.has-post-thumbnail {
	padding: 0 !important;
}

.has-post-thumbnail.type-post .post-thumbnail img {
	padding-bottom:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "2em"; else : echo "3em"; endif; ?> !important;
}
	
}

@media screen and (max-width: 480px) {

.hentry.type-post {
	padding:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "1em"; else : echo "3em 1em 1em"; endif; ?> !important;
}

.hentry.has-post-thumbnail {
	padding: 0 !important;
}

.has-post-thumbnail.type-post .post-thumbnail img{
	padding-bottom:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "1em"; else : echo "2em"; endif; ?> !important;
}
	
}

<?php if (get_theme_mod('quidus_disable_entry_meta_single') == 1) : ?>
.entry-footer.single {
display:none;
}
<?php endif; ?>

<?php if (get_theme_mod('quidus_disable_featured_image_home') == 1) : ?>
.home .post-thumbnail {
display:none;
}
.home .hentry.has-post-thumbnail {
padding-top:3em;
}
@media screen and (min-width: 768px) and (max-width: 955px) {
.home .hentry.has-post-thumbnail {
padding-top:3em;
}
}
@media screen and (min-width: 480px) and (max-width: 768px) {
.home .hentry.has-post-thumbnail {
padding-top:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "2em"; else : echo "3em"; endif; ?> !important;
}
}
@media screen and (max-width: 480px) {
.home .hentry.has-post-thumbnail {
padding-top:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "1em"; else : echo "3em"; endif; ?> !important;
}
}
<?php endif; ?>

<?php if (get_theme_mod('quidus_disable_featured_image_search') == 1) : ?>
.search .post-thumbnail {
display:none;
}
.search .hentry.has-post-thumbnail {
padding-top:3em;
}
@media screen and (min-width: 768px) and (max-width: 955px) {
.search .hentry.has-post-thumbnail {
padding-top:3em;
}
}
@media screen and (min-width: 480px) and (max-width: 768px) {
.search .hentry.has-post-thumbnail {
padding-top:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "2em"; else : echo "3em"; endif; ?> !important;
}
}
@media screen and (max-width: 480px) {
.search .hentry.has-post-thumbnail {
padding-top:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "1em"; else : echo "3em"; endif; ?> !important;
}
}
<?php endif; ?>

<?php if (get_theme_mod('quidus_disable_featured_image_archive') == 1) : ?>
.archive .post-thumbnail {
display:none;
}
.archive .hentry.has-post-thumbnail {
padding-top:3em;
}
@media screen and (min-width: 768px) and (max-width: 955px) {
.archive .hentry.has-post-thumbnail {
padding-top:3em;
}
}
@media screen and (min-width: 480px) and (max-width: 768px) {
.archive .hentry.has-post-thumbnail {
padding-top:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "2em"; else : echo "3em"; endif; ?> !important;
}
}
@media screen and (max-width: 480px) {
.archive .hentry.has-post-thumbnail {
padding-top:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "1em"; else : echo "3em"; endif; ?> !important;
}
}
<?php endif; ?>

.site-logo img { max-width: <?php if ( get_theme_mod('quidus_logo_max_width_desktop') == '' ) : echo esc_attr('100%'); else : echo esc_attr($quidus_logo_max_width_desktop); ?>% <?php endif; ?>; }


 @media screen and (min-width: 768px) and (max-width: 955px) {
.site-logo img { max-width: <?php if ( get_theme_mod('quidus_logo_max_width_tablet_large') == '' ) : echo esc_attr('40%'); else : echo esc_attr($quidus_logo_max_width_tablet_large); ?>% <?php endif; ?>; }
 }
 @media screen and (min-width: 480px) and (max-width: 768px) {
.site-logo img { max-width: <?php if ( get_theme_mod('quidus_logo_max_width_tablet_small') == '' ) : echo esc_attr('40%'); else : echo esc_attr($quidus_logo_max_width_tablet_small); ?>% <?php endif; ?>; }
 }
 @media screen and (max-width: 480px) {
.site-logo img { max-width: <?php if ( get_theme_mod('quidus_logo_max_width_mobile') == '' ) : echo esc_attr('40%'); else : echo esc_attr($quidus_logo_max_width_mobile); ?>% <?php endif; ?>; }
 }

.entry-header {
text-align: <?php if ( get_theme_mod('quidus_post_title_align_left') == true ) : echo "left"; else : echo "center"; endif; ?> !important;
}

.widget-title {
text-align: <?php if ( get_theme_mod('quidus_widget_title_align_left') == true ) : echo "left"; else : echo "center"; endif; ?> !important;
}

@media screen and (min-width: 955px) {

.site {
	margin: <?php if ( get_theme_mod('quidus_switch_to_centered_layout') == true ) : echo "0 auto"; else : echo "0 0 0 "; echo esc_attr($quidus_site_distance_from_left); echo "%"; endif; ?> !important;
}
}

.comment-reply-title {
text-align: <?php if ( get_theme_mod('quidus_comments_title_align_left') == true ) : echo "left"; else : echo "center"; endif; ?> !important;
}

.post-mark,
.video-mark {
display:<?php if ( get_theme_mod('quidus_post_format_icons_disable') == true ) : echo "none"; else : echo "inline"; endif; ?> !important;
}

.sidebar,
.woocommerce #content #container #content,
.hentry,
.right-sidebar-wrap,
.content-widgets-wrapper,
.copyright-wrap,
.footer-widgets-wrapper,
section.error-404,
.category .page-content,
.tag .page-content,
.date .page-content,
.search .page-content {
background:<?php if ( get_theme_mod('quidus_enable_transparent_background') == true ) : echo "transparent"; else : echo esc_attr($quidus_color_content_background); endif; ?>;
box-shadow: 0px 0px 2px <?php echo esc_attr($quidus_box_shadow_color); ?>;
}

 @media screen and (min-width: 1px) and (max-width: 955px) {

	.sidebar {
	background:transparent;
	box-shadow:none;
	}
	
	.secondary,
	.site-header	{
	background:<?php if ( get_theme_mod('quidus_enable_transparent_background') == true ) : echo "transparent"; else : echo esc_attr($quidus_color_content_background); endif; ?>;
	box-shadow: 0px 0px 2px <?php echo esc_attr($quidus_box_shadow_color); ?>;
	}

}

 @media screen and (min-width: 768px) and (max-width: 955px) {
 
	.site-header {
		padding: 3em;
	}

	.secondary {
		margin:1.5em 1.5em 0 1.5em;
		padding-bottom:3em;
	}

}

 @media screen and (min-width: 480px) and (max-width: 768px) {
 
	.site-header {
		padding: 2em;
	}
 
	.secondary {
		margin:1.5em 1.5em 0 1.5em;
		padding-bottom:2em;
	}
 
 }
 
 @media screen and (max-width: 480px) {
 
	.secondary {
		margin:1em 1em 0 1em;
		padding-bottom:2em;
	}
 
 }
 
<?php if ( is_home() and get_theme_mod( 'quidus_header_image' ) ) : ?>
 
.text-box-background {
position:absolute;
height:100%;
width:100%;
top:0;
left:0;
background: <?php echo esc_attr($quidus_color_main); ?>;
opacity: 0.<?php if ( get_theme_mod('quidus_enable_home_header_text_background_opacity') == '' ) : echo "50"; else : echo esc_attr(get_theme_mod('quidus_enable_home_header_text_background_opacity')); endif; ?>;
}

.home-header-text-wrapper {
width:38.19660108%;
position:absolute;
bottom:0;
padding: 1em 2em 1em 2em;
color:#fff;
}

.home-header-text {
color:#fff;
}

<?php endif; ?>

<?php if (has_nav_menu( 'primary' ) or (get_theme_mod('quidus_horizontal_menu_search_enable', 'default') == true) or (class_exists( 'WooCommerce' ) and get_theme_mod('quidus_horizontal_menu_cart_enable', 'default') == true) or get_theme_mod( 'quidus_logo' ) or (get_bloginfo( 'name', 'display' ) == true) or get_bloginfo( 'description', 'display' ) == '') : ?>

@media screen and (min-width: 955px) {

.parallax-wrapper {
     width: 100%;
     height: 100%;
	 position: relative;
	 z-index:-1;
}

.sidebar {
	margin-top:6em;
	padding-top:3em;
}

.site-header {
	background-color: transparent;
	display: inline-block;
}

.site-branding {
    display: inline-block;
    position: absolute;
	height:3.5em;
	top:0;
}

.site-title {
	font-size: <?php if ( get_theme_mod('quidus_site_title_size') == '' ) : echo "2.2"; else : echo esc_attr((string)(intval($quidus_site_title_size) * 0.022)); endif; ?>rem;
	word-wrap: break-word;
	display: inline-block;
	text-transform:uppercase;
	line-height:1;
	margin-bottom:0;
	padding-top:0;
	padding-bottom:0;
	height:auto !important;
	margin-top:28px;
	transform:translateY(-50%);
	-webkit-transform:translateY(-50%);
	-moz-transform:translateY(-50%);
	vertical-align:middle
}

.site-title a {
	display: inline-block
}

.site-description {
	line-height: 1.6;
	word-wrap: break-word;
	width:auto !important;
	display: inline-block;
	padding-left:0.75em;
	margin-bottom:0;
	padding-top:0;
	padding-bottom:0;
	transform:translateY(-50%);
	-webkit-transform:translateY(-50%);
	-moz-transform:translateY(-50%);
}

.my-social-wrap {
height:100%;
border-left:1px solid rgba(255,255,255,0.25) !important;
}

.my-social {
vertical-align:middle;
}

.my-social span {
font-size:1.9rem !important;
line-height:1.9rem;
padding-right:1em;
top:0.95em;
transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
position: relative;
}

.my-social-wrap a:first-child span {
font-size:1.9rem !important;
line-height:1.9rem;
padding-right:1em;
padding-left:1.2em;
transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.my-social-wrap a:last-child span {
font-size:1.9rem !important;
line-height:1.9rem;
padding-right:1em;
transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.menu-cart-wrapper {
z-index:1001;
padding:0 0.0625em 0 1.53em;
border-left:1px solid rgba(255,255,255,0.25) !important;
height:100%;
}

.menu-cart-wrapper a {
  position: relative;
}

.horizontal-menu-wrapper {
z-index:1001;
padding:0 2em 0 2em;
height:100%;
}

.menu-holder {
background:#fff;
box-shadow: 0px 0px 2px rgba(60, 60, 60, 0.15);
height:3.5em;
}


.toggle-search {
padding: 0 1.25em;
border-left:1px solid rgba(255,255,255,0.25);
font-size:1.9rem !important;
height:100%;
}

.toggle-search i {
  position: relative;
  padding-top:0.9em
}

.horizontal-menu-wrapper {
border-bottom:1px solid rgba(255,255,255,0.25);
}

.toggle-search, .search-expand, .search-expand-inner, .search-expand-inner .search-form, .search-expand-inner .search-form label, .menu-cart-wrapper {
width: auto;
}

.menu-cart-wrapper .cart-contents {
font-size:1.9rem;
padding-top:0.95em;
}

.nav-item {
float:left;
height:3.5em;
}

.header-menu-cart-count {
position:absolute;
border-radius:100%;
-moz-border-radius:100%;
-webkit-border-radius:100%;
height:17px;
width:17px;
text-align:center;
line-height:1.5;
font-size:1.12rem !important;
left:1.1em;
top:1.1em;
}

<?php if( class_exists( 'WooCommerce' ) ) : ?>

.search-expand-inner .search-form .search-field {
position:absolute;
width:175px;
top:65px;
margin-left:-55px;
background:#fff;
transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
opacity:0;
}

.search-expand-inner .search-form .search-field:hover  {
top:56px;
opacity:1;
transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

<?php endif; ?>

<?php if( !class_exists( 'WooCommerce' ) ) : ?>

.search-expand-inner .search-form .search-field {
position:absolute;
width:175px;
top:65px;
margin-left:-85px;
background:#fff;
transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
opacity:0;
}

.search-expand-inner .search-form .search-field:hover  {
top:56px;
opacity:1;
transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

<?php endif; ?>

.search-expand-inner .search-form .search-submit {
display:none;
}

.main-navigation ul,
.main-navigation li {
background:transparent;
}
 
.main-navigation {
z-index:1001;
padding-right:0.5em !important;
margin-top:28px;
transform:translateY(-50%);
	-webkit-transform:translateY(-50%);
}

.float-right {
float:right;
display: inline-block !important;
min-height:3.5em;
}

.main-navigation > div {
	margin:auto 0;
	position: relative;
}

.nav-menu-primary {
vertical-align:middle;
}

.main-navigation a {
	display: block;
	position:absolute;
	padding: 0 0.5em 0 0;
	position: relative;
	margin:0 0.2375em 0 0.2375em;
	text-decoration: none;
	background:transparent;
	font-size: 16px;
	font-size: 1.6rem;
}

.main-navigation ul {
	list-style: none;
	margin:0;
	width:auto !important;
	display: inline-block;
	padding-bottom:2px;
}

.main-navigation ul .toggled-on li {
	width:180px !important;
}

.main-navigation ul ul {
	display: none;
}

.main-navigation ul .toggled-on {
	display:inline-block;
	position:absolute;
	background:<?php echo esc_attr($quidus_color_main); ?>;
	width:200px !important;
	z-index:1001;
}

.main-navigation ul .toggled-on a,
.main-navigation ul .toggled-on .menu-item-description {
	color:#fff;
}

.main-navigation > div > ul > li {
	vertical-align:middle;
}

.main-navigation li {
	position: relative;
	transition:0.5s;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
	width:auto !important;
	display:inline-block;
}

.main-navigation li:hover,
.main-navigation li:focus {
	transition:0.5s;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
}

.main-navigation .nav-menu > ul > li:first-child,
.main-navigation .nav-menu > li:first-child {
	border-top: 0;
}

.main-navigation .page_item_has_children > a,
.main-navigation .menu-item-has-children > a {
	padding-right: 1.4em;
	margin-right:0.5825em;
}

.main-navigation .menu-item-description {
	font-size: 14px;
	font-size: 1.4rem;
	font-weight: 400;
	line-height: 1.4;
	margin-top: 0.5em;
}

.no-js .main-navigation ul ul {
	display: block;
}

.main-navigation .dropdown-toggle {
	background-color: transparent;
	border: 1px solid rgba(60,60,60,0);
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	content: "";
	height: 8px;
	padding: 0;
	position: absolute;
	text-transform: lowercase; /* Stop screen readers to read the text as capital letters */
	top: 7px;
	right: 0;
	width: 32px;
	transition:0.5s;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
}

.main-navigation .dropdown-toggle:after {
	content: "\f431";
	font-size: 16px;
	line-height: 8px;
	position: relative;
	top: 0;
	left: 1px;
	width: 24px;
	transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.main-navigation .dropdown-toggle:hover,
.main-navigation .dropdown-toggle:focus {
	border: 1px solid rgba(60,60,60,0);
	background-color: transparent;
	transition:0.5s;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
}

.main-navigation .dropdown-toggle.toggle-on:after {
	content: "\f432";
	transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.main-navigation ul ul .dropdown-toggle {
	background-color: transparent;
	border: 1px solid rgba(60,60,60,0);
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	content: "";
	height: 8px;
	padding: 0;
	position: absolute;
	text-transform: lowercase; /* Stop screen readers to read the text as capital letters */
	top: 11px;
	right: -7px;
	width: 32px;
	transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.main-navigation ul ul .dropdown-toggle:after {
	content: "\f431";
	font-size: 16px;
	line-height: 12px;
	position: relative;
	top: 0px;
	left: 10px;
	width: 24px;
	transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.main-navigation .toggled-on li a {
	display: block;
	position:absolute;
	padding: 0.5em;
	position: relative;
	margin:0 0.2375em 0 0.5em;
	text-decoration: none;
	background:transparent;
	font-size: 16px;
	font-size: 1.6rem;
}

.main-navigation > div > ul > li > .toggled-on {
margin-top:0.9em;
-webkit-transform:translateY(5%);
}

<?php if ( get_theme_mod('quidus_horizontal_menu_cart_enable', 'default') == false or !class_exists( 'WooCommerce' ) ) : ?>) : ?>

.horizontal-menu-wrapper {
padding:0 0 0 2em;
}

.toggle-search {
border-right:none;
padding: 0 1.1em 0 1.26em;
}

.main-navigation {
	padding-right:0.5em;
}

.search-expand-inner .search-form .search-field {
margin-left:-90px;
}

<?php endif; ?>

<?php if (get_theme_mod('quidus_horizontal_menu_search_enable', 'default') == false) : ?>

.menu-cart-wrapper {
    padding:0 0.0625em 0 1.5em;
height:100%;
}

.main-navigation {
    z-index: 1001;
	padding-right:0.5em;
}

.my-social-wrap {
border-left:1px solid rgba(255,255,255,0.25) !important;
}

.my-social span {
font-size:1.9rem !important;
line-height:1.9rem;
padding-right:1em;
transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.my-social-wrap a:first-child span {
font-size:1.9rem !important;
line-height:1.9rem;
padding-right:1em;
padding-left:1.2em;
transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.my-social-wrap a:last-child span {
font-size:1.9rem !important;
line-height:1.9rem;
padding-right:1em;
transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

<?php endif; ?>

<?php if ((get_theme_mod('quidus_horizontal_menu_search_enable', 'default') == false) and (get_theme_mod('quidus_horizontal_menu_cart_enable', 'default')) == false) : ?>

.my-social-wrap a:last-child span {
font-size:1.9rem !important;
line-height:1.9rem;
padding-right:1.30em;
transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

<?php endif; ?>

.menu-holder {
position:fixed;
z-index:10002;
width:100%;
}

.menu-holder .site-title a {
color:<?php echo esc_attr($quidus_color_main); ?>;
}

<?php if (get_theme_mod( 'quidus_transparent_menu_home_enable', false ) == true) : ?> 

	.home .menu-holder.menu-offset .my-social span,
	.home .menu-holder.menu-offset .main-navigation a,
	.home .menu-holder.menu-offset .toggle-search, 
	.home .menu-holder.menu-offset .menu-cart-wrapper .cart-contents,
	.home .menu-holder.menu-offset .site-description,
	.home .menu-holder.menu-offset .site-title a,
	.home .menu-holder.menu-offset .dropdown-toggle:after {
		color:<?php echo esc_attr($quidus_color_main); ?>;
	}
	
	.home .menu-holder .my-social span, .home .main-navigation a,
	.home .menu-holder .site-description,
	.home .menu-holder .site-title a,
	.home .toggle-search,
	.home .menu-cart-wrapper .cart-contents, 
	.home .menu-cart-wrapper .cart-contents:focus,
	.home .menu-holder.menu-offset .main-navigation .toggled-on li a {
		color:#fff;
	}
	
	@media screen and (min-width: 955px) {

		.home .menu-holder .dropdown-toggle:after {
			color:#fff;
		}
	
	}
	
	.home .menu-holder {
		background:transparent;
	}
	
	.menu-holder.menu-offset {
		background:#fff;
	}

<?php endif; ?>

}

@media screen and (max-width: 955px) {

.main-navigation .menu-item-description {
color: <?php echo esc_attr($quidus_color_secondary); ?>;
}

.main-navigation ul,
.main-navigation li,
.main-navigation > div
{
	background:<?php echo esc_attr($quidus_color_special); ?>;
}

.home-header-text {
color:#fff;
}

.site-logo {
margin:0 auto 1em auto;
max-height:auto;
}

.site-header {
	background-color: transparent;
	border-bottom: 0;
	margin: 3em 0;
	padding: 0 1.5em;
}

.site-branding {
	min-height: 0;
	padding: 0;
	text-align:center;
}

.site-branding {
	min-height: 2em;
	position: relative;
}

.site-title {
	line-height: 1.2308;
	margin-top: 0.41025em;
	margin-bottom: 0.205125em;
	word-wrap: break-word;
	padding-bottom:0;
}

.site-description {
	display: block;
	font-weight: 400;
	line-height: 1.6;
	opacity: 1;
	word-wrap: break-word;
}
 
.main-navigation {
	margin: 0 1.5em 3em;
	line-height:1.6;
	border-top:1px solid rgba(60,60,60,0.15);
	border-right:1px solid rgba(60,60,60,0.15);
	border-bottom:1px solid rgba(60,60,60,0.15);
}

.main-navigation a {
	display: block;
	position:absolute;
	padding: 0.75em 0.75em 0.75em 0;
	position: relative;
	margin-left:0.75em;
	text-decoration: none;
	background:transparent;
	font-size: 16px;
	font-size: 1.6rem;
}

.main-navigation ul {
	list-style: none;
	margin: 0;
}

.main-navigation ul ul {
	display: none;
	margin-left: 10px;
}

.main-navigation ul .toggled-on {
	display: block;
}

.main-navigation li {
	position: relative;
	border-top:1px solid rgba(60,60,60,0.15);
	border-left:1px solid rgba(60,60,60,0.15);
	transition:0.5s;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
}

.main-navigation li:hover,
.main-navigation li:focus {
	transition:0.5s;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
	background:rgba(60,60,60,0.15);
}

.main-navigation .nav-menu > ul > li:first-child,
.main-navigation .nav-menu > li:first-child {
	border-top: 0;
}

.main-navigation .page_item_has_children > a,
.main-navigation .menu-item-has-children > a {
	padding-right: 32px;
}

.main-navigation .menu-item-description {
	font-size: 14px;
	font-size: 1.4rem;
	font-weight: 400;
	line-height: 1.4;
	margin-top: 0.5em;
}

.no-js .main-navigation ul ul {
	display: block;
}

.dropdown-toggle {
	background-color: transparent;
	border: 1px solid rgba(60,60,60,0);
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	content: "";
	height: 32px;
	padding: 0;
	position: absolute;
	text-transform: lowercase; /* Stop screen readers to read the text as capital letters */
	top: 7px;
	right: 0;
	width: 32px;
	transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.dropdown-toggle:after {
	content: "\f431";
	font-size: 16px;
	line-height: 24px;
	position: relative;
	top: 0;
	left: 1px;
	width: 24px;
	transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.dropdown-toggle:hover,
.dropdown-toggle:focus {
	border: 1px solid rgba(60,60,60,0);
	background-color: transparent;
	transition:0.5s;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
}

.dropdown-toggle.toggle-on:after {
	content: "\f432";
	transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.menu-holder {
position:relative;
width:100%;
}

.float-right {
display:none;
}
.float-right.toggled-on {
display:block;
}

}

.site-logo {
max-height:auto;
display: inline;
max-width:<?php if ( get_theme_mod('quidus_logo_max_width_desktop') == '' ) : echo esc_attr('100px'); else : echo esc_attr($quidus_logo_max_width_desktop); ?>px <?php endif; ?>;
}

.site-logo img {
max-height:auto;
display: inline;
max-width:<?php if ( get_theme_mod('quidus_logo_max_width_desktop') == '' ) : echo esc_attr('100px'); else : echo esc_attr($quidus_logo_max_width_desktop); ?>px <?php endif; ?>;
}


@media screen and (min-width: 768px) and (max-width: 955px) {

.site-title {
font-size:3.9rem;
}
 
 .site-logo {
max-height:auto;
display: inline;
max-width: <?php if ( get_theme_mod('quidus_logo_max_width_tablet_large') == '' ) : echo esc_attr('150'); else : echo esc_attr($quidus_logo_max_width_tablet_large * 4); ?>px <?php endif; ?>;
}

.site-logo img {
max-height:auto;
display: inline;
max-width: <?php if ( get_theme_mod('quidus_logo_max_width_tablet_large') == '' ) : echo esc_attr('150'); else : echo esc_attr($quidus_logo_max_width_tablet_large * 4); ?>px <?php endif; ?>;
}

.secondary.toggled-on {
    padding-top:3em;
	margin-top:1.5em;
	margin-bottom:0;
}

.woocommerce .secondary.toggled-on {
    padding-top:3em;
	margin-top:0;
	margin-bottom:1.5em;
}

.site {
margin-top:-1.5em;
}

.woocommerce .site {
margin-top:0;
}

.site-header {
box-shadow:none;
margin: 0 0 1.5em 0;
padding: 3em;
background:<?php if ( get_theme_mod('quidus_enable_transparent_background') == true ) : echo "transparent"; else : echo esc_attr($quidus_color_content_background); endif; ?>;
box-shadow: 0px 0px 2px <?php echo esc_attr($quidus_box_shadow_color); ?>;
}

.float-right {
    margin: 0 1.5em 1.5em;
    line-height: 1.6;
	padding:1.5em;
	background:<?php if ( get_theme_mod('quidus_enable_transparent_background') == true ) : echo "transparent"; else : echo esc_attr($quidus_color_content_background); endif; ?>;
	box-shadow: 0px 0px 2px <?php echo esc_attr($quidus_box_shadow_color); ?>;
}

.main-navigation {
margin:0;
padding:1.5em 0;
border:none;
}

.main-navigation li {
border-left:none;
}

.my-social-wrap {
margin-right:-1.35em;
}

.my-social-wrap span {
line-height:3.9rem;
padding-top:1.5em;
font-size:2.3rem;
}

.float-right .toggle-search {
display:none;
}

.float-right .search-form {
max-width:100%;
margin:0 auto;
padding-top:1.5em;
}

.float-right .search-submit {
display:none;
}

.menu-cart-wrapper {
padding-top:1.65em;
max-width:100%;
margin:0 auto;
text-align:center;
line-height:1;
padding-bottom:1.5em;
height:100%;
}

.cart-contents {
font-size: 2.3rem;
margin:0 auto;
}

.header-menu-cart-count {
position:absolute;
border-radius:100%;
-moz-border-radius:100%;
-webkit-border-radius:100%;
height:17px;
width:17px;
padding-left:1px;
line-height:1.7;
font-size:1rem !important;
left:1.4em;
top:-0.50em;
}

.woocommerce .site-content {
padding-top:0 !important;
margin-bottom:1.5em;
}

.woocommerce.woocommerce-wishlist .site-content {
margin-bottom:0em;
}

.secondary.toggled-on .widget-area .widget:first-child {
margin: 0 auto 3em;
}

.secondary.toggled-on .widget-area .widget:last-child {
	margin: 0 auto;
}

<?php if ((get_theme_mod('quidus_horizontal_menu_search_enable', 'default') == false) and (get_theme_mod('quidus_horizontal_menu_cart_enable', 'default')) == false) : ?>

.my-social-wrap span {
padding-top:1.5em;
padding-bottom:1.5em;
}

<?php endif; ?>

<?php if ((get_theme_mod('quidus_horizontal_menu_cart_enable', 'default')) == false or !class_exists( 'WooCommerce' ) ) : ?>

.float-right .search-form {
padding-top:1.5em;
padding-bottom:1.5em;
}

<?php endif; ?>

}

 @media screen and (min-width: 480px) and (max-width: 768px) {
 
 .site-logo {
max-height:auto;
display: inline;
max-width: <?php if ( get_theme_mod('quidus_logo_max_width_tablet_large') == '' ) : echo esc_attr('150'); else : echo esc_attr($quidus_logo_max_width_tablet_large * 3); ?>px <?php endif; ?>;
}

.site-title {
 	padding-top:0; 
	font-size:3.2rem;
} 

.site-logo img {
max-height:auto;
display: inline;
max-width: <?php if ( get_theme_mod('quidus_logo_max_width_tablet_large') == '' ) : echo esc_attr('150'); else : echo esc_attr($quidus_logo_max_width_tablet_large * 3); ?>px <?php endif; ?>;
	padding-top:0.25em;
}

.site-header {
box-shadow:none;
margin: 0 0 1.5em;
padding: 2em 3em;
background:<?php if ( get_theme_mod('quidus_enable_transparent_background') == true ) : echo "transparent"; else : echo esc_attr($quidus_color_content_background); endif; ?>;
box-shadow: 0px 0px 2px <?php echo esc_attr($quidus_box_shadow_color); ?>;
}

.float-right{
    margin: 0 1.5em 1.5em 1.5em;
    line-height: 1.6;
	padding:1.5em 1.5em 2em;
	background:<?php if ( get_theme_mod('quidus_enable_transparent_background') == true ) : echo "transparent"; else : echo esc_attr($quidus_color_content_background); endif; ?>;
	box-shadow: 0px 0px 2px <?php echo esc_attr($quidus_box_shadow_color); ?>;
}

.main-navigation li {
border-left:none;
}

.main-navigation {
margin:0 auto;
padding:0.5em 0;
border:none;
width:100%;
}

.my-social-wrap {
margin-right:-1.4em;
}

.my-social-wrap span {
line-height:3.9rem;
padding-top:1.5em;
font-size:2.3rem;
}

.float-right .toggle-search {
display:none;
}

.float-right .search-form {
width:100%;
margin:0 auto;
padding-top:1.5em;
}

.float-right .search-submit {
display:none;
}

.menu-cart-wrapper {
padding-top:1.65em;
max-width:100%;
height:100%;
margin:0 auto;
text-align:center;
line-height:1;
}

.cart-contents {
font-size: 2.3rem;
margin:0 auto;
}

.secondary.toggled-on {
    padding-top:2em;
	margin-top:1.5em;
	margin-bottom:0;
}

.woocommerce .secondary.toggled-on {
    padding-top:3em;
	margin-top:0;
	margin-bottom:1.5em;
}

.site {
margin-top:-1.5em;
}

.woocommerce .site {
margin-top:0;
}

.header-menu-cart-count {
position:absolute;
border-radius:100%;
-moz-border-radius:100%;
-webkit-border-radius:100%;
height:17px;
width:17px;
padding-left:1px;
line-height:1.7;
font-size:1rem !important;
left:1.4em;
top:-0.50em;
}

.woocommerce .site-content {
padding-top:0 !important;
margin-bottom:1.5em;
}

.woocommerce.woocommerce-wishlist .site-content {
margin-bottom:0em;
}

.secondary.toggled-on .widget-area .widget:first-child {
margin: 0 auto 2em!important;
}

.secondary.toggled-on .widget-area .widget:last-child {
	margin: 0 auto!important;
}

}

 @media screen and (max-width: 480px) {
 
.site-logo {
max-height:auto;
display: inline;
max-width: <?php if ( get_theme_mod('quidus_logo_max_width_tablet_large') == '' ) : echo esc_attr('150'); else : echo esc_attr($quidus_logo_max_width_tablet_large * 2); ?>px <?php endif; ?>;
margin: 0.5em auto 0.5em;
padding-top:0;
}

.site-title {
padding-top:0;
	font-size:2.7rem;
}

.site-branding {
text-align:left;
}

.site-logo img {
max-height:auto;
display: inline;
max-width: <?php if ( get_theme_mod('quidus_logo_max_width_tablet_large') == '' ) : echo esc_attr('150'); else : echo esc_attr($quidus_logo_max_width_tablet_large * 2); ?>px <?php endif; ?>;
padding-top:0.25em; 
}

.main-navigation li {
border-left:none;
}

.site-header {
box-shadow:none;
margin: 0 0 1em;
padding: 2em;
background:<?php if ( get_theme_mod('quidus_enable_transparent_background') == true ) : echo "transparent"; else : echo esc_attr($quidus_color_content_background); endif; ?>;
box-shadow: 0px 0px 2px <?php echo esc_attr($quidus_box_shadow_color); ?>;
}

.float-right{
    margin: 0 1em 1em 1em;
    line-height: 1.6;
	padding:1.5em 1em 2em;
	background:<?php if ( get_theme_mod('quidus_enable_transparent_background') == true ) : echo "transparent"; else : echo esc_attr($quidus_color_content_background); endif; ?>;
	box-shadow: 0px 0px 2px <?php echo esc_attr($quidus_box_shadow_color); ?>;
}

.main-navigation {
margin:0;
padding:0.5em 0 1em;
border:none;
width:100%;
}

.my-social-wrap {
margin-right:-1.5em;
}

.my-social-wrap span {
line-height:3.5rem;
font-size: 2rem;
padding-top:1em;
}

.float-right .toggle-search {
display:none;
}

.float-right .search-form {
max-width:100%;
margin:0 auto;
padding-top:1em;
}

.float-right .search-submit {
display:none;
}

.menu-cart-wrapper {
padding-top:1.1em;
max-width:100%;
height:100%;
margin:0 auto;
text-align:center;
line-height:1;
}

.cart-contents {
font-size: 1.9rem;
margin:0 auto;
}

.secondary.toggled-on {
    padding-top:2em;
	margin-top:1em;
	margin-bottom:0;
}

.woocommerce .secondary.toggled-on {
    padding-top:2em;
	margin-top:0;
	margin-bottom:1em;
}

.site {
margin-top:-1em;
}

.woocommerce .site {
margin-top:0;
}

.header-menu-cart-count {
position:absolute;
border-radius:100%;
-moz-border-radius:100%;
-webkit-border-radius:100%;
height:17px;
width:17px;
padding-left:1px;
line-height:1.7;
font-size:1rem !important;
left:1.4em;
top:-0.50em;
}

.secondary.toggled-on .widget-area .widget {
margin: 0 auto 2em;
}

.main-navigation ul {
    border-top: none;
    border-bottom: none;
}

.woocommerce .site-content {
padding-top:0 !important;
margin-bottom:1em;
}

.woocommerce.woocommerce-wishlist .site-content {
margin-bottom:0em;
}

}

<?php endif;

if ( has_nav_menu( 'secondary' ) ) : ?>

.home-header-text {
color:#fff;
}
 
.secondary-navigation {
	margin: 0 1.5em 3em;
	line-height:1.6;
	border-top:1px solid rgba(60,60,60,0.15);
	border-right:1px solid rgba(60,60,60,0.15);
	border-bottom:1px solid rgba(60,60,60,0.15);
}

.secondary-navigation a {
	display: block;
	position:absolute;
	padding: 0.75em 0.75em 0.75em 0;
	position: relative;
	margin-left:0.75em;
	text-decoration: none;
	background:transparent;
	font-size: 16px;
	font-size: 1.6rem;
}

.secondary-navigation ul {
	list-style: none;
	margin: 0;
}

.secondary-navigation ul ul {
	display: none;
	margin-left: 10px;
}

.secondary-navigation ul .toggled-on {
	display: block;
}

.secondary-navigation li {
	position: relative;
	border-top:1px solid rgba(60,60,60,0.15);
	border-left:1px solid rgba(60,60,60,0.15);
	transition:0.5s;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
}

.secondary-navigation li:hover,
.secondary-navigation li:focus {
	transition:0.5s;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
	background:rgba(60,60,60,0.15);
}

.secondary-navigation .nav-menu > ul > li:first-child,
.secondary-navigation .nav-menu > li:first-child {
	border-top: 0;
}

.secondary-navigation .page_item_has_children > a,
.secondary-navigation .menu-item-has-children > a {
	padding-right: 32px;
}

.secondary-navigation .menu-item-description {
	font-size: 14px;
	font-size: 1.4rem;
	font-weight: 400;
	line-height: 1.4;
	margin-top: 0.5em;
}

.no-js .secondary-navigation ul ul {
	display: block;
}

.secondary .dropdown-toggle {
	background-color: transparent;
	border: 1px solid rgba(60,60,60,0);
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	content: "";
	height: 32px;
	padding: 0;
	position: absolute;
	text-transform: lowercase; /* Stop screen readers to read the text as capital letters */
	top: 4px;
	right: 0;
	width: 32px;
	transition:0.5s;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
}

.dropdown-toggle:after {
	content: "\f431";
	font-size: 16px;
	line-height: 24px;
	position: relative;
	top: 0;
	left: 1px;
	width: 24px;
	transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

.dropdown-toggle:hover,
.dropdown-toggle:focus {
	border: 1px solid rgba(60,60,60,0);
	background-color: transparent;
	transition:0.5s;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
}

.dropdown-toggle.toggle-on:after {
	content: "\f432";
	transition:0.5s;
-moz-transition:0.5s;
-webkit-transition:0.5s;
}

@media screen and (min-width: 955px) {

.site-header {
    background-color: transparent;
    border-bottom: 0px none;
    margin: 3em 0px;
    padding: 3em 0 0;
}

.secondary-navigation {
    margin: 0px 1.5em 3em;
}

.sidebar {
    margin: 6em 0.75em 0;
}

.sidebar {
    margin-top: 6em;
    padding-top: 3em;
}

}

@media screen and (min-width: 955px) and (max-width: 1105px) {

<?php if ( $sl == '3 Columns - Sidebars Align Right') : ?>

.sidebar {
    margin-top: 1.5em;
}

<?php endif; ?>

}

@media screen and (min-width: 768px) and (max-width: 955px) {

.secondary-navigation {
    margin: 0 30% 3em;
}

}

@media screen and (min-width: 480px) and (max-width: 768px) {

.secondary-navigation {
    margin: 0 20% 2em;
}

}

@media screen and (max-width: 480px) {

.secondary-navigation {
    margin: 0 1em 2em;
}

}

<?php endif; ?>

<?php if (get_theme_mod('quidus_site_title_color_enable') == true ) : ?>

.menu-holder .site-title a {
color: <?php echo esc_attr($quidus_site_title_color); ?>
}

<?php endif; ?>

</style>

<?php

}

add_action('wp_head', 'quidus_css_customizer');

if( class_exists( 'Kirki' ) ) {

function quidus_author_social() {
	
	global $social_networks;

	echo '<div class="author-social-wrap">';
	foreach ($social_networks as $network) {
	$networks = array(); $networks['author_' . lcfirstc($network)] = get_theme_mod('author_' . lcfirstc($network));
		if(strpos($networks['author_' . lcfirstc($network)], lcfirstc($network)) !== false){ echo '<a class="author-social" href="' . esc_url($networks['author_' . lcfirstc($network)]) . '"><span class="genericon genericon-' . lcfirstc($network) . '"></span></a>'; }
	
	} $google_network = get_theme_mod('author_googleplus');
	if(strpos($google_network, 'plus.google.com') !== false){ echo '<a class="author-social" href="' . esc_url($google_network) . '"><span class="genericon genericon-googleplus"></span></a>'; }
	echo '</div>';
	
}

function quidus_my_social() {
	
	global $social_networks; 
	global $linkscount; 
	
	foreach ($social_networks as $network) {
		$networks = array(); $networks['my_' . lcfirstc($network)] = get_theme_mod('my_' . lcfirstc($network));
		if(strpos($networks['my_' . lcfirstc($network)], lcfirstc($network)) !== false) {
		$linkscount++;
		}
	}
	
	if ($linkscount > 0) {
	echo '<div class="my-social-wrap">';
	foreach ($social_networks as $network) {
	
	$networks['my_' . lcfirstc($network)] = get_theme_mod('my_' . lcfirstc($network));
		if(strpos($networks['my_' . lcfirstc($network)], lcfirstc($network)) !== false){ echo '<a class="my-social" href="' . esc_url($networks['my_' . lcfirstc($network)]) . '"><span class="genericon genericon-' . lcfirstc($network) . '"></span></a>'; }
	
	} $google_network = get_theme_mod('my_googleplus');
	if(strpos($google_network, 'plus.google.com') !== false){ echo '<a class="my-social" href="' . esc_url($google_network) . '"><span class="genericon genericon-googleplus"></span></a>'; }
	echo '</div>';
	}
}

function quidus_footer_social() {
	
	global $social_networks; 
	echo '<div class="footer-social-wrap">';
	foreach ($social_networks as $network) {
	$networks = array(); $networks['footer_' . lcfirstc($network)] = get_theme_mod('footer_' . lcfirstc($network));
		if(strpos($networks['footer_' . lcfirstc($network)], lcfirstc($network)) !== false){ echo '<a class="footer-social" href="' . esc_url($networks['footer_' . lcfirstc($network)]) . '"><span class="genericon genericon-' . lcfirstc($network) . '"></span></a>'; }
	
	} $google_network = get_theme_mod('footer_googleplus');
	if(strpos($google_network, 'plus.google.com') !== false){ echo '<a class="footer-social" href="' . esc_url($google_network) . '"><span class="genericon genericon-googleplus"></span></a>'; }
	echo '</div>';
	
}

}

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 */
function quidus_customize_preview_js() {
	wp_enqueue_script( 'quidus-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'quidus_customize_preview_js' );

?>