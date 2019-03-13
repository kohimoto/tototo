<?php
add_action('wp_enqueue_scripts','theme_enqueue_scripts' );
function theme_enqueue_scripts() {
  wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css' );
  wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js' );
  wp_enqueue_script( 'child-script-masonry', get_stylesheet_directory_uri() . '/assets/js/jquery.masonry.min.js' );
  wp_enqueue_script( 'child-script-infinitescroll', get_stylesheet_directory_uri() . '/assets/js/jquery.infinitescroll.min.js' );
  wp_enqueue_script( 'child-script-custom', get_stylesheet_directory_uri() . '/assets/js/custom.js' );
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/assets/css/style.css', array('parent-style')
);
}
/**
  インクエリである かつ ホーム画面である場合に、newsカテゴリ除外
**/
add_action( 'pre_get_posts', 'modify_query_exclude_category' );
function modify_query_exclude_category( $query ) {
    if ( ! is_admin() && $query->is_main_query() && $query->is_home() )
        $query->set( 'cat', '-2' );
}
?>
