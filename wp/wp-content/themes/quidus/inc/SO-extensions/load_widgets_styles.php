<?php

function widget_skills_styles() {
    if( is_active_widget( '', '', 'quidus_skills' ) ) {
        include get_template_directory() . '/inc/SO-extensions/Widgets_Styles/quidus_skills.php';
    }
}

add_action( 'init', 'widget_skills_styles' );

function widget_team_styles() {
    if( is_active_widget( '', '', 'quidus-team' ) ) {
        include get_template_directory() . '/inc/SO-extensions/Widgets_Styles/quidus-team.php';
    }
}

add_action( 'init', 'widget_team_styles' );

function widget_services_styles() {
    if( is_active_widget( '', '', 'quidus-services' ) ) {
        include get_template_directory() . '/inc/SO-extensions/Widgets_Styles/quidus-services.php';
    }
}

add_action( 'init', 'widget_services_styles' );

function widget_pricing_table_styles() {
    if( is_active_widget( '', '', 'quidus-pricing-table' ) ) {
        include get_template_directory() . '/inc/SO-extensions/Widgets_Styles/quidus-pricing-table.php';
    }
}

add_action( 'init', 'widget_pricing_table_styles' );

function widget_testimonials_styles() {
    if( is_active_widget( '', '', 'quidus-testimonials' ) ) {
        include get_template_directory() . '/inc/SO-extensions/Widgets_Styles/quidus-testimonials.php';
    }
}

add_action( 'init', 'widget_testimonials_styles' );

function widget_recent_posts_styles() {
    if( is_active_widget( '', '', 'quidus-recent-posts' ) ) {
        include get_template_directory() . '/inc/SO-extensions/Widgets_Styles/quidus-recent-posts.php';
    }
}

add_action( 'init', 'widget_recent_posts_styles' );

function widget_featured_posts_styles() {
    if( is_active_widget( '', '', 'quidus-featured-posts' ) ) {
        include get_template_directory() . '/inc/SO-extensions/Widgets_Styles/quidus-featured-posts.php';
    }
}

add_action( 'init', 'widget_featured_posts_styles' );

function widget_facts_styles() {
    if( is_active_widget( '', '', 'quidus-facts' ) ) {
        include get_template_directory() . '/inc/SO-extensions/Widgets_Styles/quidus-facts.php';
    }
}

add_action( 'init', 'widget_facts_styles' );

function widget_CTA_styles() {
    if( is_active_widget( '', '', 'quidus-cta' ) ) {
        include get_template_directory() . '/inc/SO-extensions/Widgets_Styles/quidus-cta.php';
    }
}

add_action( 'init', 'widget_CTA_styles' );

?>