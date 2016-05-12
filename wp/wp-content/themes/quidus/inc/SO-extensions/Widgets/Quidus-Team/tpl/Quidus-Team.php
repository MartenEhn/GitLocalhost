<div class="team-grid-main">

	<?php
	
	switch ($instance['columns_desktop']) {
		case 1:
			$team_desktop_layout = 'grid-item--1cl';
			break;
		case 2:
			$team_desktop_layout = 'grid-item--2cl';
			break;
		case 3:
			$team_desktop_layout = 'grid-item--3cl';
			break;
		case 4:
			$team_desktop_layout = 'grid-item--4cl';
			break;
		case 5:
			$team_desktop_layout = 'grid-item--5cl';
			break;
	}
	
	switch ($instance['columns_tablet_large']) {
		case 1:
			$team_tl_layout = 'grid-item--1cl--tl';
			break;
		case 2:
			$team_tl_layout = 'grid-item--2cl--tl';
			break;
		case 3:
			$team_tl_layout = 'grid-item--3cl--tl';
			break;
		case 4:
			$team_tl_layout = 'grid-item--4cl--tl';
			break;
	}
	
	switch ($instance['columns_tablet_small']) {
		case 1:
			$team_ts_layout = 'grid-item--1cl--ts';
			break;
		case 2:
			$team_ts_layout = 'grid-item--2cl--ts';
			break;
		case 3:
			$team_ts_layout = 'grid-item--3cl--ts';
			break;
	}
	
	foreach($instance['members'] as $member) :
	
		$team_member_number++;
	
		$src = wp_get_attachment_image_src( $member['member_image'], 'large' );
		$name = empty( $member['member_name'] ) ? '' : $member['member_name'];
		$pos = empty( $member['member_position'] ) ? '' : $member['member_position'];
		?>
		
		<div class="grid-item <?php echo $team_desktop_layout . ' ' . $team_tl_layout . ' ' . $team_ts_layout; ?>">
			
			<div <?php if (isset($instance['team_member_background_color'])) { echo "style='background:" . esc_attr($instance['team_member_background_color']) . "'"; } ?> class="team-member-info-wrap-inner">
			
				<div class="team-member-info-wrap">
				
					<h4 <?php if (isset($instance['team_member_name_color'])) { echo "style='color:" . esc_attr($instance['team_member_name_color']) . "'"; } ?> class="team-member-name"><?php echo wp_kses_post($name); ?></h4>
						<p <?php if (isset($instance['team_member_position_color'])) { echo "style='color:" . esc_attr($instance['team_member_position_color']) . "'"; } ?> class="team-member-pos-title"><?php echo wp_kses_post($pos); ?></p>
					
						<?php foreach($member['social_links_team'] as $social_link) : ?>
						
						<a href="<?php if (isset($social_link['social_link_icon_url'])) { echo sow_esc_url_raw($social_link['social_link_icon_url']); } ?>">
							<?php

								$icon_styles21 = array();
								if(!empty($social_link['social_link_icon_font_size'])) $icon_styles21[] = 'font-size: '.wp_kses_post($social_link['social_link_icon_font_size']);
								if(!empty($social_link['social_link_icon_color'])) $icon_styles21[] = 'color: '.$social_link['social_link_icon_color'];
								echo siteorigin_widget_get_icon( $social_link['social_link_icon'], $icon_styles21 );
							?>
						</a>
							
						<?php endforeach; ?>
					
				</div>
				
			</div>
			
			<?php echo wp_get_attachment_image( $member['member_image'], 'large', false, array( 'title' => esc_attr( $name ) ) ); ?>

		</div>
		
		<div class="<?php if ($team_member_number % $instance['columns_desktop'] == 0) : echo 'desktop_clearfix '; endif;
			  if ($team_member_number % $instance['columns_tablet_large'] == 0) : echo 'tl_clearfix '; endif;
			  if ($team_member_number % $instance['columns_tablet_small'] == 0) : echo 'ts_clearfix '; endif;
		?>">
		</div>
		
		<?php
	endforeach;
	?>
	
</div>
