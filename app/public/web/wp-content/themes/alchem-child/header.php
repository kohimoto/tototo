<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
<?php wp_head(); ?>
<script>
wow = new WOW(
  {
  boxClass: 'wow',
  animateClass: 'animated',
  offset:100
  }
);
wow.init();
</script>
</head>

<body <?php body_class($body_class); ?>>
<div class="wrapper">
<div class="top-wrap">
  <header class="header-style-1 header-wrap  logo-left">
    <div class="fxd-header logo-left">
      <div class="container">
        <div class="logo-box text-left alchem_header_style alchem_default_logo">
          <div class="name-box">
            <a href="/"><h1 class="site-name"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/logo.png"></h1></a>
          </div>
        </div>
        <button class="site-nav-toggle">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars fa-2x"></i>
        </button>
        <nav class="site-nav" role="navigation">
          <ul id="menu-main" class="main-nav">
            <?php
            if( is_home() || is_front_page()){
            ?>
              <li><a href="#about">ABOUT</a></li>
              <li><a href="#news">NEWS</a></li>
              <li><a href="#company">COMPANY</a></li>
              <li><a href="#contact">CONTACT</a></li>
            <?php
            }else{
            ?>
            <li><a href="/#about">ABOUT</a></li>
            <li><a href="/#news">NEWS</a></li>
            <li><a href="/#company">COMPANY</a></li>
            <li><a href="/#contact">CONTACT</a></li>
            <?php
            }
            ?>
          </ul>
        </nav>
      </div>
    </div>
    <div class="clear"></div>
  </header>
</div>
