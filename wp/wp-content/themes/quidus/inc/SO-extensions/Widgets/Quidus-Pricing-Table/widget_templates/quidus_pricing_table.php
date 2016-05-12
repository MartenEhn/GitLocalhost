<?php

	switch ($instance['columns_desktop']) {
		case 1:
			$pricing_tables_desktop_layout = 'grid-item--1cl';
			break;
		case 2:
			$pricing_tables_desktop_layout = 'grid-item--2cl';
			break;
		case 3:
			$pricing_tables_desktop_layout = 'grid-item--3cl';
			break;
		case 4:
			$pricing_tables_desktop_layout = 'grid-item--4cl';
			break;
		case 5:
			$pricing_tables_desktop_layout = 'grid-item--5cl';
			break;
		case 6:
			$pricing_tables_desktop_layout = 'grid-item--6cl';
			break;
	}
	
	switch ($instance['columns_tablet_large']) {
		case 1:
			$pricing_tables_tl_layout = 'grid-item--1cl--tl';
			break;
		case 2:
			$pricing_tables_tl_layout = 'grid-item--2cl--tl';
			break;
		case 3:
			$pricing_tables_tl_layout = 'grid-item--3cl--tl';
			break;
		case 4:
			$pricing_tables_tl_layout = 'grid-item--4cl--tl';
			break;
	}
	
	switch ($instance['columns_tablet_small']) {
		case 1:
			$pricing_tables_ts_layout = 'grid-item--1cl--ts';
			break;
		case 2:
			$pricing_tables_ts_layout = 'grid-item--2cl--ts';
			break;
		case 3:
			$pricing_tables_ts_layout = 'grid-item--3cl--ts';
			break;
	}

	$special_table_bg_color = array();
	$table_bg_color = array();
	$plan_title_color = array();
	$plan_subtitle_color = array();
	$plan_pricing_color = array();
	$pricing_subtitle_color = array();
	$plan_features_color = array();
	$plan_url_color = array();

	if (!empty($instance['special_table_bg_color'])) {
	$special_table_bg_color[] = 'background:' . esc_attr($instance['special_table_bg_color']); 
	}

	if (!empty($instance['table_bg_color'])) {
	$table_bg_color[] = 'background:' . esc_attr($instance['table_bg_color']); 
	}

	if (!empty($instance['plan_title_color'])) {
	$plan_title_color[] = 'color:' . esc_attr($instance['plan_title_color']); 
	}

	if (!empty($instance['plan_subtitle_color'])) {
	$plan_subtitle_color[] = 'color:' . esc_attr($instance['plan_subtitle_color']); 
	}

	if (!empty($instance['plan_pricing_color'])) {
	$plan_pricing_color[] = 'color:' . esc_attr($instance['plan_pricing_color']); 
	}

	if (!empty($instance['pricing_subtitle_color'])) {
	$pricing_subtitle_color[] = 'color:' . esc_attr($instance['pricing_subtitle_color']); 
	}

	if (!empty($instance['plan_features_color'])) {
	$plan_features_color[] = 'color:' . esc_attr($instance['plan_features_color']); 
	}

	if (!empty($instance['plan_url_color'])) {
	$plan_url_color[] = 'color:' . esc_attr($instance['plan_url_color']); 
	}
		
	?>
	
	<div class="quidus-widget-wrap">

		<?php foreach($instance['pricing_tables'] as $pricing_table) :
		
			$pricing_tables_number++;
			
			?>
			
			<div class="grid-item <?php echo $pricing_tables_desktop_layout . ' ' . $pricing_tables_tl_layout . ' ' . $pricing_tables_ts_layout; ?>">

				<div <?php if(!empty($table_bg_color)) echo 'style="'.implode(';', $table_bg_color).'"' ?> class="quidus-pricing-table pricing_table_style_1 <?php if ($pricing_table['special_table'] == true) { echo 'special_table'; } ?>" >

					<div class="pricing-table-inner">

						<div class="pricing-table-header" <?php if ($pricing_table['special_table'] == true) { if(!empty($special_table_bg_color)) { echo 'style="'.implode(';', $special_table_bg_color).'"'; }} ?> >
							
							<div class="pricing-table-title" >
								<h5 <?php if(!empty($plan_title_color)) echo 'style="'.implode(';', $plan_title_color).'"' ?> class="plan-title" ><?php echo wp_kses_post($pricing_table['plan_title']); ?></h5>
								<?php if($pricing_table['plan_subtitle'] != '') { ?> <p <?php if(!empty($plan_subtitle_color)) echo 'style="'.implode(';', $plan_subtitle_color).'"' ?> class="plan-subtitle" ><?php echo wp_kses_post($pricing_table['plan_subtitle']); ?></p><?php } ?>
							</div>
							
							<div class="pricing-table-price" >
								<h1 <?php if(!empty($plan_pricing_color)) echo 'style="'.implode(';', $plan_pricing_color).'"' ?> class="plan-pricing" ><?php echo wp_kses_post($pricing_table['plan_pricing']); ?></h1>
								<h6 <?php if(!empty($pricing_subtitle_color)) echo 'style="'.implode(';', $pricing_subtitle_color).'"' ?> class="pricing-subtitle" ><?php echo wp_kses_post($pricing_table['pricing_subtitle']); ?></h6>
							</div>
							
						</div>
						
						<div class="pricing-table-body" >
						
							<?php foreach($pricing_table['plan_features'] as $feature) { ?>
						
								<p <?php if(!empty($plan_features_color)) echo 'style="'.implode(';', $plan_features_color).'"' ?> class="plan-feature" ><?php echo wp_kses_post($feature['plan_feature']); ?></p>
							
							<?php } ?>
						
						</div>
						
						<div class="plan-footer">
							<a <?php if ($pricing_table['plan_url_nw'] == true) { echo "target='_blank'"; } ?> href="<?php echo sow_esc_url_raw($pricing_table['plan_url']); ?>" <?php if(!empty($plan_url_color)) echo 'style="'.implode(';', $plan_url_color).'"' ?> class="plan-button" ><?php echo wp_kses_post($pricing_table['plan_url_text']); ?></a>
						</div>
						
					</div>
					
				</div>
					
			</div>
			
			<div class="<?php if ($pricing_tables_number % $instance['columns_desktop'] == 0) : echo 'desktop_clearfix '; endif;
				if ($pricing_tables_number % $instance['columns_tablet_large'] == 0) : echo 'tl_clearfix '; endif;
				if ($pricing_tables_number % $instance['columns_tablet_small'] == 0) : echo 'ts_clearfix '; endif;
				?>">
			</div>
			
			<?php
		endforeach;
		?>
	
	</div>
