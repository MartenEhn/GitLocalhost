

<?php
$post_selector_pseudo_query = $instance['featured_posts_query'];
// Process the post selector pseudo query.
$processed_query = siteorigin_widget_post_selector_process_query( $post_selector_pseudo_query );

// Use the processed post selector query to find posts.
$query_result = new WP_Query( $processed_query );

// Loop through the posts and do something with them.
if($query_result->have_posts()) :

?>

<div class="quidus-featured-posts" >

	<?php while($query_result->have_posts()) : $query_result->the_post(); ?>
	
		<?php if( has_post_thumbnail()) :
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			else :
				$thumb = array();	
				$thumb['0'] = get_template_directory_uri() . '/img/placeholder.jpg';
		endif; ?>
	
		<div style="background-image:url(<?php echo esc_url($thumb['0']); ?>)" class="quidus-featured-post">
			
			<div class="featured-post-inner">
		
				<div class="featured-post-info">
					
					<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
					
					<?php if ($instance['show_date'] == true) : ?><p style="padding-bottom:0.25em;"><i style="padding-right:0.5em;" class="fa fa-clock-o"></i><?php the_time('F j, Y'); ?></p><?php endif; ?>
							
					<?php if ($instance['show_author'] == true) : ?><p style="padding-bottom:0.1em;"><i style="padding-right:0.5em;" class="fa fa-user"></i><strong><?php the_author(); ?></strong></p><?php endif; ?>
					
					<?php if ($instance['show_categories'] == true) : ?>
					
						<div class="featured-categories">
							<?php the_category( ' ' ); ?>
						</div>
						
					<?php endif; ?>
					
				</div>
				
			</div>
		
		</div>
		
	<?php endwhile; wp_reset_postdata(); ?>
	
</div>

<?php endif; ?>