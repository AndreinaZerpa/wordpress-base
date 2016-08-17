<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/estilos.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
<?php wp_head();?>
</head>
<body>
<header>
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
    <span class="sr-only">Menu</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a href="index.html" class="navbar-brand">Music</a>

      </div>

  <nav class="collapse navbar-collapse" id="navegacion">


    <?php wp_nav_menu(
     array(
     'container' => false,
     'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
     'theme_location' => 'menu'
     )); ?>



   </nav>



  </header>
