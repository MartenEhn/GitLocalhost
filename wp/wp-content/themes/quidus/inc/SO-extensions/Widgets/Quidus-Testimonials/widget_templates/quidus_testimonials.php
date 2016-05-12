<?php

	switch ($instance['columns_desktop']) {
		case 1:
			$testimonials_desktop_layout = 'grid-item--1cl';
			break;
		case 2:
			$testimonials_desktop_layout = 'grid-item--2cl';
			break;
		case 3:
			$testimonials_desktop_layout = 'grid-item--3cl';
			break;
		case 4:
			$testimonials_desktop_layout = 'grid-item--4cl';
			break;
		case 5:
			$testimonials_desktop_layout = 'grid-item--5cl';
			break;
	}
	
	switch ($instance['columns_tablet_large']) {
		case 1:
			$testimonials_tl_layout = 'grid-item--1cl--tl';
			break;
		case 2:
			$testimonials_tl_layout = 'grid-item--2cl--tl';
			break;
		case 3:
			$testimonials_tl_layout = 'grid-item--3cl--tl';
			break;
		case 4:
			$testimonials_tl_layout = 'grid-item--4cl--tl';
			break;
	}
	
	switch ($instance['columns_tablet_small']) {
		case 1:
			$testimonials_ts_layout = 'grid-item--1cl--ts';
			break;
		case 2:
			$testimonials_ts_layout = 'grid-item--2cl--ts';
			break;
		case 3:
			$testimonials_ts_layout = 'grid-item--3cl--ts';
			break;
	}

	$icon_styles = array();
	if(!empty($instance['testimonial_icon_color'])) $icon_styles[] = 'color: '.$instance['testimonial_icon_color'];
	if(!empty($instance['testimonial_icon_bg_color'])) $icon_styles[] = 'background: '.$instance['testimonial_icon_bg_color'];

	$testimonial_text_color = array();
	$testimonial_name_color = array();
	$testimonial_job_title_color = array();
	$testimonial_bg_color_main = array();

	if (!empty($instance['testimonial_text_color'])) {
		$testimonial_text_color[] = 'color:' . esc_attr($instance['testimonial_text_color']); 
	}

	if (!empty($instance['testimonial_name_color'])) {
		$testimonial_name_color[] = 'color:' . esc_attr($instance['testimonial_name_color']); 
	}

	if (!empty($instance['testimonial_job_title_color'])) {
		$testimonial_job_title_color[] = 'color:' . esc_attr($instance['testimonial_job_title_color']); 
	}
	
	if (!empty($instance['testimonial_bg_color_main'])) {
		$testimonial_bg_color_main[] = 'background:' . esc_attr($instance['testimonial_bg_color_main']); 
	}
	
	?>
	
	<div class="quidus-widget-wrap">

		<?php foreach($instance['testimonials'] as $testimonial) :
		
			$testimonials_number++;
			
			?>
			
			<div class="grid-item <?php echo $testimonials_desktop_layout . ' ' . $testimonials_tl_layout . ' ' . $testimonials_ts_layout; ?>">

				<div <?php if(!empty($testimonial_bg_color_main)) echo 'style="'.implode(';', $testimonial_bg_color_main).'"'; ?> class="quidus-testimonial" >
					
					<div class="quidus-testimonial-text">

						<p <?php if(!empty($testimonial_text_color)) echo 'style="'.implode(';', $testimonial_text_color).'"' ?>><?php echo wp_kses_post($testimonial['testimonial_text']); ?></p>
					
					</div>
					
					<div class="quidus-testimonial-footer" >
					
						<div class="testimonial-icon">
						
							<?php echo siteorigin_widget_get_icon( $testimonial['testimonial_icon'], $icon_styles ); ?>
							
						</div>
						
						<div class="testimonial-credentials">
						
							<h5 class="testimonial-name" <?php if(!empty($testimonial_name_color)) echo 'style="'.implode(';', $testimonial_name_color).'"' ?> ><?php echo wp_kses_post($testimonial['testimonial_name']); ?></h5>
							<p class="testimonial-job" <?php if(!empty($testimonial_job_title_color)) echo 'style="'.implode(';', $testimonial_job_title_color).'"' ?> ><?php echo wp_kses_post($testimonial['testimonial_job_title']); ?></p>
						
						</div>
					
					</div>

				</div>
				
			</div>
			
			<div class="<?php if ($testimonials_number % $instance['columns_desktop'] == 0) : echo 'desktop_clearfix '; endif;
				if ($testimonials_number % $instance['columns_tablet_large'] == 0) : echo 'tl_clearfix '; endif;
				if ($testimonials_number % $instance['columns_tablet_small'] == 0) : echo 'ts_clearfix '; endif;
				?>">
			</div>
			
			<?php
		endforeach;
		?>
	
	</div>