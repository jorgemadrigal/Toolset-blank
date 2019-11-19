<?php

// Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'products-menu' => __( 'Productos Menu' ),
      'subheader-menu' => __( 'Subheader Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



// Styles
function theme_name_scripts() {
    wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/style.css');
	wp_register_script( 'Custom', get_template_directory_uri() . '/js/custom.js', null, null, true );
	wp_enqueue_script('Custom');
}
 
// Set priority to 15 which is lower than default 10
add_action( 'wp_enqueue_scripts', 'theme_name_scripts', 15);


