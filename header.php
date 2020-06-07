<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Займы под ПТС в <?= get_declension(get_the_title(),'1') ?></title>
    <meta name="description" content="Наш автоломбард предлагает займы под залог ПТС или автомобиля от 2% в <?= get_declension(get_the_title(),'1') ?>! 30 минут и деньги на руках, без справок и поручителей, даже с плохой кредитной историей!">
  	<?php wp_head() ?>
  </head>
  <?php $bodyClass = is_front_page( $post->ID ) ? 'main' : '' ?>



<!-- HOLY SHIT! -->
<link href="https://avtolombard24.com/css/normalize.css" rel="stylesheet" type="text/css">
<link href="https://avtolombard24.com/css/webflow.css" rel="stylesheet" type="text/css">

<link href="https://avtolombard24.com/css_new/s4.css" rel="stylesheet" type="text/css">
<link href="https://avtolombard24.com/css_new/s7.css" rel="stylesheet" type="text/css">
<link href="https://avtolombard24.com/css_new/uikit.min.css" rel="stylesheet" type="text/css">
<link href="https://avtolombard24.com/css_new/stylesheet.css" rel="stylesheet" type="text/css">

<!-- part 2 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://zaim-pod-zalog-pts.ru/assets/styles/style.css">
<link rel="stylesheet" href="https://zaim-pod-zalog-pts.ru/assets/styles/style2.css">


<!-- part 3 -->
<link rel="stylesheet" href="/wp-content/themes/al_theme/css/fonts.css">
<link rel="stylesheet" href="/wp-content/themes/al_theme/css/custom.css">
<!-- HOLY SHIT! -->


<body>


<?php
get_template_part('theme-helpers/template-parts/header');
?>
<div class="app">
