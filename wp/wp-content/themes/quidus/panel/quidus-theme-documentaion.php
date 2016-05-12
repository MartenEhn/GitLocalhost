<?php 

	function quidus_custom_admin_colors() {
	echo '<style type="text/css">

		.dashboard-text {
		color:#515151;
		font-size:16px;
		}

		.dashboard-title {
		font-size:24px;
		color: #444;
		font-family: "Open Sans",sans-serif;
		}
		.dashboard-wrapper .grid {
		width: 100%;
		max-width: 1240px;
		min-width: 755px;
		margin: 0 auto;
		overflow: hidden;
		}
		.dashboard-wrapper .grid:after {
		content: "";
		display: table;
		clear: both;
		}

		.dashboard-wrapper .grid-pad {
		padding-top: 10px;
		padding-left: 0px; /* grid-space to left */
		padding-right: 0px; /* grid-space to right: (grid-space-left - column-space) e.g. 20px-20px=0 */
		}

		.dashboard-wrapper .col-1-4 {
		float: left;
		padding-right: 2%; 
		width: 23%;  
		text-align: center;
		}

		.dashboard-wrapper .col-1-3 {
		float: left;
		padding-right: 2%;
		width: 31.333%;
		text-align: center;
		}

		.dashboard-wrapper .fa { 
		font-size: 30px;
		color: #8bc34a;
		}

		.dashboard-wrapper .senswp .fa { font-size: 30px !important; }

		.dashboard-wrapper .col-1-4 h4 {
		font-size: 16px;
		}

		.dashboard-wrapper button,
		.dashboard-wrapper input[type="button"],
		.dashboard-wrapper input[type="reset"],
		.dashboard-wrapper input[type="submit"] {
		border: 2px solid #8bc34a;
		background: #8bc34a;
		box-shadow: none;
		font-size: 16px;
		line-height: 1;
		font-weight: 400;
		padding: 1em 2em 1em;
		text-shadow: none;
		color: #fff;
		cursor: pointer;
		}

		.dashboard-wrapper button:hover,
		.dashboard-wrapper input[type="button"]:hover,
		.dashboard-wrapper input[type="reset"]:hover,
		.dashboard-wrapper input[type="submit"]:hover {
		border-color: #8bc34a;
		}

		.dashboard-wrapper button:focus,
		.dashboard-wrapper input[type="button"]:focus,
		.dashboard-wrapper input[type="reset"]:focus,
		.dashboard-wrapper input[type="submit"]:focus,
		.dashboard-wrapper button:active,
		.dashboard-wrapper input[type="button"]:active,
		.dashboard-wrapper input[type="reset"]:active,
		.dashboard-wrapper input[type="submit"]:active {
		border-color: #8bc34a;
		}

		.dashboard-wrapper a { 
		text-decoration: none;
		}

		.dashboard-wrapper .custom-box {
		border: 1px solid #dadada;
		border-radius: 5px;
		cursor: pointer;
		margin-bottom: 30px;
		overflow: hidden;
		position: relative;
		width: 100%;
		}

		.dashboard-wrapper .custom-box:before {
		content: "";
		display: block;
		padding-top: 90%;
		}

		.dashboard-wrapper .home-collection {
		background: none repeat scroll 0 0 #fff;
		}
		.c
		ustom-content {
		bottom: 0;
		color: white;
		left: 0;
		position: absolute;
		right: 0;
		top: 0;
		}

		.custom-content div {
		display: table;
		height: 100%;
		width: 100%;
		}

		.custom-content span {
		color: #999;
		display: table-cell;
		padding: 20px;
		text-align: center;
		vertical-align: middle;
		}

		.custom-content span > .fa {
		color: #404040;
		display: block;
		font-size: 50px;
		margin: 0 auto;
		padding: 0 0 20px;
		transition: all 0.2s ease-in-out 0s;
		}

		.custom-content:hover .fa {
		color: #8bc34a;
		font-size: 58px;
		transition: all 0.2s ease-in-out 0s;
		}

		.custom-content span > h5 {
		color: #404040;
		font-size: 18px;
		line-height: 20px;
		margin: 0;
		}

		.custom-content span > p {
		font-size: 15px;
		margin-bottom: 0;
		}

		@media handheld, only screen and (max-width: 800px) {
		.dashboard-wrapper .grid {
			width: 100%;
			min-width: 0;
			margin-left: 0px;
			margin-right: 0px;
			padding-left: 0px; /* grid-space to left */
			padding-right: 10px; /* grid-space to right: (grid-space-left - column-space) e.g. 20px-10px=10px */ 
		}

		.dashboard-wrapper .col-1-4 {
			float: none;
			padding-right: 0px;
			width: 100%;
			text-align: center;
		}

		.dashboard-wrapper .col-1-3 {
			float: none;
			padding-right: 0px;
			width: 100%;
			text-align: center; 
			padding-bottom:30px;
		}
		}

	}    
			
	</style>'; 
	
	}

	add_action('admin_head', 'quidus_custom_admin_colors'); 
     
    add_action('admin_menu', 'quidus_setup_menu'); 
     
    function quidus_setup_menu(){
            add_theme_page( __( 'Quidus Theme Support', 'quidus' ), __( 'Quidus Theme Support', 'quidus' ), 'manage_options', 'quidus-setup', 'quidus_init' );
    } 
	
 	function quidus_init(){
	
	 	echo '<div class="dashboard-wrapper"><div style="width:100%; text-align:center; padding-top:30px;"><div class="col-1-1"><a href="//qerrapress.com/"><img style="width:48%;border:1px solid rgba(60,60,60,0.1); margin:0 auto;" src="//i58.tinypic.com/207vo8z.png" /></a>';
        echo "</div></div>";
		
	 	echo '<div class="grid grid-pad"><div class="col-1-1"><h1 style="text-align: center;line-height:30px;text-align:center;">';
		printf( __('Thank You For Using Quidus', 'quidus' ));
        echo "</h1></div></div>";
	
		echo '<div class="grid grid-pad" style="padding-top:0;padding-bottom: 30px; margin-bottom: 30px; text-align:center;" >';
		
		echo '<div class="col-1-1"><h2 class="dashboard-title">'; 
		printf( __('Support Forum', 'quidus' ));
        echo "</h2>";  
		
		echo '<p class="dashboard-text">';
		printf( __('Visit our support forum if you need help with our theme.', 'quidus' ));  
		echo "</p>";
		
		echo '<a href="//qerrapress.com/forums/" target="_blank"><button>';
		printf( __('Forum', 'quidus' ));
		echo "</button></a></div></div>";
		 	 
    }
?>