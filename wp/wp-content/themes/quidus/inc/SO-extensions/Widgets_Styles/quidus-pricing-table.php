<?php 

function load_pricing_table_styles() { 

	global $quidus_color_special;
	global $quidus_color_main;
	global $quidus_color_secondary;
?>

<style type="text/css">

.quidus-pricing-table {
text-align:center;
padding:0.5em;
border:1px solid rgba(60, 60, 60, 0.15);
color:#fff;
background: <?php echo esc_attr($quidus_color_secondary); ?>;
}

.quidus-pricing-table h5,
.quidus-pricing-table h1,
.quidus-pricing-table h6,
.quidus-pricing-table p,
.quidus-pricing-table a {
color:#fff;
}

.pricing-table-header {
padding-bottom:2.5em;
padding-top:1.5em;
background: <?php echo esc_attr($quidus_color_main); ?>;
}

.special_table .pricing-table-header {
background: <?php echo esc_attr($quidus_color_special); ?>;
box-shadow: 0px 0px 2px rgba(50, 50, 50, 0.15);
}

.plan-title {
text-transform:uppercase;
text-shadow: 0px 1px rgba(50, 50, 50, 0.15);
}

.plan-subtitle {
padding-bottom:0.5em;
}

.plan-pricing {
padding-top:0.25em;
}

.pricing-table-body {
padding:2.5em 1.5em 1.3em 1.5em;
}

.plan-footer {
padding:1.5em 0;
}

.plan-button {
color: #FFF;
cursor: pointer;
font-size: 1.6rem;
font-weight: 700;
padding: 0.5em 1.5em;
border: 1px solid rgba(60,60,60,0.15);
background:<?php echo esc_attr($quidus_color_main); ?>;
text-transform:capitalize;
}

.plan-button:hover,
.plan-button:focus {
color: #FFF !important;
border-bottom: 1px solid rgba(60,60,60,0.15) !important;
background:<?php echo esc_attr($quidus_color_special); ?>;
}

.plan-feature {
padding:0.5em 0;
margin:0 auto;
border-bottom: 1px solid <?php echo esc_attr($quidus_color_main); ?>;
}

.pricing-table-body .plan-feature:last-child {
border-bottom: none;
}

</style>

<?php

}

add_action('wp_head', 'load_pricing_table_styles');

?>