<div class="uk-section">
  <div class="uk-container uk-position-relative">
    <div class="in-header">
      <?php $subtitle = ($subtitle[1] === null) ? $subtitle[0] : $subtitle[0] . ' ' . get_declension(get_city($post->ID),$subtitle[1]); ?>
      <h2 class="uk-h2 uk-text-center"><?= $subtitle; ?></h2>
      <p class="uk-text-center padding-lr-50">В нашей компании вы без проблем получите деньги в кредит под залог ПТС или автомобиля в  Москве и Московской области,  всего за 30 минут со следующими <b>приемуществами:</b> </p>
    </div>
    <div class="uk-child-width-1-2@s uk-child-width-1-3@l uk-grid-default uk-grid-match uk-grid" uk-grid="" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: .block-block; delay: 300;">

      <div class="uk-first-column uk-text-center block-block uk-scrollspy-inview uk-animation-slide-bottom-small" style="">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/preim1.svg" width="110" height="110"></div>
        <div class="head-block">Автомобиль остается в пользовании и&nbsp;собственности</div>
        <div class="text-block">Воспользовавшись услугой, кредит под залог ПТС, после подписания договора, вы продолжаете пользоваться автомобилем.</div>

      </div>
      <div class="uk-text-center block-block uk-scrollspy-inview uk-animation-slide-bottom-small" style="">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/preim2.svg" width="110" height="110"></div>
        <div class="head-block">Кредитная история не важна</div>
        <div class="text-block">При одобрении заявки, мы не смотрим кредитную историю клиента, нам важно только состояние автомобиля.</div>

      </div>
      <div class="uk-text-center block-block uk-scrollspy-inview uk-animation-slide-bottom-small" style=""> 

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/preim3.svg" width="110" height="110"></div>
        <div class="head-block">Онлайн-одобрение кредита</div>
        <div class="text-block">Уже через 5 минут, после того, как заполните заявку, вы сможете узнать сумму и процентную ставку одобренную для вас.</div>

      </div>
      <div class="uk-text-center block-block uk-grid-margin uk-first-column uk-scrollspy-inview uk-animation-slide-bottom-small" style="">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/preim4.svg" width="110" height="110"></div>
        <div class="head-block">Низкая ставка без скрытых процентов</div>
        <div class="text-block">Ставка в Москвоском автоломбарде начинается от 2% в месяц, без скрытых комиссий и переплат.</div>

      </div>
      <div class="uk-text-center block-block uk-grid-margin uk-scrollspy-inview uk-animation-slide-bottom-small" style="">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/preim5.svg" width="110" height="110"></div>
        <div class="head-block">Досрочное погашение в любой день</div>
        <div class="text-block">Вы можете досрочно погасить кредит под залог авто в любой день, оплатив проценты за фактическое пользование деньгами.</div>

      </div>
      <div class="uk-text-center block-block uk-grid-margin uk-scrollspy-inview uk-animation-slide-bottom-small" style="">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/preim6.svg" width="110" height="110"></div>
        <div class="head-block">Работаем согласно закону РФ</div>
        <div class="text-block">Соблюдаем все принятые законы в РФ. Обратившись к нам, вы выбираете надежного и проверенного партнера.</div>

      </div> 

    </div>
  </div>
</div>