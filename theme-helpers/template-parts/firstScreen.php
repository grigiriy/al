<section class="main-block pt-5 pt-lg-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-12 mt-0 mt-lg-5">
        <h1><?= get_headline($post->ID,$post->post_parent,'0') ?></h1>
        <div class="row">
          <div class="col-lg-6 col-12 d-flex first_screen_list mb-4">
            <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
            <p class="mt-0">До 10 000 000 ₽<br>на срок до 3 лет</p>
          </div>
          <div class="col-lg-6 col-12 d-flex first_screen_list mb-4">
            <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
            <p class="mt-0">С любой<br>кредитной историей</p>
          </div>
          <div class="col-lg-6 col-12 d-flex first_screen_list mb-4">
            <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
            <p class="mt-0">Без комиссий<br>и справок с работы</p>
          </div>
          <div class="col-lg-6 col-12 d-flex first_screen_list mb-4">
            <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
            <p class="mt-0">После выдачи займа<br>авто остается у вас</p>
          </div>
          <div class="col-lg-6 col-12 d-flex first_screen_list mb-4">
            <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
            <p class="mt-0 nowrap">Решение за 5 минут,<br>выдача за 30 минут</p>
          </div>
          <div class="col-lg-6 col-12 d-flex mt-0">
            <button class="new-button gross_btn" data-toggle="modal" data-target="#formModal">Отправить заявку</button>
          </div> 
        </div>
      </div>
    </div>
    <div class="fst_screen_img">
      <img class="ml-5 mt-5 mt-lg-0 bluecar uk-scrollspy-inview uk-animation-slide-right" src="<?= $image; ?>">
    </div>
  </div>
</section>

<?php
set_query_var( 'form_arr', get_form_header('top',$post->ID));
get_template_part('theme-helpers/template-parts/form','horizontal'); ?>