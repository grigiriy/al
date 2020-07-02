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

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   
   ym(65306272, "init", {
     clickmap:true,
     trackLinks:true,
     accurateTrackBounce:true
    });
  </script>
<noscript><div><img src="https://mc.yandex.ru/watch/65306272" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<body>
<div class="app">
  <?php get_template_part('theme-helpers/template-parts/header'); ?>
