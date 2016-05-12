<?php

class QuidusRecentPosts extends WP_Widget {

	function QuidusRecentPosts() {
		parent::__construct( false, 'Quidus Recent Posts', array('description' => 'Display your most recent articles.', 'classname' => 'quidus_recent_posts') );;	
	}

	public function widget($args, $instance) {
		extract( $args );
		$instance['title']?NULL:$instance['title']='';
		$title = apply_filters('widget_title',$instance['title']);
		$output = $before_widget."\n";
		if($title)
			$output .= $before_title.$title.$after_title;
		ob_start();
	
	?>

	<?php
		$posts = new WP_Query( array(
			'post_type'				=> array( 'post' ),
			'showposts'				=> $instance['posts_num'],
			'cat'					=> $instance['posts_cat_id'],
			'ignore_sticky_posts'	=> true,
			'orderby'				=> $instance['posts_orderby'],
			'order'					=> 'dsc',
			'date_query' => array(
				array(
					'after' => $instance['posts_time'],
				),
			),
		) );
	?>
		
	<ul class="quidus-recent-posts group <?php if($instance['posts_thumb']) { echo 'thumbs-enabled'; } ?>">
		<?php while ($posts->have_posts()): $posts->the_post(); ?>
		<li>
			
			<?php if($instance['posts_thumb']) { // Thumbnails enabled? ?>
			<div class="post-item-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail() ): ?>
						<?php the_post_thumbnail('sidebar-thumbnail'); ?>
					<?php else : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="<?php the_title(); ?>" />
					<?php endif; ?>
				</a>
			</div>
			<?php } ?>
			
			<div class="post-item-inner group">
				<h5 ><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
				<?php if($instance['posts_category']) { ?><strong><?php the_category(' / '); ?></strong><?php } ?>
				<?php if($instance['posts_date']) { ?><p ><?php the_time('j M, Y'); ?></p><?php } ?>
			</div>
			
		</li>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</ul><!--/.quidus-recent-posts-->

<?php
		$output .= ob_get_clean();
		$output .= $after_widget."\n";
		echo $output;
	}
	

	public function update($new,$old) {
		$instance = $old;
		$instance['title'] = strip_tags($new['title']);
	// Posts
		$instance['posts_thumb'] = $new['posts_thumb']?1:0;
		$instance['posts_category'] = $new['posts_category']?1:0;
		$instance['posts_date'] = $new['posts_date']?1:0;
		$instance['posts_num'] = strip_tags($new['posts_num']);
		$instance['posts_cat_id'] = strip_tags($new['posts_cat_id']);
		$instance['posts_orderby'] = strip_tags($new['posts_orderby']);
		$instance['posts_time'] = strip_tags($new['posts_time']);
		return $instance;
	}


	public function form($instance) {
		// Default widget settings
		$defaults = array(
			'title' 			=> '',
		// Posts
			'posts_thumb' 		=> 1,
			'posts_category'	=> 1,
			'posts_date'		=> 1,
			'posts_num' 		=> '4',
			'posts_cat_id' 		=> '0',
			'posts_orderby' 	=> 'date',
			'posts_time' 		=> '0',
		);
		$instance = wp_parse_args( (array) $instance, $defaults );
?>

	<style>
	.widget .widget-inside .quidus-recent-posts-form .postform { width: 100%; }
	.widget .widget-inside .quidus-recent-posts-form p { margin: 3px 0; }
	.widget .widget-inside .quidus-recent-posts-form hr { margin: 20px 0 10px; }
	.widget .widget-inside .quidus-recent-posts-form h4 { margin-bottom: 10px; }
	</style>
	
	<div class="quidus-recent-posts-form">
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($instance["title"]); ?>" />
		</p>
		
		<h4>Category</h4>
		<p>
			<?php wp_dropdown_categories( array( 'name' => $this->get_field_name("posts_cat_id"), 'selected' => $instance["posts_cat_id"], 'show_option_all' => 'All', 'show_count' => true ) ); ?>		
		</p>
		<h4>Ordering</h4>
		<p >
			<select style="width: 100%;" id="<?php echo $this->get_field_id("posts_orderby"); ?>" name="<?php echo $this->get_field_name("posts_orderby"); ?>">
			  <option value="date"<?php selected( $instance["posts_orderby"], "date" ); ?>>Most recent</option>
			  <option value="modified"<?php selected( $instance["posts_orderby"], "modified" ); ?>>Most recently modified</option>
			  <option value="comment_count"<?php selected( $instance["posts_orderby"], "comment_count" ); ?>>Most commented</option>
			  <option value="rand"<?php selected( $instance["posts_orderby"], "rand" ); ?>>Random</option>
			</select>	
		</p>
		<h4>Time Range</h4>
		<p >
			<select style="width: 100%;" id="<?php echo $this->get_field_id("posts_time"); ?>" name="<?php echo $this->get_field_name("posts_time"); ?>">
			  <option value="0"<?php selected( $instance["posts_time"], "0" ); ?>>All time</option>
			  <option value="1 year ago"<?php selected( $instance["posts_time"], "1 year ago" ); ?>>This year</option>
			  <option value="1 month ago"<?php selected( $instance["posts_time"], "1 month ago" ); ?>>This month</option>
			  <option value="1 week ago"<?php selected( $instance["posts_time"], "1 week ago" ); ?>>This week</option>
			  <option value="1 day ago"<?php selected( $instance["posts_time"], "1 day ago" ); ?>>Past 24 hours</option>
			</select>	
		</p>
		
		<hr>
		
		<p style="padding-top: 0.5em;">
			<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('posts_thumb'); ?>" name="<?php echo $this->get_field_name('posts_thumb'); ?>" <?php checked( (bool) $instance["posts_thumb"], true ); ?>>
			<label for="<?php echo $this->get_field_id('posts_thumb'); ?>">Display Thumbnails</label>
		</p>	
		<p>
			<label style="width: 55%; display: inline-block;" for="<?php echo $this->get_field_id("posts_num"); ?>">Item Count</label>
			<input style="width:20%;" id="<?php echo $this->get_field_id("posts_num"); ?>" name="<?php echo $this->get_field_name("posts_num"); ?>" type="text" value="<?php echo absint($instance["posts_num"]); ?>" size='3' />
		</p>
		
		<hr>
		<h4>Post Meta</h4>
		
		<p>
			<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('posts_date'); ?>" name="<?php echo $this->get_field_name('posts_date'); ?>" <?php checked( (bool) $instance["posts_date"], true ); ?>>
			<label for="<?php echo $this->get_field_id('posts_date'); ?>">Display Dates</label>
		</p>
		<p>
			<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('posts_category'); ?>" name="<?php echo $this->get_field_name('posts_category'); ?>" <?php checked( (bool) $instance["posts_category"], true ); ?>>
			<label for="<?php echo $this->get_field_id('posts_category'); ?>">Display Categories</label>
		</p>

		<hr>

	</div>
<?php

}

}


if ( ! function_exists( 'quidus_register_widget' ) ) {

	function quidus_register_widget() { 
		register_widget( 'QuidusRecentPosts' );
	}
	
}
add_action( 'widgets_init', 'quidus_register_widget' );
