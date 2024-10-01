<?php

function webcar_add_features(){
  add_theme_support( feature: 'custom-logo' );
  add_theme_support(feature: 'post-thumbnails');
}
add_action('after_setup_theme', 'webcar_add_features');

function webcar_register_menu(){
  register_nav_menu(
    location: 'menu-navegacao',
    description: 'Menu Navegação'
  );
}
add_action('init', 'webcar_register_menu');