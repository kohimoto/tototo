<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <div class="header-inner">
      <h1><svg class="header-logo"><use xlink:href="#logo"></use></svg></h1>
      <ul class="header-menu">
        <li><a href="/">TOP</a></li>
        <li><a href="/about">ABOUT</a></li>
        <li><a href="/shop">SHOP</a></li>
        <li><a href="/contact">CONTACT</a></li>
      </ul>
    </div>

  </header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>
  <?php
  if ( is_front_page() && is_home() ) {
  ?>
  <?php
  $categories = get_categories('parent=0');
  //print_r($categories);
  if(is_array($categories)) {
  ?>
  <div class="site-cate-list">
    <?php
    foreach ($categories as $cat_k => $cat_v) {
      $cat_link = get_category_link($cat_v -> cat_ID);
      $cat_slug = $cat_v -> category_nicename;
      echo '<div class="cate-block"><h1><a href="' . $cat_link . '" class="'. $cat_slug.'"><span>'.$cat_v->name.'</span></a></h1>';
      $child_cat_num = count(get_term_children($cat_v->cat_ID,'category'));
      if($child_cat_num > 0){
      echo '<ul>';
      //子カテゴリの一覧取得条件
      $category_children_args = array('parent'=>$cat_v->cat_ID);
      //子カテゴリの一覧取得
      $category_children = get_categories($category_children_args);
      //子カテゴリの数だけリスト出力
      $cat_child_slug = "";
      foreach($category_children as $child_val){
        $cat_child_link = get_category_link($child_val -> cat_ID);
        $cat_child_slug = $child_val -> category_nicename;
        echo '<li><a href="' . $cat_child_link . '" class="'. $cat_child_slug.'">' . $child_val -> name . '</a>';
      }
      echo '</ul>';
    }
    ?>
    </div>
    <?php
    }
    ?>
    <?php
    ?>

  </div>
  <?php
    }
  }
  ?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
