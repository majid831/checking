<?php

add_theme_support('menus');

function wpt_register_theme_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
        )
    );
}
add_action('init' , 'wpt_register_theme_menus');


function bootstrap_to_theme()
{
    wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js' , array( 'jquery' ) , false , true );
    wp_enqueue_style( 'style-css' , get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts' , 'bootstrap_to_theme');



?>