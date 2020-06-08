<?php get_template_part('theme-helpers/template-parts/form-horizontal'); ?>

<div class="row">
        <div class="give-loan-wrapper">
        <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] . ' ' . get_declension(get_city($post->ID),$subtitle_arr[1]).' '.$subtitle_arr[2]; ?>
            <h2 class="give-loan-title"><?= apply_filters( 'the_content', $subtitle ); ?></h2>
            <p class="give_loan_down">Мы предлагаем максимально простую процедуру получения займа</p>
            <div class="container give_loan">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="give-loan-rotat">
                            <div class="d-flex justify-content-center pt-3 ">
                                <p class="nomber-give-loan rotate-conten-loan-give">1</p>
                                <p class="text-give-loan pt-3">
                                    Оставляете <br> заявку
                                </p>
                            </div>
                            <div class="text-with-foto">
                                <p class="text-give-loan-conten pl-4">Мы свяжемся
                                    с вами в течение минуты</p>
                            </div>
                            <div class="foto-one-load-give d-flex align-items-center">
                                <img src="<?= get_template_directory_uri(); ?>/css/images/load_give_arm.png" alt="">
                            </div>
                        </div>
                        <div class="arrow-load-give">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/arrow_loan_give.svg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="give-loan-rotat">
                            <div class="d-flex justify-content-center pt-3 ">
                                <p class="nomber-give-loan ">2</p>
                                <p class="text-give-loan pt-3">Оцениваем <br> автомобиль</p>
                            </div>
                            <div class="text-with-foto">
                                <p class="text-give-loan-conten pl-4">Если машина "на ходу", проверка займёт примерно 8 минут</p>
                            </div>
                            <div class="foto-one-load-give d-flex align-items-center">
                                <img src="<?= get_template_directory_uri(); ?>/css/images/load_give_car.png" alt="">
                            </div>
                        </div>
                        <div class="arrow-load-give">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/arrow_loan_give.svg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 ">
                        <div class="give-loan-rotat">
                            <div class="d-flex justify-content-center pt-3 ">
                                <p class="nomber-give-loan ">3</p>
                                <p class="text-give-loan pt-3">Оформляем <br> договор</p>
                            </div>
                            <div class="text-with-foto">
                                <p class="text-give-loan-conten pl-4">Только договор займа, никакой купли-продажи. Это займёт 10 минут</p>
                            </div>
                            <div class="foto-one-load-give d-flex align-items-center">
                                <img src="<?= get_template_directory_uri(); ?>/css/images/liad_give_docum.png" alt="">
                            </div>
                        </div>

                        <div class="arrow-load-give">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/arrow_loan_give.svg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 ">
                        <div class="give-loan-rotat">
                            <div class="d-flex justify-content-center pt-3 ">
                                <p class="nomber-give-loan ">4</p>
                                <p class="text-give-loan pt-3">Получаете <br> деньги</p>
                            </div>
                            <div class="text-with-foto">
                                <p class="text-give-loan-conten pl-4">Сразу же выдаём нужную сумму наличными или на карту любого банка</p>
                            </div>
                            <div class="foto-one-load-give d-flex align-items-center">
                                <img src="<?= get_template_directory_uri(); ?>/css/images/load_give_money.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="loan-table">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 table-loan-text ">
                            <div class="">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="location-table-loan-text">
                                            <p class="table-loan-text-number">1
                                            </p>
                                            <p class="text-give-loan-table pt-3">Оставляете <br> заявку</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-loan-table-with-foto"> Мы свяжемся с вами <br>в течение минуты</p>
                                    </div>
                                    <div class="col-md-2 position-loan-give-foto ">
                                        <img src="<?= get_template_directory_uri(); ?>/css/images/load_give_arm.png" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 arrow-loan-rotate d-flex justify-content-center mt-2">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/arrow-loan-table.svg" alt="">
                        </div>
                        <div class="col-sm-12 table-loan-text mt-2">
                            <div class="">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="location-table-loan-text">
                                            <p class="table-loan-text-number">2</p>
                                            <p class="text-give-loan-table pt-3"> Оцениваем <br> автомобиль</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-loan-table-with-foto"> Если машина "на ходу", проверка займёт примерно 8 минут</p>
                                    </div>
                                    <div class="col-md-2 position-loan-give-foto-two ">
                                        <img src="<?= get_template_directory_uri(); ?>/css/images/load_give_car.png" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 arrow-loan-rotate d-flex justify-content-center mt-2">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/arrow-loan-table.svg" alt="">
                        </div>
                        <div class="col-sm-12 table-loan-text mt-2">
                            <div class="">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="location-table-loan-text">
                                            <p class="table-loan-text-number">3</p>
                                            <p class="text-give-loan-table pt-3">Оформляем <br> договор</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-loan-table-with-foto"> Только договор займа, никакой купли-продажи. Это займёт 10 минут</p>
                                    </div>
                                    <div class="col-md-2 position-loan-give-foto-thre d-flex justify-content-end">
                                        <img src="<?= get_template_directory_uri(); ?>/css/images/liad_give_docum.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 arrow-loan-rotate d-flex justify-content-center mt-2">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/arrow-loan-table.svg" alt="">
                        </div>
                        <div class="col-sm-12 table-loan-text mt-2">
                            <div class="">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="location-table-loan-text">
                                            <p class="table-loan-text-number">
                                                4
                                            </p>
                                            <p class="text-give-loan-table pt-3">
                                                Получаете <br> деньги
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-loan-table-with-foto"> Сразу же выдаём нужную сумму наличными
                                            или на карту любого банка</p>
                                    </div>
                                    <div class="col-md-2 position-loan-give-foto-four d-flex justify-content-end ">
                                        <img src="<?= get_template_directory_uri(); ?>/css/images/load_give_money.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loan-mobile">
                <div class="container">
                    <div class="row ">
                        <div class="col-sm-12 ">
                            <div class="how-slide-wrapper">
                              <div class="how-slide how-slide-1"></div>  
                            </div> 
                        </div>
                        <div class="col-sm-12 arrow-loan-rotate d-flex justify-content-center mt-4">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/arrow-loan-table.svg" alt="">
                        </div>
                        <div class="col-sm-12 mt-2 mt-4">
                            <div class="how-slide-wrapper">
                                <div class="how-slide how-slide-2"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 arrow-loan-rotate d-flex justify-content-center mt-4">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/arrow-loan-table.svg" alt="">
                        </div>
                        <div class="col-sm-12 mt-4 ">
                            <div class="how-slide-wrapper">
                                <div class="how-slide how-slide-3"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 arrow-loan-rotate d-flex justify-content-center mt-4">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/arrow-loan-table.svg" alt="">
                        </div>
                        <div class="col-sm-12 mt-4">
                            <div class="how-slide-wrapper">
                                <div class="how-slide how-slide-4"></div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>