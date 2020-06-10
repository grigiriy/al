<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Займы под ПТС в <?= get_declension(get_city($post->ID),'1') ?></title>
    <meta name="description" content="Наш автоломбард предлагает займы под залог ПТС или автомобиля от 2% в <?= get_declension(get_city($post->ID),'1') ?>! 30 минут и деньги на руках, без справок и поручителей, даже с плохой кредитной историей!">
  	<?php wp_head() ?>
  </head>
  <?php $bodyClass = is_front_page( $post->ID ) ? 'main' : '' ?>



<!-- HOLY SHIT! -->
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
<link rel="stylesheet" href="/wp-content/themes/al_theme/css/custom.css">
<!-- HOLY SHIT! -->
<link rel="stylesheet" href="/wp-content/themes/al_theme/css/main.css">


<body>


<?php
get_template_part('theme-helpers/template-parts/header');
?>
<div class="app">
