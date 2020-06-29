<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Cache-Control" content="private">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= wp_kses(apply_filters( 'the_content', get_post_field('_genesis_title') ),'strip'); ?></title>
  	<?php wp_head(); ?>
  </head>
  <?php $bodyClass = is_front_page( $post->ID ) ? 'main' : '' ?>



<!-- donor styles -->
<link href="/wp-content/themes/al_theme/css/donor/normalize.css" rel="stylesheet" type="text/css">
<link href="/wp-content/themes/al_theme/css/donor/webflow.css" rel="stylesheet" type="text/css">
<link href="/wp-content/themes/al_theme/css/donor/nouislider.css" rel="stylesheet" type="text/css">

<link href="/wp-content/themes/al_theme/css/donor/s4.css" rel="stylesheet" type="text/css">
<link href="/wp-content/themes/al_theme/css/donor/s7.css" rel="stylesheet" type="text/css">
<link href="/wp-content/themes/al_theme/css/donor/uikit.min.css" rel="stylesheet" type="text/css">
<link href="/wp-content/themes/al_theme/css/donor/stylesheet.css" rel="stylesheet" type="text/css">

<!-- part 2 -->
<link rel="stylesheet" href="/wp-content/themes/al_theme/css/donor/bootstrap.css">
<link rel="stylesheet" href="/wp-content/themes/al_theme/css/donor/style.css">
<link rel="stylesheet" href="/wp-content/themes/al_theme/css/donor/style2.css">


<!-- part 3 -->
<link rel="stylesheet" href="/wp-content/themes/al_theme/css/fonts.css">
<!-- theme styles -->
<link rel="stylesheet" href="/wp-content/themes/al_theme/css/main.css">
<link rel="stylesheet" href="/wp-content/themes/al_theme/css/slick.css">

<script src="https://api-maps.yandex.ru/2.1/?apikey=ad3389a6-b7a1-40d0-a0a9-082e7fa02f7d&lang=ru_RU" type="text/javascript"></script>

<body>
<div class="app">
  <?php get_template_part('theme-helpers/template-parts/header'); ?>
