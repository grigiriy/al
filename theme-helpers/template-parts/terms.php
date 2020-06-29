<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8 offset-0 offset-xl-2 text-center">
            <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] .' '. set_nowrap(get_declension(get_city($post->ID),$subtitle_arr[1])).' '.$subtitle_arr[2]; ?>
                <h2><?= $subtitle; ?></h2>
                <p class="subtitle">Подробные условия займа и требования у заемщику и авто</p>
            </div>
        </div>

        <div class="row subtitle">
            <div class="col-md-5 offset-md-2 offset-0 col-12 mb-3 d-flex uslov_list">
                <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="tick">
                <p><b>Сумма займа</b>
                <br>от 25 000 до <br class="br-mobile">10 000 000 рублей</p>
            </div>
            <div class="col-md-4 offset-md-0 offset-0 col-12 mb-3 d-flex uslov_list">
                <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="tick">
                <p><b>Срок займа</b>
                <br>от 1 до 36 месяцев</p>
            </div>
            <div class="col-md-5 offset-md-2 offset-0 col-12 mb-3 d-flex uslov_list">
                <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="tick">
                <p><b>Процентная ставка</b>
                <br>от 24 до 42% годовых</p>
            </div>
            <div class="col-md-4 offset-md-0 offset-0 col-12 mb-3 d-flex uslov_list">
                <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="tick">
                <p><b>Без справок 2-НДФЛ</b>
                <br>о подтверждении дохода</p>
            </div>
            <div class="col-md-5 offset-md-2 offset-0 col-12 mb-3 d-flex uslov_list">
                <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="tick">
                <p><b>Максимальная сумма займа</b>
                <br>до 90% от рыночной стоимости автомобиля</p>
            </div>
            <div class="col-md-4 offset-md-0 offset-0 col-12 mb-3 d-flex uslov_list">
                <img src="<?= get_template_directory_uri(); ?>/css/images/tick.png" alt="tick">
                <p><b>Без комиссий и штрафов</b>
                <br>за досрочное погашение</p>
            </div>
        </div>
    </div>
</section>