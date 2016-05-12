<?php 

function load_cta_styles() { 

	global $quidus_color_special;
	global $quidus_color_main;
	global $quidus_color_secondary;
?>

<style type="text/css">

.CTA-wrapper {
display:table-cell;
position: relative;
transform:translateX(-50%);
}

.CTA-wrapper > div {
display:inline-block;
position: relative;
vertical-align:middle;
}

.CTA-info-wrapper {
margin-right:6em;
}

.CTA-button-1 {
color: #FFF !important;
cursor: pointer;
font-weight: 700;
padding: 0.5em 1.5em;
border: 1px solid transparent;
background: <?php echo esc_attr($quidus_color_special); ?>;
text-transform: capitalize;
box-shadow: 0px 1px 2px rgba(50, 50, 50, 0.1);
}

.CTA-button-1:hover {
background: <?php echo esc_attr($quidus_color_main); ?>;
border-bottom: 1px solid transparent !important;
}

.CTA-button-2 {
color: #FFF !important;
cursor: pointer;
font-weight: 700;
padding: 0.5em 1.5em;
border: 1px solid transparent;
background: <?php echo esc_attr($quidus_color_main); ?>;
text-transform: capitalize;
box-shadow: 0px 1px 2px rgba(50, 50, 50, 0.1);
}

.CTA-button-2:hover {
background: <?php echo esc_attr($quidus_color_special); ?>;
border-bottom: 1px solid transparent !important;
}

@media screen and (max-width: 955px) {

	.CTA-wrapper {
		text-align:center;
	}
	
	.CTA-info-wrapper {
		margin-right:0;
	}
	
	.CTA-wrapper > div {
		display:block;
		position: relative;
	}

        .CTA-buttons-wrapper a {
            display:block;
        }

        .CTA-button-2 {
            margin-top:0.5em;
        }

}

@media screen and (max-width: 480px) {

	.CTA-buttons-wrapper {
	padding-top:0.4em;
	}

}

</style>

<?php

}

add_action('wp_head', 'load_cta_styles');

?>