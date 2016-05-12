<?php

	switch ($instance['columns_desktop']) {
		case 1:
			$services_desktop_layout = 'grid-item--1cl';
			break;
		case 2:
			$services_desktop_layout = 'grid-item--2cl';
			break;
		case 3:
			$services_desktop_layout = 'grid-item--3cl';
			break;
		case 4:
			$services_desktop_layout = 'grid-item--4cl';
			break;
		case 5:
			$services_desktop_layout = 'grid-item--5cl';
			break;
		case 6:
			$services_desktop_layout = 'grid-item--6cl';
			break;
	}
	
	switch ($instance['columns_tablet_large']) {
		case 1:
			$services_tl_layout = 'grid-item--1cl--tl';
			break;
		case 2:
			$services_tl_layout = 'grid-item--2cl--tl';
			break;
		case 3:
			$services_tl_layout = 'grid-item--3cl--tl';
			break;
		case 4:
			$services_tl_layout = 'grid-item--4cl--tl';
			break;
	}
	
	switch ($instance['columns_tablet_small']) {
		case 1:
			$services_ts_layout = 'grid-item--1cl--ts';
			break;
		case 2:
			$services_ts_layout = 'grid-item--2cl--ts';
			break;
		case 3:
			$services_ts_layout = 'grid-item--3cl--ts';
			break;
	}

	$icon_styles = array();
	if(!empty($instance['single_service_font_size'])) $icon_styles[] = 'font-size: '.wp_kses_post($instance['single_service_font_size']);
	if(!empty($instance['single_service_color'])) $icon_styles[] = 'color: '.esc_attr($instance['single_service_color']);
	if(!empty($instance['single_service_width'])) $icon_styles[] = 'width: '.wp_kses_post($instance['single_service_width']);
	if(!empty($instance['single_service_height'])) $icon_styles[] = 'height: '.wp_kses_post($instance['single_service_height']);
	if(!empty($instance['single_service_line_height'])) $icon_styles[] = 'line-height: '.wp_kses_post($instance['single_service_line_height']); 

	$single_service_title_color = array();
	$single_service_description_color = array();

	if (!empty($instance['single_service_title_color'])) {
	$single_service_title_color[] = 'color:' . esc_attr($instance['single_service_title_color']); 
	}

	if (!empty($instance['single_service_description_color'])) {
	$single_service_description_color[] = 'color:' . esc_attr($instance['single_service_description_color']); 
	}
		
	?>
	
	<div class="quidus-widget-wrap">

		<?php foreach($instance['services'] as $service) :
		
			$services_number++;
			
			?>
			
			<div class="grid-item <?php echo $services_desktop_layout . ' ' . $services_tl_layout . ' ' . $services_ts_layout; ?>">

				<div class="quidus-single-service service_style_1" >

					<div class="single-service-icon" >
						<?php echo siteorigin_widget_get_icon( $service['single_service'], $icon_styles ); ?>
					</div>
					
					<div class="single-service-text">
					
						<h4 <?php if(!empty($single_service_title_color)) echo 'style="'.implode(';', $single_service_title_color).'"' ?> class="single-service-title"><?php echo wp_kses_post($service['single_service_title']); ?></h4>
						<p <?php if(!empty($single_service_description_color)) echo 'style="'.implode(';', $single_service_description_color).'"' ?> class="single-service-description"><?php echo wp_kses_post($service['single_service_description']); ?></p>
					
					</div>

				</div>
					
			</div>
			
			<div class="<?php if ($services_number % $instance['columns_desktop'] == 0) : echo 'desktop_clearfix '; endif;
				if ($services_number % $instance['columns_tablet_large'] == 0) : echo 'tl_clearfix '; endif;
				if ($services_number % $instance['columns_tablet_small'] == 0) : echo 'ts_clearfix '; endif;
				?>">
			</div>
			
			<?php
		endforeach;
		?>
	
	</div>