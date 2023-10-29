<?php
/* ====================================
Main functions and includes goes here
=======================================*/


//Including scripts and styles
function cp_assets() {
    wp_enqueue_style('cp-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('cp-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('cp-style', get_stylesheet_directory_uri() .'/assets/css/style.css');
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', false, '3.6.0');
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'cp-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'cp-videojs', 'https://vjs.zencdn.net/5.4.6/video.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'cp-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery' ), false, true );
}
add_action('wp_enqueue_scripts', 'cp_assets');



//Adding required theme supports
function cp_theme_setup(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','cp_theme_setup');


//Adding menus
function register_cp_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_cp_menus' );