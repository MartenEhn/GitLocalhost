<?php 

function load_testimonials_styles() { 

	global $quidus_color_special;
	global $quidus_color_main;
	global $quidus_color_secondary;
?>

<style type="text/css">

.quidus-testimonial {
padding:1.5em;
border:1px solid rgba(60,60,60,0.15);
}

.quidus-testimonial-text p {
font-size: 1.8rem;
}

.testimonial-credentials {
display: inline-block;
float:left;
}

.testimonial-icon {
display: inline-block;
margin-right: 1em;
margin-bottom:0.75em;
float:left;
}

.testimonial-credentials h5 {
padding-top:0;
text-transform:uppercase;
margin-bottom:0;
}

.testimonial-credentials p {
padding-bottom:0;
}

.testimonial-icon span {
font-size: 25px;
width:50px;
height:50px;
line-height:50px;
text-align:center;
border-radius:100%;
-moz-border-radius:100%;
-webkit-border-radius:100%;
background: <?php echo esc_attr($quidus_color_special); ?>
}

.quidus-testimonial-footer:after {
     visibility: hidden;
     display: block;
     font-size: 0;
     content: " ";
     clear: both;
     height: 0;
     }

</style>

<?php

}

add_action('wp_head', 'load_testimonials_styles');

?>