<?php
$form_arr_1['title'] = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] . ' ' . get_declension(get_city($post->ID),$subtitle_arr[1]).' '.$subtitle_arr[2];
$form_arr_1['subtitle'] = carbon_get_theme_option('forms')[0]['mid_form_sub'];
set_query_var( 'form_arr', $form_arr_1);
get_template_part('theme-helpers/template-parts/form','horizontal'); ?>

<section>
    <div class="container">
        <h2 class="text-center">Как быстро получить займ под залог ПТС</h2>
        <p class="subtitle">Четыре шага для получения займа</p>
        <div class="row slick_mob slick_order">
            <div class="col-lg-3 col-sm-8 offset-sm-2 offset-lg-0 offset-0 col-12">
                <div class="give-loan-rotat">
                    <div class="d-flex justify-content-center pt-3 ">
                        <p class="nomber-give-loan rotate-conten-loan-give">1</p>
                        <p class="text-give-loan pt-3">
                        Отправить <br> заявку
                        </p>
                    </div>
                    <div class="text-with-foto">
                        <p class=" px-2">Менеджеры свяжутся
                            с вами моментально</p>
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
                        <p class="text-give-loan pt-3">Приехать <br>в офис</p>
                    </div>
                    <div class="text-with-foto">
                        <p class=" px-2">Для проверки и оценки стоимости вашего авто</p>
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
                        <p class="text-give-loan pt-3">Подписать <br> договор</p>
                    </div>
                    <div class="text-with-foto">
                        <p class=" px-2">Оформим с вами договор займа под залог ПТС</p>
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
                        <p class="text-give-loan pt-3">Получить <br> деньги</p>
                    </div>
                    <div class="text-with-foto">
                        <p class=" px-2">Выдаем деньги наличными или на карту любого банка</p>
                    </div>
                    <div class="d-flex ">
                        <img class="mx-auto" src="<?= get_template_directory_uri(); ?>/css/images/load_give_money.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>