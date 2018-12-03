<?php
add_action('wp_enqueue_scripts','theme_enqueue_scripts' );
function theme_enqueue_scripts() {
  wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css' );
  wp_enqueue_style('child-slick-style', get_stylesheet_directory_uri() .'/css/slick.css');
  wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/jquery.min.js' );
  wp_enqueue_script( 'child-slick-script', get_stylesheet_directory_uri() . '/js/slick.js' );
  wp_enqueue_script( 'child-wow-script', get_stylesheet_directory_uri() . '/js/wow.js' );
  wp_enqueue_script( 'child-custom-script', get_stylesheet_directory_uri() . '/js/custom.js' );
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css', array('parent-style')
);
}
?>
