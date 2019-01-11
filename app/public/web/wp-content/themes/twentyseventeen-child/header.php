<?php
include("./setting.php");

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
<link href="https://fonts.googleapis.com/css?family=Khula:800&amp;subset=devanagari,latin-ext" rel="stylesheet">
<script>
  (function(d) {
    var config = {
      kitId: 'bzs1sru',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <div class="header-inner">
      <h1><svg class="header-logo"><use xlink:href="#logo"></use></svg></h1>
      <ul class="header-menu">
        <li><a href="<?echo $SITE_URL;?>category/news"><span class="header-menu-list mask">NEWS</span></a></li>
        <li><a href="<?echo $SITE_URL;?>about"><span class="header-menu-list mask">ABOUT</span></a></li>
        <li><a href="https://to-to-to.stores.jp/"><span class="header-menu-list mask">SHOP</span></a></li>
        <li><a href="<?echo $SITE_URL;?>contact"><span class="header-menu-list mask">CONTACT</span></a></li>
      </ul>
    </div>
  </header>

<!-- #masthead -->

  <?php
  if ( (is_front_page() && is_home()) || is_category() ) {
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
      $add_class = "cate_".$cat_slug;
      echo '<div class="cate-block '.$add_class.'"><h2><a href="' . $cat_link . '" class="'. $cat_slug.'"><span>'.$cat_v->name.'</span></a></h2>';
      $child_cat_num = count(get_term_children($cat_v->cat_ID,'category'));
      if($child_cat_num >= 0){
      echo '<ul class="cate_child">';
      //子カテゴリの一覧取得条件
      $category_children_args = array('parent'=>$cat_v->cat_ID);
      //子カテゴリの一覧取得
      $category_children = get_categories($category_children_args);
      //子カテゴリの数だけリスト出力
      $cat_slug .= " cate_child_list mask";

      $cat_child_slug = "";
      $parent_list = '<li><a href="' . $cat_link . '" class="'. $cat_slug.'">' . $cat_v-> name . '</a></li>';
      echo $parent_list;
      foreach($category_children as $child_val){
        $cat_child_link = get_category_link($child_val -> cat_ID);
        $cat_child_slug = $child_val -> category_nicename;
        $cat_child_slug .= " cate_child_list mask";
        echo '<li><a href="' . $cat_child_link . '" class="'. $cat_child_slug.'">' . $child_val -> name . '</a></li>';
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
  <div id ="loader-bg">
    <div id="loader-line">
    </div>
    <div id="loader">
	     <svg class="header-logo" id="logo-color"><use xlink:href="#logo"></use></svg>
    </div>
  </div>
	<div class="site-content-contain">
		<div id="content" class="site-content">
