<?php
/**
 * Include the TGM_Plugin_Activation class.
 * Register the required plugins for this theme.
 */

require get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php';
 
add_action( 'tgmpa_register', 'quidus_register_required_plugins' );

function quidus_register_required_plugins() {

















































	$theme_text_domain = 'quidus';

	$config = array(
		'domain'       		=> 'quidus',        	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins',  // Menu slug
        'dismissable'  => true,  							// Dismissable
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> true,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', 'quidus' ),
			'menu_title'                       			=> __( 'Install Plugins', 'quidus' ),
			'installing'                       			=> __( 'Installing Plugin: %s', 'quidus' ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', 'quidus' ),
			'notice_can_install_required'     			=> _n_noop( 'This theme highly recommends the following plugin: %1$s.', 'This theme highly recommends the following plugins: %1$s.', 'quidus' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends following free plugin: %1$s. enjoy:)', 'This theme recommends following free plugins: %1$s. enjoy:)', 'quidus' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'quidus' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following highly recommended plugin is currently inactive: %1$s.', 'The following highly recommended plugins are currently inactive: %1$s.', 'quidus' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'quidus' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'quidus' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'quidus' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'quidus' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'quidus' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'quidus' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', 'quidus' ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', 'quidus' ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', 'quidus' ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);
	
    $plugins = array(


        // This is an example of how to include a plugin from a private repo in your theme.
        array(
            'name'               => 'Kirki - Advanced WordPress Customizer (enables most of theme options in live customizer), ', // The plugin name.
            'slug'               => 'Kirki', // The plugin slug (typically the folder name).
            'source'             => 'https://downloads.wordpress.org/plugin/kirki.2.0.5.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),
		
        // This is an example of how to include a plugin from a private repo in your theme.
        array(
            'name'               => 'SiteOrigin Page Builder', // The plugin name.
            'slug'               => 'SO Page Builder', // The plugin slug (typically the folder name).
            'source'             => 'https://downloads.wordpress.org/plugin/siteorigin-panels.2.2.2.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),
		
        // This is an example of how to include a plugin from a private repo in your theme.
        array(
            'name'               => 'SiteOrigin Widgets Bundle', // The plugin name.
            'slug'               => 'SO Widgets Bundle', // The plugin slug (typically the folder name).
            'source'             => 'https://downloads.wordpress.org/plugin/so-widgets-bundle.1.5.4.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),
		
        // This is an example of how to include a plugin from a private repo in your theme.
        array(
            'name'               => 'Contact Form 7', // The plugin name.
            'slug'               => 'Contact Form 7', // The plugin slug (typically the folder name).
            'source'             => 'https://downloads.wordpress.org/plugin/contact-form-7.4.3.1.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),
		
        array(
            'name'               => 'Top 10 (popular posts widget)', // The plugin name.
            'slug'               => 'Top 10', // The plugin slug (typically the folder name).
            'source'             => 'https://downloads.wordpress.org/plugin/top-10.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),
 
    );

	tgmpa( $plugins, $config );

}