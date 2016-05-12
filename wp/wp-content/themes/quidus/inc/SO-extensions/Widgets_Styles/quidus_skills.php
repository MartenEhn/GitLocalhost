<?php 

function load_skills_styles() { 

	global $quidus_color_special;
	global $quidus_color_main;
	global $quidus_color_secondary;
?>

<style type="text/css">

.skill_style_1 .skill-percentage {
height:2.5em;
box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.25);
background: <?php echo esc_attr($quidus_color_main); ?>;
}

.skill_style_1 .skill-percentage-count {
position:absolute;
margin-left:1em;
margin-top:0.41em;
font-weight:bold;
color:#fff;
}

.skill_style_2 {
text-align:center;
}

.skill_style_2 .skill-percentage-wrap {
width: 100%;
text-align: center;
height: 190px;
position: relative;
}

.skill_style_2 .skill-percentage {
box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.25);
background: <?php echo esc_attr($quidus_color_main); ?>;
display: block;
left: 0px;
position: absolute;
left: 0px;
bottom: 0px;
height: 0px;
width: 100%;
display: block;
}

.skill_style_2 .skill-percentage-count {
position:absolute;
font-weight:bold;
color:#fff;
bottom:0.5em;
z-index:2;
margin-left:-0.65em;
font-size:1.75em;
}

</style>

<?php

}

add_action('wp_head', 'load_skills_styles');

?>