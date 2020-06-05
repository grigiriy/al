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
<body>
<header>
</header>
<div class="app">
