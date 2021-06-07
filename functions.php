<?php
function mytheme_enqueue_scripts() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'script', get_theme_file_uri( '/assets/js/main.js' ) );
  wp_enqueue_script( 'bootstrap_js', get_theme_file_uri( '/assets/js/bootstrap/bootstrap.bundle.js' ) );
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );





function mytheme_init_widgets() {
  register_sidebar(array(
    'name' => 'Main Sidebar',
    'id' => 'main_sidebar',

    // tag to surround description
    'description' => 'hello sidebar',
    'before_title' => '<h3>', //<h2> is the default
    'after_title' => '</h3>',
    'before_widget' => '<ul><li id="%1$s" class="widget %2$s">', // this is the default, swap for <div> if you want
    // wordpress will replace %1$s
    'after_widget' => '</li></ul>',
    'class' => '', // wordpress will add class to widget
  ));
}
add_action('widgets_init', 'mytheme_init_widgets');

function mytheme_init_custom_post_type_help() {
  register_post_type('help',
    array(
      'labels' =>array(
        'name' => 'Help Articles',
        'singular_name' => 'Help',
        'add_new_item' => 'Add New Help',
        'edit_item' => 'Edit Help'
      ),
      'menu-icon' => 'dashicons-clipboard',
      'has_archive' => true,
      'public' => true,
      'rewrite' => array('slug' => 'help-docs'),
      'show_in_rest' => true,
      'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'comments', 'post-formats'
      )
    )
  );
}
add_action('init', 'mytheme_init_custom_post_type_help');



function mytheme_theme_setup_custom_logo() {
  if ( function_exists('add_theme_support') ) {
    add_theme_support( 'custom-logo', array(
      'height' => 300,
      'width' => 300,
      'flex-height' => true,
      'flex-width' => true,
      'unlink-homepage-logo' => true,
      // 'header-text' => array( 'site-title', 'site-description' ), // classes that can be replaced with the logo???
    ) );
    
  }
}
add_action('after_setup_theme', 'mytheme_theme_setup_custom_logo');

function mytheme_theme_setup_post_thumbnails() {
  add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'mytheme_theme_setup_post_thumbnails');

function mytheme_theme_setup_post_types() {
  add_theme_support( 'post-formats', array( 
    'aside', 'gallery', 'quote', 'image', 'video'
  ) );
}
add_action('after_setup_theme', 'mytheme_theme_setup_post_types');

?>