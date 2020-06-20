<section>
  <div class="in-header">
    <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] . ' ' . get_declension(get_city($post->ID),$subtitle_arr[1]).' '.$subtitle_arr[2]; ?>
    <h2 class="uk-h2 uk-text-center"><?= apply_filters( 'the_content', $subtitle ); ?></h2>
    <p class="uk-text-center padding-lr-50 subtitle">Мы выдаем займы под залог легковых, грузовых автомобилей, спецтехники, мотоциклов.</p>
  </div>
  <div class="uk-child-width-1-2@s uk-child-width-1-5@l uk-grid-collapse uk-grid-match uk-grid" uk-grid="">
    <div class="uk-first-column">
      <a class="small-card main-bg_onhov background-f2 uk-flex uk-flex-between uk-flex-middle" href="<?= get_city_link($post->ID);?>">
        <div class="number-card">01</div>
        <div class="text-card">Легковой<br>автомобиль</div>
        <div class="card-img card-img1"><img src="<?= get_template_directory_uri(); ?>/css/images/card1.png" width="195" height="130"></div>
      </a>
    </div>
    <div>
      <a class="small-card main-bg_onhov background-f8 uk-flex uk-flex-between uk-flex-middle" href="<?= get_city_link($post->ID);?>yuridicheskie-licza/" >
        <div class="number-card">02</div>
        <div class="text-card">Коммерческий<br>транспорт</div>
        <div class="card-img card-img2"><img src="<?= get_template_directory_uri(); ?>/css/images/card2.png" width="195" height="130"></div>
      </a>
    </div>
    <div> 
      <a class="small-card main-bg_onhov background-f2 uk-flex uk-flex-between uk-flex-middle" href="<?= get_city_link($post->ID);?>motoczikl/" >
        <div class="number-card">03</div>
        <div class="text-card">Мотоцикл</div>
        <div class="card-img card-img3"><img src="<?= get_template_directory_uri(); ?>/css/images/card3.png" width="195" height="130"></div>
      </a>
    </div>
    <div>
      <a class="small-card main-bg_onhov background-f8 uk-flex uk-flex-between uk-flex-middle" href="<?= get_city_link($post->ID);?>specztehnika/">
        <div class="number-card">04</div>
        <div class="text-card">СпецТехника</div>
        <div class="card-img card-img4"><img src="<?= get_template_directory_uri(); ?>/css/images/card4.png" width="195" height="130"></div>
      </a>
    </div>
    <div>
      <a class="small-card main-bg_onhov background-f2 uk-flex uk-flex-between uk-flex-middle" href="<?= get_city_link($post->ID);?>gruzovoj-avtomobil/" >
        <div class="number-card">05</div>
        <div class="text-card">Грузовой<br>автомобиль</div>
        <div class="card-img card-img5"><img src="<?= get_template_directory_uri(); ?>/css/images/card5.png" width="195" height="130"></div>
      </a>
    </div>
  </div>
</section>