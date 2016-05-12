<div class="facts-main">

	<?php
	
	switch ($instance['columns_desktop']) {
		case 1:
			$facts_desktop_layout = 'grid-item--1cl';
			break;
		case 2:
			$facts_desktop_layout = 'grid-item--2cl';
			break;
		case 3:
			$facts_desktop_layout = 'grid-item--3cl';
			break;
		case 4:
			$facts_desktop_layout = 'grid-item--4cl';
			break;
		case 5:
			$facts_desktop_layout = 'grid-item--5cl';
			break;
	}
	
	switch ($instance['columns_tablet_large']) {
		case 1:
			$facts_tl_layout = 'grid-item--1cl--tl';
			break;
		case 2:
			$facts_tl_layout = 'grid-item--2cl--tl';
			break;
		case 3:
			$facts_tl_layout = 'grid-item--3cl--tl';
			break;
		case 4:
			$facts_tl_layout = 'grid-item--4cl--tl';
			break;
	}
	
	switch ($instance['columns_tablet_small']) {
		case 1:
			$facts_ts_layout = 'grid-item--1cl--ts';
			break;
		case 2:
			$facts_ts_layout = 'grid-item--2cl--ts';
			break;
		case 3:
			$facts_ts_layout = 'grid-item--3cl--ts';
			break;
	}
	
	if (!empty($instance['single_fact_count_color'])) {
	$single_fact_count_color[] = 'color:' . esc_attr($instance['single_fact_count_color']); 
	}
	
	if (!empty($instance['single_fact_title_color'])) {
	$single_fact_title_color[] = 'color:' . esc_attr($instance['single_fact_title_color']); 
	}
	
	if (!empty($instance['single_fact_background_color'])) {
	$single_fact_background_color[] = 'background:' . esc_attr($instance['single_fact_background_color']); 
	}
	
	foreach($instance['facts'] as $fact) :
	
		$fact_number++;?>
		
		<div <?php if(!empty($single_fact_background_color)) echo 'style="'.implode(';', $single_fact_background_color).'"'; ?> class="grid-item <?php echo $facts_desktop_layout . ' ' . $facts_tl_layout . ' ' . $facts_ts_layout; ?>">

			<?php
			
			switch ($instance['single_fact_icon_style']) {
			
				case 'single_fact_icon_style_1':
					?>
					<div class="<?php echo 'single_fact_icon_style_1'; ?>">
						<div class="single-fact-icon">
							<?php
								$icon_styles = array();
								if(!empty($instance['single_fact_icon_color'])) {$icon_styles[] = 'color: '.$instance['single_fact_icon_color'];}
								echo siteorigin_widget_get_icon( $fact['single_fact_icon'], $icon_styles );
							?>
						</div>
						<div class="single-fact-info">
							<h3 <?php if(!empty($single_fact_count_color)) echo 'style="'.implode(';', $single_fact_count_color).'"'; ?> class="single-fact-count"><?php echo wp_kses_post($fact['single_fact_count']); ?></h3>
							<h5 <?php if(!empty($single_fact_title_color)) echo 'style="'.implode(';', $single_fact_title_color).'"'; ?> class="single-fact-title"><?php echo wp_kses_post($fact['single_fact_title']); ?></h5>
						</div>
					</div>
					<?php
				break;
				
				case 'single_fact_icon_style_2':
					?>
					<div class="<?php echo 'single_fact_icon_style_2'; ?>">
						<div class="single-fact-icon">
							<?php
								$icon_styles = array();
								if(!empty($instance['single_fact_icon_color'])) {$icon_styles[] = 'color: '.$instance['single_fact_icon_color'];}
								echo siteorigin_widget_get_icon( $fact['single_fact_icon'], $icon_styles );
							?>
						</div>
						<div class="single-fact-info">
							<h3 <?php if(!empty($single_fact_count_color)) echo 'style="'.implode(';', $single_fact_count_color).'"'; ?> class="single-fact-count"><?php echo wp_kses_post($fact['single_fact_count']); ?></h3>
							<h5 <?php if(!empty($single_fact_title_color)) echo 'style="'.implode(';', $single_fact_title_color).'"'; ?> class="single-fact-title"><?php echo wp_kses_post($fact['single_fact_title']); ?></h5>
						</div>
					</div>
					<?php
				break;
				
			}
			
			?>
		
		</div>
		
		<div class="<?php if ($fact_number % $instance['columns_desktop'] == 0) : echo 'desktop_clearfix '; endif;
			if ($fact_number % $instance['columns_tablet_large'] == 0) : echo 'tl_clearfix '; endif;
			if ($fact_number % $instance['columns_tablet_small'] == 0) : echo 'ts_clearfix '; endif;
			?>">
		</div>
		
		<?php
	endforeach;
	?>
	
</div>
