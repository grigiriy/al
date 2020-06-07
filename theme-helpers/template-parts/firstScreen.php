<section class="background-f2 uk-overflow-hidden main-block">        

  <div class="uk-container uk-position-relative">

    <div class="scene-parallax" id="scene1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: relative; pointer-events: none;">        
      <div class="layer" data-depth="0.4" style="transform: translate3d(20px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><div class="back-circ1 circleanim"></div></div>
      <div class="layer" data-depth="-0.2" style="transform: translate3d(-10px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><div class="back-circ2 circleoanim"></div></div>
      <div class="layer" data-depth="0.2" style="transform: translate3d(10px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><div class="back-circ3 circletanim"></div></div>
    </div>

    <div class="uk-grid uk-position-relative" uk-grid="">
      <div class="uk-width-1-1 uk-width-4-5@m uk-width-3-5@l padding-main uk-first-column">

        <h1><?= get_headline($post->ID,$post->post_parent,'0') ?></h1>
        <p>Автоломбард в городе Москва выдает деньги под залог ПТС автомобиля за&nbsp;30&nbsp;минут&nbsp;на&nbsp;выгодных для клиента условиях.</p>

        <div class="uk-child-width-auto uk-grid-default uk-margin uk-flex font-weight-700 uk-grid" uk-grid="">

          <div class="icon-horizon uk-first-column">
            <div class="icon-horizon-text">                                      
              <div class="uk-margin-remove-bottom">Займы до 3 000 000 ₽</div>       
              <div class="deepblue">Авто остаётся у вас</div> 
            </div>
          </div>     


          <div class="icon-horizon">
            <div class="icon-horizon-text">                                      
              <div class="uk-margin-remove-bottom">100% одобрения</div>       
              <div class="deepblue">Ставка от 2% в месяц</div> 
            </div>
          </div>     

        </div>

        <a class="uk-button uk-button-primary uk-margin-right uk-margin-bottom" href="#modal-center1" uk-toggle="">Оставить заявку</a>
      </div>

      <div class="uk-width-1-1 uk-width-1-5@m uk-width-2-5@l">                 
        <img class="bluecar uk-scrollspy-inview uk-animation-slide-right" src="<?= get_template_directory_uri(); ?>/css/images/car-blue.png" uk-scrollspy="cls: uk-animation-slide-right; delay: 1000" style="" width="1000" height="512">
      </div>
    </div>
  </div>
</section>

<pre>
<?php
print_r($post)
?>

</pre>

<?php get_template_part('theme-helpers/template-parts/form','horizontal'); ?>


