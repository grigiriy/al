<section class="main-block pt-5">        

  <div class="container-fluid">

    <!-- <div class="scene-parallax" id="scene1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: relative; pointer-events: none;">        
      <div class="layer" data-depth="0.4" style="transform: translate3d(20px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><div class="back-circ1 circleanim"></div></div>
      <div class="layer" data-depth="-0.2" style="transform: translate3d(-10px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><div class="back-circ2 circleoanim"></div></div>
      <div class="layer" data-depth="0.2" style="transform: translate3d(10px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><div class="back-circ3 circletanim"></div></div>
    </div> -->
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-12">
          <h1><?= get_headline($post->ID,$post->post_parent,'0') ?></h1>

          <div class="row ml-lg-n5">
            <div class="col-lg-6 col-12 d-flex first_screen_list mb-3">
              <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
              <p>До 5 000 000 рублей на срок до 3 лет</p>
            </div>
            <div class="col-lg-6 col-12 d-flex first_screen_list mb-3">
              <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
              <p>С любой кредитной историей</p>
            </div>
            <div class="col-lg-6 col-12 d-flex first_screen_list mb-3">
              <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
              <p>Без справок с места работы и поручителей</p>
            </div>
            <div class="col-lg-6 col-12 d-flex first_screen_list mb-3">
              <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
              <p>После выбычи займа авто остается у вас</p>
            </div>
            <div class="col-lg-6 col-12 d-flex first_screen_list mb-3">
              <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="">
              <p>Одобрение за 5 минут, выдача за 30 минут</p>
            </div>
          </div>
          <div class="col-lg-6 col-12 d-flex mt-3">
              <a class="uk-button uk-button-primary uk-margin-right uk-margin-bottom" data-toggle="modal" data-target="#formModal">Оставить заявку</a>
            </div> 
        </div>
      </div>
      <img class="ml-5 mt-5 bluecar uk-scrollspy-inview uk-animation-slide-right" src="<?= get_template_directory_uri(); ?>/css/images/car-blue.png" uk-scrollspy="cls: uk-animation-slide-right; delay: 1000" style="" width="1000" height="512">
    </div>
  </div>
</section>

<?php get_template_part('theme-helpers/template-parts/form','horizontal'); ?>


