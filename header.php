<!doctype html>
<html ln="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/library/css/style.css' ?>">

  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/library/images/apple-icon-touch.png'?>">
  <link rel="icon" href="<?php echo get_template_directory_uri() . '/favicon.png' ?>">
  <!--[if IE]>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <![endif]-->
  <meta name="msapplication-TileColor" content="#f01d4f">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri().'/library/images/win8-tile-icon.png' ?>">
  
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic' rel='stylesheet' type='text/css'>
  <script src="<?php echo get_template_directory_uri().'/library/js/vendor/custom.modernizr.js' ?>"></script>
  
<?php wp_head(); ?>
</head>
<body>
  <header class="gradient-top">
    <div id="box"></div>
    <ul id="social">
        <a href="https://www.facebook.com/ACHSChipmunks"><li class="facebook">Facebook</li></a>
        <a href="https://twitter.com/ACHSChipmunks"><li class="twitter">Twitter</li></a>
        <a href="https://vimeo.com/chapelle"><li class="vimeo">Vimeo</li></a>
        <a href="http://youtube.com/user/achschipmunks"><li class="youtube">Youtube</li></a>
      </ul>
    <div id="top-head">
      <div class="contain">
        <nav id="secondary-nav">
          <?php bones_head_nav(); ?>
          <input class="search-bar" type="search" name="s">
        </nav>
        <p class="description"><?php bloginfo('description'); ?></p>
        </div>
      </div>
    <div class="contain-nav">
      <a href="<?php echo get_home_url(); ?>"><h1 class="logo"><span class="ir hidden">Chapelle</span></h1></a>
      <nav class="animenu"> 
          <input type="checkbox" id="button">
          <label for="button" >Menu</label>
         <?php bones_main_nav(); ?>
      </nav>
    </div>
    <?php if (is_front_page()): ?>
      <ul data-orbit>
      <li>
        <img src="<?php the_field('slider_img_1'); ?>" />
      </li>
      <li>
        <img src="<?php the_field('slider_img_2'); ?>" />
      </li>
      <li>
        <img src="<?php the_field('slider_img_3'); ?>" />
      </li>
      <li>
        <img src="<?php the_field('slider_img_4'); ?>" />
      </li>
      </ul>
    <?php else: ?>
    <div class="header-img">      
      <?php
      $img = get_field('head_image');
      if($img):?>
      <img src="<?php echo $img; ?>" />
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri() . '/library/img/inner-img.jpg'?>" />
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </header>
