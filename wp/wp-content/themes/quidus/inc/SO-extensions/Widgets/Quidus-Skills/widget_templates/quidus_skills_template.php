<?php

	switch ($instance['columns_desktop']) {
		case 1:
			$skills_desktop_layout = 'grid-item--1cl';
			break;
		case 2:
			$skills_desktop_layout = 'grid-item--2cl';
			break;
		case 3:
			$skills_desktop_layout = 'grid-item--3cl';
			break;
		case 4:
			$skills_desktop_layout = 'grid-item--4cl';
			break;
		case 5:
			$skills_desktop_layout = 'grid-item--5cl';
			break;
		case 6:
			$skills_desktop_layout = 'grid-item--6cl';
			break;
	}
	
	switch ($instance['columns_tablet_large']) {
		case 1:
			$skills_tl_layout = 'grid-item--1cl--tl';
			break;
		case 2:
			$skills_tl_layout = 'grid-item--2cl--tl';
			break;
		case 3:
			$skills_tl_layout = 'grid-item--3cl--tl';
			break;
		case 4:
			$skills_tl_layout = 'grid-item--4cl--tl';
			break;
	}
	
	switch ($instance['columns_tablet_small']) {
		case 1:
			$skills_ts_layout = 'grid-item--1cl--ts';
			break;
		case 2:
			$skills_ts_layout = 'grid-item--2cl--ts';
			break;
		case 3:
			$skills_ts_layout = 'grid-item--3cl--ts';
			break;
	}

	$perc_styling = array();
	$perc_count_styling = array();

	if (!empty($instance['skill_perc_color'])) {
	$perc_styling[] = 'background:' . esc_attr($instance['skill_perc_color']); 
	}

	if (!empty($instance['skill_perc_num_color'])) {
	$perc_count_styling[] = 'color:' . esc_attr($instance['skill_perc_num_color']); 
	}

	$perc_styling2 = array();
	$perc_count_styling2 = array();

	if (!empty($instance['skill_perc_color'])) {
	$perc_styling2[] = 'background:' . esc_attr($instance['skill_perc_color']); 
	}

	if (!empty($instance['skill_perc_num_color'])) {
	$perc_count_styling2[] = 'color:' . esc_attr($instance['skill_perc_num_color']); 
	}

	?>
	
	<div class="quidus-widget-wrap">

		<?php foreach($instance['skills'] as $skill) :
		
			$skills_number++;
			
			?>
			
			<div class="grid-item <?php echo $skills_desktop_layout . ' ' . $skills_tl_layout . ' ' . $skills_ts_layout; ?>">
	
				<?php if ( $instance['skills_style'] == 'skill_style_1') :

					if (!empty($skill['skill_percentage_number'])) {
						$perc_styling[] = 'width:' . esc_attr($skill['skill_percentage_number']) . '%'; 
					}
					
					?>
					
					<div class="single-skill <?php if($instance['skills_style'] != false ) : echo esc_attr($instance['skills_style']); endif; ?>">
						<h4 class="skill-title" <?php if(!empty($instance['skill_title_color'])) : echo "style='color:" . esc_attr($instance['skill_title_color']) . "'"; endif; ?>><?php echo wp_kses_post($skill['skill_title']); ?></h4>
						<p class="skill-description" <?php if(!empty($instance['skill_desc_color'])) : echo "style='color:" . esc_attr($instance['skill_desc_color']) . "'"; endif; ?>><?php echo wp_kses_post($skill['skill_desc']); ?></p>
						<div class="skill-percentage-wrap">
							<span class="skill-percentage-count" <?php if(!empty($perc_count_styling)) echo 'style="'.implode(';', $perc_count_styling).'"' ?>><?php echo esc_attr($skill['skill_percentage_number']) . '%'; ?></span>
							<div class="skill-percentage" <?php if(!empty($perc_styling)) echo 'style="'.implode(';', $perc_styling).'"' ?>></div>
						</div>
					</div>
					
				<?php elseif ( $instance['skills_style'] == 'skill_style_2') :

					if (!empty($skill['skill_percentage_number'])) {
						$perc_styling2[] = 'height:' . esc_attr($skill['skill_percentage_number']) . '%'; 
					}
					
					?>

					<div class="single-skill <?php if($instance['skills_style'] != false ) : echo esc_attr($instance['skills_style']); endif; ?>">
						<div class="skill-percentage-wrap">
							<span class="skill-percentage-count" <?php if(!empty($perc_count_styling2)) echo 'style="'.implode(';', $perc_count_styling2).'"' ?>><?php echo esc_attr($skill['skill_percentage_number']) . '%'; ?></span>
							<div class="skill-percentage" <?php if(!empty($perc_styling2)) echo 'style="'.implode(';', $perc_styling2).'"' ?>></div>
						</div>
						<h4 class="skill-title" <?php if(!empty($instance['skill_title_color'])) : echo "style='color:" . esc_attr($instance['skill_title_color']) . "'"; endif; ?>><?php echo wp_kses_post($skill['skill_title']); ?></h4>
						<p class="skill-description" <?php if(!empty($instance['skill_desc_color'])) : echo "style='color:" . esc_attr($instance['skill_desc_color']) . "'"; endif; ?>><?php echo wp_kses_post($skill['skill_desc']); ?></p>
					</div>

				<?php endif; ?>
					
			</div>
			
			<div class="<?php if ($skills_number % $instance['columns_desktop'] == 0) : echo 'desktop_clearfix '; endif;
				if ($skills_number % $instance['columns_tablet_large'] == 0) : echo 'tl_clearfix '; endif;
				if ($skills_number % $instance['columns_tablet_small'] == 0) : echo 'ts_clearfix '; endif;
				?>">
			</div>
			
			<?php
			
			unset($perc_styling['1']);
			unset($perc_styling2['1']);
			
		endforeach;
		?>
	
	</div>