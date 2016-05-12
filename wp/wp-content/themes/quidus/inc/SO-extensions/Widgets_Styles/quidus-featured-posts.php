<?php 

function load_featured_posts_styles() { 

	global $quidus_color_special;
	global $quidus_color_main;
	global $quidus_color_secondary;
	
?>

<style type="text/css">

.quidus-featured-posts {
width: 100%;
}

.quidus-featured-post {
float:left;
margin-bottom:1.5em;
position:relative;
width: 100%;
overflow:hidden;
height:60vh;
background-size:cover;
background-repeat: no-repeat;
background-position: center center;
}

.featured-post-inner {
    width: 100%;
    position: relative;
    transition: all 0.5s ease 0s;
	height:100%;
	background:rgba(50, 50, 50, 0.3);
}

.quidus-featured-post .featured-post-image-wrapper {
position:absolute;
width:100%;
}

.quidus-featured-post .featured-post-image-wrapper img {
width: 100%;
}

.featured-post-info {
bottom:0;
padding: 1.5em;
display: block;
color:#fff;
z-index: 20;
position: absolute;
}

.featured-post-info a[rel="category tag"] {
padding:0.375em 0.75em;
margin-top:0.5em;
background:<?php echo esc_attr($quidus_color_special); ?>;
color:<?php echo esc_attr($quidus_color_main); ?>;
display:inline-block;
margin-left:0.25em;
}

.featured-categories {
margin-left:-0.25em;
}

.featured-post-info a[rel="category tag"]:hover {
color:#fff;
}

.quidus-featured-posts-so strong {
padding-bottom: 0.75em;
}

.quidus-featured-post h2 {
padding-top:0;
}

.quidus-featured-post h2 a {
color:#fff;
}

.quidus-featured-post .sharedaddy {
display:none;
}

.clear{ clear:both; height:0px; width:0px; display:table; content:"";}

@media screen and (min-width: 768px) and (max-width: 955px) {

.quidus-featured-post .featured-post-image-wrapper {
position:absolute;
width:150%;
}

.quidus-featured-post .featured-post-image-wrapper img {
width: 150%;
}

}

@media screen and (min-width: 480px) and (max-width: 768px) {

.quidus-featured-post .featured-post-image-wrapper {
position:absolute;
width:175%;
}

.quidus-featured-post .featured-post-image-wrapper img {
width: 175%;
}

}

@media screen and (max-width: 480px) {

.quidus-featured-post .featured-post-image-wrapper {
position:absolute;
width:200%;
}

.quidus-featured-post .featured-post-image-wrapper img {
width: 200%;
}

}

</style>

<?php

}

add_action('wp_head', 'load_featured_posts_styles');

?>