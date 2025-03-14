<?php 
// Theme CSS and jQuary File Calling
function sohel_css_ja_file_calling() {
  wp_enqueue_style('sohel-style', get_stylesheet_uri());
  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
  wp_register_style('bxslider', get_template_directory_uri().'/css/bxslider.min.css', array(), '5.0.2', 'all');
  wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('bxslider');
  wp_enqueue_style('custom');
  
  
  // jQuary calling
  wp_enqueue_script( 'jquary');
  wp_enqueue_script('jquerys', get_template_directory_uri().'/js/jquerys.min.js', array(), '3.1.1', 'true');
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
  wp_enqueue_script('bxslider', get_template_directory_uri().'/js/bxslider.min.js', array(), '4.2.17', 'true');
  wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');
  
  }
  add_action('wp_enqueue_scripts', 'sohel_css_ja_file_calling');
  
  // Google fonts calling
  function sohel_add_google_fonts(){
    wp_enqueue_style('sohel_google_fonts', 'https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap', false);
  }
  add_action('wp_enqueue_scripts', 'sohel_add_google_fonts');
  
