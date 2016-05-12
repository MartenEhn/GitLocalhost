<?php

function post_layout_markup()
{
    wp_nonce_field(basename(__FILE__), "meta_layout_style_s");

    ?>
        <div style="padding-top:1em;">

            <label for="meta_layout_style"><strong ><?php _e( 'Sidebars Layout', 'quidus' ); ?></strong></label><br/>
            <select style="margin-top:0.25em;" name="meta_layout_style">
                <?php 
		
					$option_values_sidebars  = array(
						'Inherit',
						'1 Column',
						'2 Columns - Left Sidebar',
						'2 Columns - Right Sidebar',
						'3 Columns',
						'3 Columns - Sidebars Align Left',
						'3 Columns - Sidebars Align Right'
					);

                    foreach($option_values_sidebars as $key => $value) 
                    {
                        if($value == get_post_meta(get_the_ID(), "meta_layout_style", true))
                        {
                            ?>
                                <option selected><?php echo $value; ?></option>
                            <?php    
                        }
                        else
                        {
                            ?>
                                <option><?php echo $value; ?></option>
                            <?php
                        }
                    }
                ?>
            </select>
        </div>
		
        <div style="padding-top:1em;">

            <label for="meta_layout_footer_widgets"><strong ><?php _e( 'Footer Widgets Layout', 'quidus' ); ?></strong></label><br/>
            <select style="margin-top:0.25em;" name="meta_layout_footer_widgets">
                <?php 
		
						$footer_widget_layouts_choices = array(
							'Inherit',
							'2 Columns',
							'3 Columns',
							'4 Columns'
						);

                    foreach($footer_widget_layouts_choices as $key => $value) 
                    {
                        if($value == get_post_meta(get_the_ID(), "meta_layout_footer_widgets", true))
                        {
                            ?>
                                <option selected><?php echo $value; ?></option>
                            <?php    
                        }
                        else
                        {
                            ?>
                                <option><?php echo $value; ?></option>
                            <?php
                        }
                    }
                ?>
            </select>
        </div>
		
        <div style="padding-top:1em;">

            <label for="meta_layout_content_widgets"><strong ><?php _e( 'Content Widgets Layout', 'quidus' ); ?></strong></label><br/>
            <select style="margin-top:0.25em;" name="meta_layout_content_widgets">
                <?php 
		
						$content_widget_layouts_choices1 = array(
							'Inherit',
							'2 Columns',
							'3 Columns'
						);

                    foreach($content_widget_layouts_choices1 as $key => $value) 
                    {
                        if($value == get_post_meta(get_the_ID(), "meta_layout_content_widgets", true))
                        {
                            ?>
                                <option selected><?php echo $value; ?></option>
                            <?php    
                        }
                        else
                        {
                            ?>
                                <option><?php echo $value; ?></option>
                            <?php
                        }
                    }
                ?>
            </select>
        </div>
		
        <div style="padding-top:1em;">
		
			<label for="meta_layout_max_width"><strong ><?php _e( 'Maximum Width', 'quidus' ); ?></strong></label>
			<input name="meta_layout_max_width" type="text" value="<?php echo get_post_meta(get_the_ID(), "meta_layout_max_width", true); ?>">
			
		</div>
		
        <div style="padding-top:1em;">
		
			<label for="meta_layout_max_width_footer"><strong ><?php _e( 'Footer Maximum Width', 'quidus' ); ?></strong></label>
			<input name="meta_layout_max_width_footer" type="text" value="<?php echo get_post_meta(get_the_ID(), "meta_layout_max_width_footer", true); ?>">
			
		</div>
		
    <?php  
}

function save_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta_layout_style_s"]) || !wp_verify_nonce($_POST["meta_layout_style_s"], basename(__FILE__)))
        return $post_id;
		
    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;


    $meta_layout_style = "";
    $meta_layout_footer_widgets = "";
	$meta_layout_content_widgets = "";
	$meta_layout_max_width = "";
	$meta_layout_max_width_footer = "";

    if(isset($_POST["meta_layout_style"]))
    {
        $meta_layout_style = $_POST["meta_layout_style"];
    }   
    update_post_meta($post_id, "meta_layout_style", $meta_layout_style); 
	
    if(isset($_POST["meta_layout_footer_widgets"]))
    {
        $meta_layout_footer_widgets = $_POST["meta_layout_footer_widgets"];
    }   
    update_post_meta($post_id, "meta_layout_footer_widgets", $meta_layout_footer_widgets);
	
    if(isset($_POST["meta_layout_content_widgets"]))
    {
        $meta_layout_content_widgets = $_POST["meta_layout_content_widgets"];
    }   
    update_post_meta($post_id, "meta_layout_content_widgets", $meta_layout_content_widgets);
	
    if(isset($_POST["meta_layout_max_width"]))
    {
        $meta_layout_max_width = $_POST["meta_layout_max_width"];
    }   
    update_post_meta($post_id, "meta_layout_max_width", $meta_layout_max_width);
	
    if(isset($_POST["meta_layout_max_width_footer"]))
    {
        $meta_layout_max_width_footer = $_POST["meta_layout_max_width_footer"];
    }   
    update_post_meta($post_id, "meta_layout_max_width_footer", $meta_layout_max_width_footer);
	
}

add_action("save_post", "save_custom_meta_box", 10, 3);

function get_layout_meta() {

	if( is_single() or is_page() or (class_exists( 'WooCommerce' ) and is_product())) {

	$layout_meta = get_post_meta(get_the_ID(), "meta_layout_style", true);

	}

	return $layout_meta;

}

function get_footer_widgets_meta() {

	if( is_single() or is_page() or (class_exists( 'WooCommerce' ) and is_product())) {

	$footer_widgets_meta = get_post_meta(get_the_ID(), "meta_layout_footer_widgets", true);

	}

	return $footer_widgets_meta;

}

function get_content_widgets_meta() {

	if( is_single() or is_page() or (class_exists( 'WooCommerce' ) and is_product())) {

	$content_widgets_meta = get_post_meta(get_the_ID(), "meta_layout_content_widgets", true);

	}

	return $content_widgets_meta;

}

function get_max_width_meta() {

	if( is_single() or is_page() or (class_exists( 'WooCommerce' ) and is_product())) {

	$max_width_meta = get_post_meta(get_the_ID(), "meta_layout_max_width", true);

	}

	return $max_width_meta;

}

function get_max_width_meta_footer() {

	if( is_single() or is_page() or (class_exists( 'WooCommerce' ) and is_product())) {

	$max_width_meta_footer = get_post_meta(get_the_ID(), "meta_layout_max_width_footer", true);

	}

	return $max_width_meta_footer;

}

function add_custom_meta_box()
{
    add_meta_box("demo-meta-box", "Post Layout", "post_layout_markup", "post", "side", "high", null);
	add_meta_box("demo-meta-box2", "Page Layout", "post_layout_markup", "page", "side", "high", null);
	add_meta_box("demo-meta-box3", "Product Layout", "post_layout_markup", "product", "side", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");

?>