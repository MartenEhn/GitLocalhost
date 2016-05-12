<?php 

function load_team_styles() { 

	global $quidus_color_special;
	global $quidus_color_main;
	global $quidus_color_secondary;
?>

<style type="text/css">

.team-grid-main .grid-item {
float:left;
padding:0;
}

.grid-item img {
width:100%;
position: relative; 
}

.team-member-info-wrap-inner {
width:100%;
height:100%;
position:absolute;
background: <?php echo esc_attr($quidus_color_special); ?>;
opacity:1;
z-index:2;
transition:0.5s;
-webkit-transition:0.5s;
-moz-transition:0.5s;
opacity:0;
padding:1.5em;
}

.team-member-info-wrap-inner:hover {
width:100%;
height:100%;
position:absolute;
background: <?php echo esc_attr($quidus_color_special); ?>;
opacity:1;
z-index:2;
transition:0.5s;
-webkit-transition:0.5s;
-moz-transition:0.5s;
opacity:1;
}

.team-member-info-wrap {
position:absolute;
z-index:3;
top:50%;
left:50%;
transform:translate(-50%, -50%);
-webkit-transform:translate(-50%, -50%);
-moz-transform:translate(-50%, -50%);
color:#fff;
text-align:center;
margin-left:-0.5em;
}

.team-member-info-wrap a span {
font-size:3rem;
padding-right:0.25em;
transition:0.5s;
-webkit-transition:0.5s;
-moz-transition:0.5s;
}

.team-member-info-wrap a:hover span {
color:#fff !important;
transition:0.5s;
-webkit-transition:0.5s;
-moz-transition:0.5s;
}

.team-member-name,
.team-member-pos-title {
color:#fff;
}

.team-member-pos-title {
padding-bottom:0.5em;
}

.team-member-info-wrap a span {
margin-top:0.25em;
}


</style>

<?php

}

add_action('wp_head', 'load_team_styles');

?>