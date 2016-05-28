<?php

// gets 'style.css'

// first, defines function that queues the stylesheet

function askBryan_resources() {

  wp_enqueue_style('style', get_stylesheet_uri());

}

// calls the defined function

add_action('wp_enqueue_scripts', 'askBryan_resources');

// grabs fonts from googlefonts

function load_fonts() {

            wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
            wp_enqueue_style( 'et-googleFonts');

}

        // loads the fonts

add_action('wp_print_styles', 'load_fonts');

// allows for svg uploads

function cc_mime_types( $mimes ){

      $mimes['svg'] = 'image/svg+xml';
      return $mimes;

}

add_filter( 'upload_mimes', 'cc_mime_types' );

// loads jquery library

function theme_scripts() {

      wp_register_script( 'functions', get_stylesheet_directory_uri() . '/functions.js', array('jquery'));
      wp_enqueue_script( 'functions' );


}

add_action('wp_enqueue_scripts', 'theme_scripts');


 ?>
