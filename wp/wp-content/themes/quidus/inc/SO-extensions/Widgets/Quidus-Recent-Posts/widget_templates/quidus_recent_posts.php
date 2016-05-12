<?php 

	global $rp_desktop_layout;
	global $rp_tl_layout;
	global $rp_ts_layout;
	
	switch ($instance['columns_desktop']) {
		case 1:
			$rp_desktop_layout = 'grid-item--1cl';
			break;
		case 2:
			$rp_desktop_layout = 'grid-item--2cl';
			break;
		case 3:
			$rp_desktop_layout = 'grid-item--3cl';
			break;
		case 4:
			$rp_desktop_layout = 'grid-item--4cl';
			break;
		case 5:
			$rp_desktop_layout = 'grid-item--5cl';
			break;
		case 6:
			$rp_desktop_layout = 'grid-item--6cl';
			break;
	}
	
	switch ($instance['columns_tablet_large']) {
		case 1:
			$rp_tl_layout = 'grid-item--1cl--tl';
			break;
		case 2:
			$rp_tl_layout = 'grid-item--2cl--tl';
			break;
		case 3:
			$rp_tl_layout = 'grid-item--3cl--tl';
			break;
		case 4:
			$rp_tl_layout = 'grid-item--4cl--tl';
			break;
	}
	
	switch ($instance['columns_tablet_small']) {
		case 1:
			$rp_ts_layout = 'grid-item--1cl--ts';
			break;
		case 2:
			$rp_ts_layout = 'grid-item--2cl--ts';
			break;
		case 3:
			$rp_ts_layout = 'grid-item--3cl--ts';
			break;
	}
	
?>

<?php
$post_selector_pseudo_query = $instance['recent_posts_query'];
// Process the post selector pseudo query.
$processed_query = siteorigin_widget_post_selector_process_query( $post_selector_pseudo_query );

// Use the processed post selector query to find posts.
$query_result = new WP_Query( $processed_query );

// Loop through the posts and do something with them.
if($query_result->have_posts()) : 

global $rp_desktop_layout;
global $rp_tl_layout;
global $rp_ts_layout;

?>

<div class="quidus-recent-posts-so" >

	<?php while($query_result->have_posts()) : $query_result->the_post(); ?>
	
		<?php $post_number++; ?>
		
		<?php if ($instance['recent_posts_style'] == 'recent_post_style_1') : ?>
	
			<div <?php if ($instance['item_height'] != '') : ?>style="height:<?php echo wp_kses_post($instance['item_height']); ?>;"<?php endif; ?> class="quidus-recent-post grid-item <?php echo $rp_desktop_layout . ' ' . $rp_tl_layout . ' ' . $rp_ts_layout; ?> <?php echo $instance['recent_posts_style']; ?>">
			
				<div style="padding-bottom:0.5em;">
					<div class="recent-post-info">
						
						<h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
						
					</div>
					<?php if( has_post_thumbnail()) :
							the_post_thumbnail('sidebar-thumbnail');
						else :
							echo '<img src="' . get_template_directory_uri() . '/img/placeholder.jpg" />';
					endif; ?>
				</div>
				
				<?php if ($instance['show_date'] == true) : ?><p style="padding-bottom:0;"><?php the_time('F j, Y'); ?></p><?php endif; ?>
						
				<?php if ($instance['show_author'] == true) : ?><p style="padding-bottom:0;"><strong><?php the_author(); ?></strong></p><?php endif; ?>
					
				<?php the_excerpt(); ?>
				
				<?php if ($instance['show_categories'] == true) : ?>
				
					<div class="recent-post-categories">
						<?php the_category( ' ' ); ?>
					</div>
					
				<?php endif; ?>
				
			</div>
		
		<?php endif; ?>
		
		<?php if ($instance['recent_posts_style'] == 'recent_post_style_2') : ?>
		
			<div <?php if ($instance['item_height'] != '') : ?>style="height:<?php echo wp_kses_post($instance['item_height']); ?>;"<?php endif; ?> class="quidus-recent-post grid-item <?php echo $rp_desktop_layout . ' ' . $rp_tl_layout . ' ' . $rp_ts_layout; ?> <?php echo $instance['recent_posts_style']; ?>">

				<div class="recent-post-image-wrapper">
				
					<?php if( has_post_thumbnail()) :
							the_post_thumbnail();
						else :
							echo '<img src="' . get_template_directory_uri() . '/img/placeholder.jpg" />';
					endif; ?>
				
				</div>
				
				<div class="recent-post-info">
				
					<?php if ($instance['show_date'] == true) : ?><p ><?php the_time('F j, Y'); ?></p><?php endif; ?>
					
					<h5 style="padding-top: 0.25em; margin-bottom: 0.3em;"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
							
					<?php if ($instance['show_author'] == true) : ?><p style="padding-bottom:0.1em;"><strong><?php the_author(); ?></strong></p><?php endif; ?>
					
					<?php if ($instance['show_categories'] == true) : ?>
					
						<div class="recent-categories">
							<?php the_category( ' &sect ' ); ?>
						</div>
						
					<?php endif; ?>
					
				</div>
				
			</div>
		
		<?php endif; ?>
		
		<?php if ($instance['recent_posts_style'] == 'recent_post_style_3') : ?>
		
			<?php if( has_post_thumbnail()) :
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sidebar-thumbnail' ); 
				else :
					$thumb = array();	
					$thumb['0'] = get_template_directory_uri() . '/img/placeholder.jpg';
			endif; ?>

			<div style="background-image:url(<?php echo esc_url($thumb['0']); ?>); <?php if ($instance['item_height'] != '') : ?>height:<?php echo wp_kses_post($instance['item_height']); ?>;<?php endif; ?>" class="quidus-recent-post grid-item <?php echo $rp_desktop_layout . ' ' . $rp_tl_layout . ' ' . $rp_ts_layout; ?> <?php echo $instance['recent_posts_style']; ?>">
			
				<div class="recent-post-inner">
					
					<div class="recent-post-info">
					
						<?php if ($instance['show_date'] == true) : ?><p ><?php the_time('F j, Y'); ?></p><?php endif; ?>
						
						<h5 style="padding-top: 0.25em; margin-bottom: 0.3em;"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
								
						<?php if ($instance['show_author'] == true) : ?><p style="padding-bottom:0.1em;"><strong><?php the_author(); ?></strong></p><?php endif; ?>
						
						<?php if ($instance['show_categories'] == true) : ?>
						
							<div class="recent-categories">
								<?php the_category( ' &sect ' ); ?>
							</div>
							
						<?php endif; ?>
						
					</div>
					
				</div>
				
			</div>
		
		<?php endif; ?>
		
		<?php if ($instance['recent_posts_style'] == 'recent_post_style_4') : ?>
		
			<?php if( has_post_thumbnail()) :
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sidebar-thumbnail' );
				else :
					$thumb = array();	
					$thumb['0'] = get_template_directory_uri() . '/img/placeholder.jpg';
			endif; ?>
	
			<div style="background-image:url(<?php echo esc_url($thumb['0']); ?>); <?php if ($instance['item_height'] != '') : ?>height:<?php echo wp_kses_post($instance['item_height']); ?>;<?php endif; ?>" class="quidus-recent-post grid-item <?php echo $rp_desktop_layout . ' ' . $rp_tl_layout . ' ' . $rp_ts_layout; ?> <?php echo $instance['recent_posts_style']; ?>">
			
				<div class="recent-post-inner">
					
					<div class="recent-post-info">
					
						<?php if ($instance['show_date'] == true) : ?><p ><?php the_time('F j, Y'); ?></p><?php endif; ?>
						
						<h5 style="padding-top: 0.25em; margin-bottom: 0.3em;"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
								
						<?php if ($instance['show_author'] == true) : ?><p style="padding-bottom:0.1em;"><strong><?php the_author(); ?></strong></p><?php endif; ?>
						
						<?php if ($instance['show_categories'] == true) : ?>
						
							<div class="recent-categories">
								<?php the_category( ' &sect ' ); ?>
							</div>
							
						<?php endif; ?>
						
					</div>
					
				</div>
				
			</div>
		
		<?php endif; ?>
		
		<?php if ($instance['recent_posts_style'] == 'recent_post_style_5') : ?>
		
			<?php if( has_post_thumbnail()) :
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sidebar-thumbnail' );
				else :
					$thumb = array();	
					$thumb['0'] = get_template_directory_uri() . '/img/placeholder.jpg';
			endif; ?>
	
			<div style="background-image:url(<?php echo esc_url($thumb['0']); ?>); <?php if ($instance['item_height'] != '') : ?>height:<?php echo wp_kses_post($instance['item_height']); ?>;<?php endif; ?>" class="quidus-recent-post grid-item <?php echo $rp_desktop_layout . ' ' . $rp_tl_layout . ' ' . $rp_ts_layout; ?> <?php echo $instance['recent_posts_style']; ?>">
			
				<div class="recent-post-inner">
					
					<div class="recent-post-info">
					
						<?php if ($instance['show_date'] == true) : ?><p ><?php the_time('F j, Y'); ?></p><?php endif; ?>
						
						<h5 style="padding-top: 0.25em; margin-bottom: 0.3em;"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
								
						<?php if ($instance['show_author'] == true) : ?><p style="padding-bottom:0.1em;"><strong><?php the_author(); ?></strong></p><?php endif; ?>
						
						<?php if ($instance['show_categories'] == true) : ?>
						
							<div class="recent-categories">
								<?php the_category( ' &sect ' ); ?>
							</div>
							
						<?php endif; ?>
						
					</div>
					
				</div>
				
			</div>
		
		<?php endif; ?>
		
		<?php if ($instance['recent_posts_style'] == 'recent_post_style_6') : ?>
		
			<?php if( has_post_thumbnail()) :
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sidebar-thumbnail' );
				else :
					$thumb = array();	
					$thumb['0'] = get_template_directory_uri() . '/img/placeholder.jpg';
			endif; ?>
	
			<div style="background-image:url(<?php echo esc_url($thumb['0']); ?>); <?php if ($instance['item_height'] != '') : ?>height:<?php echo wp_kses_post($instance['item_height']); ?>;<?php endif; ?>" class="quidus-recent-post grid-item <?php echo $rp_desktop_layout . ' ' . $rp_tl_layout . ' ' . $rp_ts_layout; ?> <?php echo $instance['recent_posts_style']; ?>">
			
				<div class="recent-post-outer">
				
					<div class="recent-post-inner">
						
						<div class="recent-post-info">
						
							<?php if ($instance['show_date'] == true) : ?><p ><?php the_time('F j, Y'); ?></p><?php endif; ?>
							
							<h5 style="padding-top: 0.25em; margin-bottom: 0.3em;"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
									
							<?php if ($instance['show_author'] == true) : ?><p style="padding-bottom:0.1em;"><strong><?php the_author(); ?></strong></p><?php endif; ?>
							
							<?php if ($instance['show_categories'] == true) : ?>
							
								<div class="recent-categories">
									<?php the_category( ' - ' ); ?>
								</div>
								
							<?php endif; ?>
							
						</div>
						
					</div>
					
				</div>
			
			</div>
		
		<?php endif; ?>
		
		<div class="<?php if ($post_number % $instance['columns_desktop'] == 0) : echo 'desktop_clearfix '; endif;
			  if ($post_number % $instance['columns_tablet_large'] == 0) : echo 'tl_clearfix '; endif;
			  if ($post_number % $instance['columns_tablet_small'] == 0) : echo 'ts_clearfix '; endif;
		?>">
		</div>
		
	<?php endwhile; wp_reset_postdata(); ?>
	
</div>

<?php endif; ?>