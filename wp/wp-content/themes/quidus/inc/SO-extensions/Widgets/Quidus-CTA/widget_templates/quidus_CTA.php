<?php

$CTA_header_color = array();
$CTA_description_color = array();
$CTA_button_1 = array();
$CTA_button_2 = array();

if (!empty($instance['CTA_header_color'])) {
$CTA_header_color[] = 'color:' . esc_attr($instance['CTA_header_color']); 
}

if (!empty($instance['CTA_description_color'])) {
$CTA_description_color[] = 'color:' . esc_attr($instance['CTA_description_color']); 
}

if (!empty($instance['CTA_button_1_color'])) {
$CTA_button_1[] = 'color:' . esc_attr($instance['CTA_button_1_color']); 
}

if (!empty($instance['CTA_button_1_background_color'])) {
$CTA_button_1[] = 'background:' . esc_attr($instance['CTA_button_1_background_color']); 
}

if (!empty($instance['CTA_button_2_background_color'])) {
$CTA_button_2[] = 'background:' . esc_attr($instance['CTA_button_2_background_color']); 
}

if (!empty($instance['CTA_button_2_color'])) {
$CTA_button_2[] = 'color:' . esc_attr($instance['CTA_button_2_color']); 
}
	
?>

<div class="CTA-wrapper" >

	<div class="CTA-info-wrapper">
		<h3 <?php if(!empty($CTA_header_color)) echo 'style="'.implode(';', $CTA_header_color).'"' ?> class="CTA-header"><?php echo wp_kses_post($instance['CTA-header']); ?></h3>
		<p <?php if(!empty($CTA_description_color)) echo 'style="'.implode(';', $CTA_description_color).'"' ?> class="CTA-description"><?php echo wp_kses_post($instance['CTA-description']); ?></p>
	</div>
	
	<div class="CTA-buttons-wrapper">
		<?php if ($instance['CTA-button-1-text'] != '') : ?><a <?php if ($instance['CTA-button-1-nw'] == true) { echo "target='_blank'"; } ?> <?php if(!empty($CTA_button_1)) echo 'style="'.implode(';', $CTA_button_1).'"' ?> class="CTA-button-1" href="<?php echo sow_esc_url_raw($instance['CTA-button-1-url']); ?>"><?php echo wp_kses_post($instance['CTA-button-1-text']); ?></a><?php endif; ?>
		<?php if ($instance['CTA-button-2-text'] != '') : ?><a <?php if ($instance['CTA-button-2-nw'] == true) { echo "target='_blank'"; } ?> <?php if(!empty($CTA_button_2)) echo 'style="'.implode(';', $CTA_button_2).'"' ?> class="CTA-button-2" href="<?php echo sow_esc_url_raw($instance['CTA-button-2-url']); ?>"><?php echo wp_kses_post($instance['CTA-button-2-text']); ?></a><?php endif; ?>
	</div>

</div>