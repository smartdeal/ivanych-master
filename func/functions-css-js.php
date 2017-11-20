<?php 

function ivanych_styles() {
    if ( ! is_admin() && ! is_login_page() ) {
        wp_enqueue_style( 'ivanych-style-main',    			get_template_directory_uri() . '/css/main.css');
    }
}

add_action( 'wp', 'ivanych_styles' );


function my_admin_theme_style() {
    wp_enqueue_style('my-admin-style', get_template_directory_uri() . '/css/adminui.css');
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');

function ivanych_scripts() {
    if( !is_admin()){

        // if (is_page_template('page-reviews.php')) wp_enqueue_script( 'ivanych-js-zoom',  get_template_directory_uri() . '/js/jquery.zoom.min.js', array('jquery'), '20170630', true );
        wp_enqueue_script( 'ivanych-js-plugins',	get_template_directory_uri() . '/js/plugins.js', array('jquery'), '20171130', true );
        wp_enqueue_script( 'ivanych-js-main',		get_template_directory_uri() . '/js/main.js', array('jquery','ivanych-js-plugins'), '20170630', true );       
    }
}
add_action( 'wp_enqueue_scripts', 'ivanych_scripts' );
