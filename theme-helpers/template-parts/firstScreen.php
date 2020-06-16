<section class="main-block pt-5">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-12">
          <h1><?= get_headline($post->ID,$post->post_parent,'0') ?></h1>
          <div class="row ml-lg-n5">
            <div class="col-lg-6 col-12 d-flex first_screen_list mb-4">
              <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
              <p>До 10 000 000 рублей на срок до 3 лет</p>
            </div>
            <div class="col-lg-6 col-12 d-flex first_screen_list mb-4">
              <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
              <p>С любой кредитной историей</p>
            </div>
            <div class="col-lg-6 col-12 d-flex first_screen_list mb-4">
              <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
              <p>Без комиссий и справок с работы</p>
            </div>
            <div class="col-lg-6 col-12 d-flex first_screen_list mb-4">
              <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
              <p>После выдычи займа авто остается у вас</p>
            </div>
            <div class="col-lg-6 col-12 d-flex first_screen_list mb-4">
              <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
              <p>Одобрение за 5 минут, выдача за 30 минут</p>
            </div>
            <div class="col-lg-6 col-12 d-flex mt-0">
              <button class="new-button" data-toggle="modal" data-target="#formModal">Оставить заявку</button>
            </div> 
          </div>
        </div>
      </div>
      <div class="fst_screen_img">
        <img class="ml-5 mt-5 bluecar uk-scrollspy-inview uk-animation-slide-right" src="<?= $image; ?>">
      </div>
    </div>
  </div>
</section>

<?php get_template_part('theme-helpers/template-parts/form','horizontal'); ?>