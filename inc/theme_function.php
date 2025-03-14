<?php 
//* Theme Function

function sohel_customizar_register($wp_customize) {
  $wp_customize-> add_section('sohel_header_logo', array(
    'title' =>__('Update Logo', 'sohelrana'),
    'description' => 'If you interested to update your logo, You can do it here.',
  ));

  $wp_customize-> add_setting('sohel_logo', array(
    'default' => get_bloginfo('template_directory'). '/img/logo.png',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'sohel_logo', array(
    'label' => 'Logo Uplod',
    'description' => 'If you interested to update your logo, You can do it here.',
    'setting' => 'sohel_logo',
    'section' => 'sohel_header_logo',
  ) ));

  
  //* Menu position section
  $wp_customize-> add_section('sohel_menu_option', array(
    'title' =>__('Menu Position', 'sohelrana'),
    'description' => 'If you interested to update your menu position, you can do ithere.'
  ));

  $wp_customize-> add_setting('sohel_menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize-> add_control('sohel_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'If you interested to update your menu position, you can do it here.',
    'setting' => 'sohel_menu_position',
    'section' => 'sohel_menu_option',
    'type' => 'radio', 
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ), 
  ));

//* Theme color
$wp_customize-> add_section('sohel_colors', array(
  'title' =>__('Theme Colors', 'sohelrana'),
  'description'=> 'If you interested to update your color.'
));

$wp_customize-> add_setting('sohel_bg_color', array(
  'default'=> '#ffffff',
));


$wp_customize-> add_control(new WP_Customize_Color_Control($wp_customize, 'sohel_bg_color', array(
  'label'=> 'Background Color',
  'section'=> 'sohel_colors',
  'setting'=> 'sohel_bg_color',
)));

$wp_customize-> add_setting('sohel_primary_colors', array(
  'default'=> '#ea1a70',
));

$wp_customize-> add_control(new WP_Customize_Color_Control($wp_customize, 'sohel_primary_colors', array(
  'label'=> 'Primary Color',
  'section'=> 'sohel_colors',
  'setting'=> 'sohel_primary_colors',
)));


   
  //* Footer Section
  $wp_customize-> add_section('sohel_footer_section', array(
    'title' =>__('Footer Section', 'sohelrana'),
    'description' => 'If you interested to update your footer section, you can do ithere.'
  ));

  $wp_customize-> add_setting('sohel_copyright_section', array(
    'default' => '&copy; Copyright 2025 |MD. SHOHEL RANA',
  ));

  $wp_customize-> add_control('sohel_copyright_section', array(
    'label' => 'Footer Section',
    'description' => 'If you interested to update your footer section, you can do it here.',
    'setting' => 'sohel_copyright_section',
    'section' => 'sohel_footer_section', 
  ));


}

add_action('customize_register', 'sohel_customizar_register');

function sohel_theme_color_cus(){
  ?> 
  <style>
   body{background:<?php  echo get_theme_mod('sohel_bg_color'); ?>}
  :root{ --pink:<?php  echo get_theme_mod('sohel_primary_colors'); ?>}
  </style>
  <?php 
}
add_action('wp_head', 'sohel_theme_color_cus' );