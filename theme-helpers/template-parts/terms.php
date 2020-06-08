<div class="uslovia">
    <div class="container pt-2">
        <div class="row">
            <div class="col-8 offset-2 text-center" id="tut">
            <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] . ' ' . get_declension(get_city($post->ID),$subtitle_arr[1]).' '.$subtitle_arr[2]; ?>
                <h2 class="rating-text-one"><?= apply_filters( 'the_content', $subtitle ); ?></h2>
                <p class="rating-text-two">Подробные условия займа и требования у заемщику и авто</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-4 offset-sm-0 offset-md-2 col-sm-12">
                <p class="conditions-one-text"> <img src="<?= get_template_directory_uri(); ?>/css/images/arrow.png" alt="arrow">Сумма займа:</p>
                <p class="conditions-two-text"> от 25 000 до <br class="br-mobile">10 000 000 рублей</p>
            </div>
            <div class="col-xl-4 col-md-4 offset-sm-0 offset-md-1 col-sm-12">
                <p class="conditions-one-text"> <img src="<?= get_template_directory_uri(); ?>/css/images/arrow.png" alt="arrow">Срок займа: </p>
                <p class="conditions-two-text">от 1 до 36 месяцев</p>
            </div>
            <div class="col-xl-4 col-md-4 offset-sm-0 offset-md-2 col-sm-12">
                <p class="conditions-one-text"> <img src="<?= get_template_directory_uri(); ?>/css/images/arrow.png" alt="arrow">Процентная ставка: </p>
                <p class="conditions-two-text"> от 2% до 3,5% в месяц</p>
                <p class="conditions-3-text">(от 24 до 42% годовых)</p>
            </div>
            <div class="col-xl-4 col-md-4 offset-sm-0 offset-md-1 col-sm-12">
                <p class="conditions-one-text"> <img src="<?= get_template_directory_uri(); ?>/css/images/arrow.png" alt="arrow">Максимальная сумма займа:
                </p>
                <p class="conditions-two-text">до 90% от рыночной стоимости автомобиля</p>
            </div>
        </div>
    </div>
</div>