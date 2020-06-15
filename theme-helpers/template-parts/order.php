<?php get_template_part('theme-helpers/template-parts/form-horizontal'); ?>

<section class="row">
    <div class="give-loan-wrapper text-center">
        <div class="container">
            <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] . ' ' . get_declension(get_city($post->ID),$subtitle_arr[1]).' '.$subtitle_arr[2]; ?>
            <h2><?= $subtitle; ?></h2>
            <p class="subtitle">Мы предлагаем максимально простую процедуру получения займа</p>
            <div class="row">
                <div class="col-lg-3 col-sm-8 offset-sm-2 offset-lg-0 offset-0 col-12">
                    <div class="give-loan-rotat">
                        <div class="d-flex justify-content-center pt-3 ">
                            <p class="nomber-give-loan rotate-conten-loan-give">1</p>
                            <p class="text-give-loan pt-3">
                                Оставляете <br> заявку
                            </p>
                        </div>
                        <div class="text-with-foto">
                            <p class=" px-2">Мы свяжемся
                                с вами в течение минуты</p>
                        </div>
                        <div class="d-flex ">
                            <img class="mx-auto" src="<?= get_template_directory_uri(); ?>/css/images/load_give_arm.png" alt="">
                        </div>
                    </div>
                    <div class="arrow-load-give">
                        <img src="<?= get_template_directory_uri(); ?>/css/images/arrow_loan_give.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-8 offset-sm-2 offset-lg-0 offset-0 col-12">
                    <div class="give-loan-rotat">
                        <div class="d-flex justify-content-center pt-3 ">
                            <p class="nomber-give-loan ">2</p>
                            <p class="text-give-loan pt-3">Оцениваем <br> автомобиль</p>
                        </div>
                        <div class="text-with-foto">
                            <p class=" px-2">Если машина "на ходу", проверка займёт примерно 8 минут</p>
                        </div>
                        <div class="d-flex">
                            <img class="mx-auto" src="<?= get_template_directory_uri(); ?>/css/images/load_give_car.png" alt="">
                        </div>
                    </div>
                    <div class="arrow-load-give">
                        <img src="<?= get_template_directory_uri(); ?>/css/images/arrow_loan_give.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-8 offset-sm-2 offset-lg-0 offset-0 col-12 ">
                    <div class="give-loan-rotat">
                        <div class="d-flex justify-content-center pt-3 ">
                            <p class="nomber-give-loan ">3</p>
                            <p class="text-give-loan pt-3">Оформляем <br> договор</p>
                        </div>
                        <div class="text-with-foto">
                            <p class=" px-2">Только договор займа, никакой купли-продажи. Это займёт 10 минут</p>
                        </div>
                        <div class="d-flex ">
                            <img class="mx-auto" src="<?= get_template_directory_uri(); ?>/css/images/liad_give_docum.png" alt="">
                        </div>
                    </div>

                    <div class="arrow-load-give">
                        <img src="<?= get_template_directory_uri(); ?>/css/images/arrow_loan_give.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-8 offset-sm-2 offset-lg-0 offset-0 col-12 ">
                    <div class="give-loan-rotat">
                        <div class="d-flex justify-content-center pt-3 ">
                            <p class="nomber-give-loan ">4</p>
                            <p class="text-give-loan pt-3">Получаете <br> деньги</p>
                        </div>
                        <div class="text-with-foto">
                            <p class=" px-2">Сразу же выдаём нужную сумму наличными или на карту любого банка</p>
                        </div>
                        <div class="d-flex ">
                            <img class="mx-auto" src="<?= get_template_directory_uri(); ?>/css/images/load_give_money.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>