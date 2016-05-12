<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( get_theme_mod('quidus_site_favicon') != '' ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('quidus_site_favicon')); ?>" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<?php 

        get_template_part( 'navigation/nav' );

	?>
	
	<?php if ( is_home() and get_theme_mod( 'quidus_header_image' ) ) : ?>

		<div class="scrollme parallax-wrapper">
		
		<?php if ( get_theme_mod('quidus_enable_home_header_text', 'default') == true) : ?>
		
			<div class="home-header-text-wrapper animateme" style="z-index:12;" data-when="span" data-easing="linear" data-from="0" data-to="1" data-opacity="0"><?php if ( get_theme_mod('quidus_enable_home_header_text_background', false) == true) : ?><div class="text-box-background" style="z-index:-1;"></div><?php endif; ?>
				<h1 class="home-header-text entry-title"><?php echo esc_html(get_theme_mod('quidus_home_header_heading', 'Frank L. Burton')); ?></h1>
				<p><?php echo esc_html(get_theme_mod('quidus_home_header_description', 'I am a professional web developer from New York.')); ?></p>
			</div>
			
		<?php endif; ?>
		
			<img style="z-index:-1; height:auto; width:100%;" class="animateme" data-when="span" data-easing="linear" data-from="0" data-to="1" data-opacity="1" data-translateY="
			<?php if ( get_theme_mod('quidus_header_image_parallax_translate') == '' ) : echo "225"; else : echo esc_js(get_theme_mod('quidus_header_image_parallax_translate')); endif; ?>" 
			src="<?php echo esc_url( get_theme_mod( 'quidus_header_image' ) ); ?>" />
		
		</div>
		
	<?php endif; ?>
	
	<div id="page" class="hfeed site">

		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'quidus' ); ?></a>
		
		<?php
		
		if( class_exists( 'Kirki' ) ) {
		
		global $sl;
		
		if ( $sl == '2 Columns - Left Sidebar' or $sl == '3 Columns') {
		 get_sidebar();
		} elseif ( $sl == '3 Columns - Sidebars Align Left') {
			get_sidebar();
			get_sidebar('right');
		}
		
		} else {
		
		get_sidebar();
		
		}
		
		?>

		<div id="content" class="site-content">
		
