<?php 
// Sidebar Register

function sohel_widgets_register(){
  register_sidebar( array(
    'name'       =>__('Main Widget', 'sohelrana'),
    'id'  => 'sidebar-1',
    'description' => __('Apperas in the sidebar in blog page and also other pages', 'sohelrana'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget_title">',
    'after_title' => '</h2>',
  ));

  register_sidebar( array(
    'name'       =>__('Footer Area 1', 'sohelrana'),
    'id'  => 'footer-1',
    'description' => __('Apperas in the sidebar in blog page and also other pages', 'sohelrana'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget_title">',
    'after_title' => '</h2>',
  ));

  register_sidebar( array(
    'name'       =>__('Footer Area 2', 'sohelrana'),
    'id'  => 'footer-2',
    'description' => __('Apperas in the sidebar in blog page and also other pages', 'sohelrana'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget_title">',
    'after_title' => '</h2>',
  ));

  register_sidebar( array(
    'name'       =>__('Footer Area 3', 'sohelrana'),
    'id'  => 'footer-3',
    'description' => __('Apperas in the sidebar in blog page and also other pages', 'sohelrana'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget_title">',
    'after_title' => '</h2>',
  ));
  
  register_sidebar( array(
    'name'       =>__('Home Page Area', 'sohelrana'),
    'id'  => 'homepage-1',
    'description' => __('Apperas in the sidebar in blog page and also other pages', 'sohelrana'),
    'before_widget' => '<div class="child_haomepage">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget_title">',
    'after_title' => '</h2>',
  ));

  
}

add_action('widgets_init', 'sohel_widgets_register');