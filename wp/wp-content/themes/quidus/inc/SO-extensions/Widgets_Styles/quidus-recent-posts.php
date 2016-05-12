<?php 

function load_recent_posts_styles() { 

	global $quidus_color_special;
	global $quidus_color_main;
	global $quidus_color_secondary;
?>

<style type="text/css">

.quidus-recent-posts-so {
margin-top:-0.75em;
}

.quidus-recent-post {
float:left;
padding:0.75em;
}

.quidus-recent-posts-so strong {
padding-bottom: 0.25em;
}

.quidus-recent-post h4 {
margin-bottom: 0.65em;
padding-top:0;
}

.quidus-recent-post .sharedaddy {
display:none;
}

.clear{ clear:both; height:0px; width:0px; display:table; content:"";}

.quidus-recent-post p {
padding:0;
}

.quidus-recent-post.recent_post_style_1 a[rel="category tag"] {
padding:0.375em 0.75em;
margin-top:0.5em;
background:<?php echo esc_attr($quidus_color_special); ?>;
color:<?php echo esc_attr($quidus_color_main); ?>;
display:inline-block;
margin-left:0.25em;
}

.recent-post-categories {
margin-left:-0.25em;
}

.quidus-recent-post.recent_post_style_1 a[rel="category tag"]:hover {
color:#fff;
}

.recent_post_style_2 .recent-post-info {
padding:0.75em;
position:relative;
background:#fff;
margin:-2.25em 0.75em 0;
box-shadow: 0px 0px 7px rgba(50, 50, 50, 0.2);
text-align:center;
transition:0.5s;
-webkit-transition:0.5s;
-moz-transition:0.5s;
}

.recent_post_style_2:hover .recent-post-info {
box-shadow: 0px 0px 10px rgba(50, 50, 50, 0.25);
}

.recent_post_style_3 .recent-post-info {
padding:0.75em;
transition:0.5s;
-webkit-transition:0.5s;
-moz-transition:0.5s;
color:#fff;
z-index:20;
width:100%;
height:100%;
background:rgba(50, 50, 50, 0.35);
    position: relative;
}

.recent_post_style_3 .recent-post-info h5 {
color:#fff;
}

.recent_post_style_3 .recent-post-info a {
color:#fff;
}

.recent_post_style_3 {
padding:0;
height:40vh;
overflow:hidden;
background-size:cover;
background-repeat: no-repeat;
background-position: center center;
transition:0.5s;
-webkit-transition:0.5s;
-moz-transition:0.5s;
}

.recent_post_style_3:hover  .recent-post-info {
background:rgba(50, 50, 50, 0.75);
}

.recent_post_style_3 .recent-post-inner {
    width: 100%;
    position: relative;
    transition: all 0.5s ease 0s;
	height:100%;
	overflow:hidden;
}

.recent_post_style_3 .recent-post-image-wrapper {
position:absolute;
height:100%;
width:auto;
overflow:hidden;
display: block; 
}

.recent_post_style_3 .recent-post-image-wrapper img {
height:100%;
width:auto;
display: block; 
overflow:hidden;
}

.recent_post_style_4 .recent-post-info {
padding:0.75em;
transition:0.75s;
-webkit-transition:0.75s;
-moz-transition:0.75s;
z-index:20;
width:100%;
height:100%;
background:#fff;
position: relative;
box-shadow: 0px 0px 7px rgba(50, 50, 50, 0.2);
opacity:0;
}

.recent_post_style_4 {
padding:0;
height:40vh;
overflow:hidden;
background-size:cover;
background-repeat: no-repeat;
background-position: center center;
transition:0.5s;
-webkit-transition:0.5s;
-moz-transition:0.5s;
}

.recent_post_style_4:hover  .recent-post-info {
opacity:1;
transition:0.75s;
-webkit-transition:0.75s;
-moz-transition:0.75s;
}

.recent_post_style_4 .recent-post-inner {
    width: 100%;
    position: relative;
    transition: all 0.5s ease 0s;
	height:100%;
	overflow:hidden;
padding:0.375em;
}

.recent_post_style_4 .recent-post-image-wrapper {
position:absolute;
height:100%;
width:auto;
overflow:hidden;
display: block; 
}

.recent_post_style_4 .recent-post-image-wrapper img {
height:100%;
width:auto;
display: block; 
overflow:hidden;
}

.recent_post_style_5 .recent-post-info {
padding:0.75em;
transition:0.75s;
-webkit-transition:0.75s;
-moz-transition:0.75s;
z-index:20;
top:50%;
left:50%;
transform:translate(-50%, -50%);
-webkit-transform:translate(-50%, -50%);
-moz-transform:translate(-50%, -50%);
background:#fff;
position: relative;
}

.recent_post_style_5 {
padding:0;
height:40vh;
overflow:hidden;
background-size:cover;
background-repeat: no-repeat;
background-position: center center;
transition:0.5s;
-webkit-transition:0.5s;
-moz-transition:0.5s;
}

.recent_post_style_5 .recent-post-inner {
    width: 100%;
    position: relative;
    transition:0.25s;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	height:100%;
	overflow:hidden;
	box-shadow: 0px 0px 7px rgba(50, 50, 50, 0.2);
	padding:0.75em;
	opacity:0;
    -ms-transform: scale(0.9,0.9); /* IE 9 */
    -webkit-transform:scale(0.9,0.9); /* IE 9 */
    transform: scale(0.9,0.9); /* IE 9 */
}


.recent_post_style_5 .recent-post-inner:hover {
    transition:0.25s;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	opacity:1;
    -ms-transform: scale(1,1); /* IE 9 */
    -webkit-transform: scale(1,1); /* IE 9 */
    transform: scale(1,1); /* IE 9 */
}

.recent_post_style_5 .recent-post-image-wrapper {
position:absolute;
height:100%;
width:auto;
overflow:hidden;
display: block; 
}

.recent_post_style_5 .recent-post-image-wrapper img {
height:100%;
width:auto;
display: block; 
overflow:hidden;
}

.recent_post_style_6 .recent-post-info {
padding:0.75em;
transition:0.75s;
-webkit-transition:0.75s;
-moz-transition:0.75s;
z-index:20;
top:50%;
left:50%;
transform:translate(-50%, -50%);
-webkit-transform:translate(-50%, -50%);
-moz-transform:translate(-50%, -50%);
position: absolute;
text-align:center;
}

.recent_post_style_6 {
padding:0;
height:40vh;
overflow:hidden;
background-size:cover;
background-repeat: no-repeat;
background-position: center center;
transition:0.5s;
-webkit-transition:0.5s;
-moz-transition:0.5s;
}

.recent_post_style_6 .recent-post-outer {
    width: 100%;
    position: relative;
    transition:0.25s;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	height:100%;
	overflow:hidden;
	box-shadow: 0px 0px 7px rgba(50, 50, 50, 0.2);
	margin:0.375em;
	opacity:0;
	transform: skew(1deg, 1deg);
}


.recent_post_style_6 .recent-post-outer:hover {
    transition:0.25s;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	opacity:1;
	margin:0;
	transform: skew(0deg, 0deg);
}

.recent_post_style_6 .recent-post-inner {
    width: 100%;
    position: absolute;
    transition:0.25s;
	height:100%;
	overflow:hidden;
	box-shadow: 0px 0px 7px rgba(50, 50, 50, 0.2);
	opacity:0;
	background:#fff;
}


.recent_post_style_6 .recent-post-inner:hover {
    transition:0.25s;
	opacity:1;
}

.recent_post_style_6 .recent-post-image-wrapper {
position:absolute;
height:100%;
width:auto;
overflow:hidden;
display: block; 
}

.recent_post_style_6 .recent-post-image-wrapper img {
height:100%;
width:auto;
display: block; 
overflow:hidden;
}

@media screen and (min-width: 768px) and (max-width: 955px) {

.recent_post_style_3 {
height:45vh;
}

.recent_post_style_3 .recent-post-image-wrapper {
position:absolute;
height:100%;
width:auto;
}

.recent_post_style_3 .recent-post-image-wrapper img {
height:100%;
width:auto;
}

.recent_post_style_4 {
height:45vh;
}

.recent_post_style_4 .recent-post-image-wrapper {
position:absolute;
height:100%;
width:auto;
}

.recent_post_style_4 .recent-post-image-wrapper img {
height:100%;
width:auto;
}

}

@media screen and (min-width: 480px) and (max-width: 768px) {

.recent_post_style_3 {
height:50vh;
}

.recent_post_style_3 .recent-post-image-wrapper {
position:absolute;
height:100%;
width:auto;
}

.recent_post_style_3 .recent-post-image-wrapper img {
height:100%;
width:auto;
}

.recent_post_style_4 {
height:50vh;
}

.recent_post_style_4 .recent-post-image-wrapper {
position:absolute;
height:100%;
width:auto;
}

.recent_post_style_4 .recent-post-image-wrapper img {
height:100%;
width:auto;
}

}

@media screen and (max-width: 480px) {

.recent_post_style_3 {
height:50vh;
}

.recent_post_style_3 .recent-post-image-wrapper {
position:absolute;
height:100%;
width:auto;
}

.recent_post_style_3 .recent-post-image-wrapper img {
height:100%;
width:auto;
}

.recent_post_style_4 {
height:50vh;
}

.recent_post_style_4 .recent-post-image-wrapper {
position:absolute;
height:100%;
width:auto;
}

.recent_post_style_4 .recent-post-image-wrapper img {
height:100%;
width:auto;
}

.recent_post_style_1,
.recent_post_style_2 {
padding:0 0 1em;
}

}

</style>

<?php

}

add_action('wp_head', 'load_recent_posts_styles');

?>