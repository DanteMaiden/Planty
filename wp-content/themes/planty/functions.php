<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


/**
** code widget logo
**/

function header_widgets_init() {
 
    register_sidebar( array(
   
    'name' => 'Logo',
    'id' => 'logo-widget-area',
    'before_widget' => '<div class="nwa-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="nwa-title">',
    'after_title' => '</h2>',
    ) );
   }
   
   add_action( 'widgets_init', 'header_widgets_init' );


   /* Hook admin */

function change_text_another_callback( $content ) { 
    if(is_user_logged_in()){
        $filtered_content = get_home_url() . "/wp-admin/";
    }else{
        $filtered_content = "";
    }
    return $filtered_content;
}
    
add_filter( 'admin_url', 'change_text_another_callback');