<?php 


function custom_slider(){
  register_post_type('slider',
  array(
    'labels' => array(
      'name' =>('Slider'),
      'singular_name' =>('slider'),
      'add_new' =>('Add New'),
      'add_new_item' =>('Add New Slider'),
      'edit_item' =>('Edit Slider'),
      'new_item' =>('New Slider'),
      'view_item' =>('View Slider'),
      'not_found' =>('No Slider Found'),
    ),
    'menu_icon' => 'dashicons-slides',
    'public' => true, 
    'has_archive' => true,
    'menu_position' => 5,
    'hierarchical' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'slider'),
    'supports' => array('title',  'editor', 'thumbnail', 'excerpt', 'page-attributes'),
    'taxonomies' => array('category', 'post_tag'),
    'exclude_from_search' => false,
    'publicly_queryable' => true,

    )
  );
}
add_action('init', 'custom_slider');

function custom_service(){
  register_post_type('service',
  array(
    'labels' => array(
      'name' =>('Services'),
      'singular_name' =>('service'),
      'add_new' =>('Add New'),
      'add_new_item' =>('Add New Service'),
      'edit_item' =>('Edit Service'),
      'new_item' =>('New Service'),
      'view_item' =>('View Service'),
      'not_found' =>('No Service Found'),
    ),
    'menu_icon' => 'dashicons-networking',
    'public' => true, 
    'has_archive' => true,
    'menu_position' => 5,
    'hierarchical' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'service'),
    'supports' => array('title',  'editor', 'thumbnail', 'excerpt', 'page-attributes'),
    'taxonomies' => array('category', 'post_tag'),
    'exclude_from_search' => false,
    'publicly_queryable' => true,

    )
  );
}
add_action('init', 'custom_service');

function query_post_type($query){
  if (is_category()){
    $post_type = get_query_var('post_type');
    if ($post_type){
      $post_type = $post_type;
    }else {
      $post_type = array('post', 'service');
      $query - set('post_type', $post_type);
      return $query;
    }
  }
}
add_filter('pre_get_posts', 'query_post_type');