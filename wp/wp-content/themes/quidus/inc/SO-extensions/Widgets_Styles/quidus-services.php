<?php 

function load_services_styles() { 

	global $quidus_color_special;
	global $quidus_color_main;
	global $quidus_color_secondary;
?>

<style type="text/css">

.quidus-single-service {
text-align:center;
}

.single-service-icon span {
font-size:2em;
color:<?php echo esc_attr($quidus_color_main); ?>;
width:1em;
height:1em;
line-height:1em;
}

</style>

<?php

}

add_action('wp_head', 'load_services_styles');

?>