<?php 

function load_facts_styles() { 

	global $quidus_color_special;
	global $quidus_color_main;
	global $quidus_color_secondary;
	
?>

<style type="text/css">

.facts-main .grid-item {
float:left;
padding:0.75em;
}

.single_fact_icon_style_1 {
margin:0 auto;
position:relative;
display:inline-block;
left:50%;
transform:translateX(-50%);
}

.single_fact_icon_style_1 .single-fact-icon {
float:left;
margin-right:1em;
padding:0.5em;
}

.single_fact_icon_style_1 .single-fact-info {
float:left;
}

.single_fact_icon_style_1 .single-fact-icon span {
height:50px;
line-height:50px;
width:100%;
font-size:50px;
color:<?php echo esc_attr($quidus_color_special); ?>
}

.single_fact_icon_style_1 h3,
.single_fact_icon_style_1 h5 {
padding-top:0;
}

.single_fact_icon_style_2 {
text-align:center;
position:relative;
left:50%;
transform:translateX(-50%);
}

.single_fact_icon_style_2 .single-fact-icon {
display:block;
padding:0.5em;
}

.single_fact_icon_style_2 .single-fact-info {
display:block;
}

.single_fact_icon_style_2 .single-fact-icon span {
height:50px;
line-height:50px;
width:50px;
font-size:50px;
color:<?php echo esc_attr($quidus_color_special); ?>
}

.single_fact_icon_style_2 h3,
.single_fact_icon_style_2 h5 {
padding-top:0;
}

@media screen and (max-width: 480px) {
	
	.facts-main .grid-item {
	padding:0.5em;
	}
	
	.single_fact_icon_style_1 .single-fact-icon {
		float:left;
		margin-right:0.75em;
		padding:0.5em 0 0.5em 0.5em;
	}

}

</style>

<?php

}

add_action('wp_head', 'load_facts_styles');

?>