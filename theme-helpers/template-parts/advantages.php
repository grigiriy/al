<section class="bg-f2">
  <div class="uk-container uk-position-relative">
    <div class="in-header">
    <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] . ' ' . get_declension(get_city($post->ID),$subtitle_arr[1]).' '.$subtitle_arr[2]; ?>
      <h2 class="text-center"><?= apply_filters( 'the_content', $subtitle ); ?></h2>
      <p class="subtitle">Получите деньги под залог ПТС в автоломбарде на самых выгодных условиях</p>
    </div>
    <div class="row slick_mob slick_advantages">

      <div class="text-center col-md-4 uk-animation-slide-bottom-small mb-4 px-sm-0 mx-3 mx-md-0 px-md-3">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_car.png" ></div>
        <div class="head-block">Автомобиль остается у Вас</div>
        <div class="text-block">Получив деньги, вы продолжаете пользоваться автомобилем и он остается в вашей собственности.</div>

      </div>
      <div class="text-center col-md-4 uk-animation-slide-bottom-small mb-4 px-sm-0 mx-3 mx-md-0 px-md-3">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_credit.png" ></div>
        <div class="head-block">Кредитная история не имеет значения</div>
        <div class="text-block">Для нас важно только состояние вашего автомобиля, а не то, имеете ли вы задолженности или просрочки.</div>

      </div>
      <div class="text-center col-md-4 uk-animation-slide-bottom-small mb-4 px-sm-0 mx-3 mx-md-0 px-md-3">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_online.png" ></div>
        <div class="head-block">Онлайн-одобрение займа</div>
        <div class="text-block">Через 5 минут, после отправки заявки, вы сможете узнать одобренную сумму и процентную ставку займа.</div>

      </div>
      <div class="text-center col-md-4 uk-animation-slide-bottom-small mb-4 px-sm-0 mx-3 mx-md-0 px-md-3">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_percent.png" ></div>
        <div class="head-block">Низкая ставка без скрытых процентов</div>
        <div class="text-block">Мы выдаем займы со ставкой от 2% до 3,5% в месяц, без скрытых комиссий и каких либо переплат.</div>

      </div>
      <div class="text-center col-md-4 uk-animation-slide-bottom-small mb-4 px-sm-0 mx-3 mx-md-0 px-md-3">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_time.png" ></div>
        <div class="head-block">Досрочное погашение без штрафов</div>
        <div class="text-block">Мы даем досрочно погасить займ под ПТС в любой день, оплатив проценты только за фактическое пользование деньгами.</div>

      </div>
      <div class="text-center col-md-4 uk-animation-slide-bottom-small mb-4 px-sm-0 mx-3 mx-md-0 px-md-3">

        <div class="img-block"><img src="<?= get_template_directory_uri(); ?>/css/images/adv_icon_price.png" ></div>
        <div class="head-block">Высокий процент от стоимости авто</div>
        <div class="text-block">Одобряем займы под залог ПТС на сумму до 90% от рыночной стоимости автомобиля.</div>

      </div> 

    </div>
  </div>
</section>