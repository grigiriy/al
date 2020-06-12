<div class="uk-section">
  <div class="uk-container uk-position-relative">
    <div class="in-header">
    <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] . ' ' . get_declension(get_city($post->ID),$subtitle_arr[1]).' '.$subtitle_arr[2]; ?>
      <h2 class="uk-h2 uk-text-center"><?= apply_filters( 'the_content', $subtitle ); ?></h2>
      <p class="uk-text-center padding-lr-50">В нашей компании вы без проблем получите деньги в кредит под залог ПТС или автомобиля в  <?= get_declension(get_city($post->ID),'1'); ?>,  всего за 30 минут со следующими <b>приемуществами:</b> </p>
    </div>
    <div class="uk-child-width-1-2@s uk-child-width-1-3@l uk-grid-default uk-grid-match uk-grid" uk-grid="" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: .block-block; delay: 300;">

      <div class="uk-first-column uk-text-center block-block uk-scrollspy-inview uk-animation-slide-bottom-small" style="">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_car.png" ></div>
        <div class="head-block">Автомобиль остается в пользовании и&nbsp;собственности</div>
        <div class="text-block">Воспользовавшись услугой, кредит под залог ПТС, после подписания договора, вы продолжаете пользоваться автомобилем.</div>

      </div>
      <div class="uk-text-center block-block uk-scrollspy-inview uk-animation-slide-bottom-small" style="">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_credit.png" ></div>
        <div class="head-block">Кредитная история не важна</div>
        <div class="text-block">При одобрении заявки, мы не смотрим кредитную историю клиента, нам важно только состояние автомобиля.</div>

      </div>
      <div class="uk-text-center block-block uk-scrollspy-inview uk-animation-slide-bottom-small" style=""> 

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_online.png" ></div>
        <div class="head-block">Онлайн-одобрение кредита</div>
        <div class="text-block">Уже через 5 минут, после того, как заполните заявку, вы сможете узнать сумму и процентную ставку одобренную для вас.</div>

      </div>
      <div class="uk-text-center block-block uk-grid-margin uk-first-column uk-scrollspy-inview uk-animation-slide-bottom-small" style="">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_percent.png" ></div>
        <div class="head-block">Низкая ставка без скрытых процентов</div>
        <div class="text-block">Ставка в Москвоском автоломбарде начинается от 2% в месяц, без скрытых комиссий и переплат.</div>

      </div>
      <div class="uk-text-center block-block uk-grid-margin uk-scrollspy-inview uk-animation-slide-bottom-small" style="">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_time.png" ></div>
        <div class="head-block">Досрочное погашение в любой день</div>
        <div class="text-block">Вы можете досрочно погасить кредит под залог авто в любой день, оплатив проценты за фактическое пользование деньгами.</div>

      </div>
      <div class="uk-text-center block-block uk-grid-margin uk-scrollspy-inview uk-animation-slide-bottom-small" style="">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_price.png" ></div>
        <div class="head-block">Работаем согласно закону РФ</div>
        <div class="text-block">Соблюдаем все принятые законы в РФ. Обратившись к нам, вы выбираете надежного и проверенного партнера.</div>

      </div> 

    </div>
  </div>
</div>