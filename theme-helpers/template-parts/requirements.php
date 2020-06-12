<div class="hiden-requirements d-lg-block container">
    <div class=" pt-5 mt-5">
    <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] . ' ' . get_declension(get_city($post->ID),$subtitle_arr[1]).' '.$subtitle_arr[2]; ?>
        <h2 class="requirements-text text-center"><?= apply_filters( 'the_content', $subtitle ); ?></h2>
    </div>
    <div class="requirements pt-5">
        <div class="">
            <!-- <div class="container"> -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 d-flex justify-content-start">
                    <div class="user pt-5 pl-1 ">
                        <div class="user-table ">
                            <div class="user-user-svg d-flex justify-content-center">
                                <img src="<?= get_template_directory_uri(); ?>/css/images/req_icon_male.png" alt="user">
                            </div>
                        </div>
                        <p class=" pt-5 requirements-title-text">
                            К заемщику:
                        </p>
                        <ul class="pt-3">
                            <li>Гражданство РФ</li>
                            <li>Возраст от 18 лет</li>
                            <li>Не требуется официальное трудоустройство</li>
                            <li>Не рассматривается кредитная история</li>
                        </ul>
                        <div class="foto-one d-flex justify-content-end">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/flag-requirements.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 d-flex justify-content-start">
                    <div class="auto pt-5 pl-1  ">
                        <div class="user-table ">
                            <div class="car-car-svg d-flex justify-content-center">
                                <img src="<?= get_template_directory_uri(); ?>/css/images/req_icon_car.png" alt="user">
                            </div>
                        </div>
                        <p class="pt-5 requirements-title-text">
                            К авто:
                        </p>
                        <ul class="pt-3">
                            <li>Авто должно быть ”на ходу”</li>
                            <li>Состоит на учете в ГИБДД</li>
                            <li>Под залог авто нет непогашенных кредитов</li>
                            <li>Возраст авто не имеет значения</li>
                            <li>Возможен как оригинал ПТС, так и дубликат. Пометки в ПТС не вносятся</li>
                        </ul>
                        <div class="foto-two d-flex justify-content-end">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/car-requirements.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 d-flex justify-content-start">
                    <div class="auto pt-5 pl-1  ">
                        <div class="user-table ">
                            <div class="user-user-svg d-flex justify-content-center">
                                <img src="<?= get_template_directory_uri(); ?>/css/images/req_icon_doc.png" alt="user">
                            </div>
                        </div>
                        <p class="pt-5 requirements-title-text">
                            К документам:
                        </p>
                        <ul class="pt-3">
                            <li>Паспорт РФ</li>
                            <li>Паспорт технического средства (ПТС) или дубликат</li>
                            <li>Свидетельство о регистрации транспортного средства (СТС)</li>
                        </ul>
                        <div class="foto-tree d-flex justify-content-end">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/document-requirements.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-requirements requirements-slider slick-initialized slick-slider slick-dotted" style=""><img src="<?= get_template_directory_uri(); ?>/css/images/right_arrow.svg" class="prev-slider-two slick-arrow" alt="1" style="">
        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"><div class="container slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 0px;" tabindex="-1">
           <div class="s-slide s-slide-3"></div>
        </div><div class="container single-slide slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 0px;" tabindex="0" role="tabpanel" id="slick-slide30" aria-describedby="slick-slide-control30">
             <div class="s-slide s-slide-1"></div>
        </div><div class="container slick-slide" data-slick-index="1" aria-hidden="true" style="width: 0px;" tabindex="-1" role="tabpanel" id="slick-slide31" aria-describedby="slick-slide-control31">
            <div class="s-slide s-slide-2"></div>
        </div><div class="container slick-slide" data-slick-index="2" aria-hidden="true" style="width: 0px;" tabindex="-1" role="tabpanel" id="slick-slide32" aria-describedby="slick-slide-control32">
           <div class="s-slide s-slide-3"></div>
        </div><div class="container single-slide slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" style="width: 0px;" tabindex="-1">
             <div class="s-slide s-slide-1"></div>
        </div><div class="container slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 0px;" tabindex="-1">
            <div class="s-slide s-slide-2"></div>
        </div><div class="container slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 0px;" tabindex="-1">
           <div class="s-slide s-slide-3"></div>
        </div></div></div>
        
        
    <img src="<?= get_template_directory_uri(); ?>/css/images/left_arrow.svg" class="next-slider-two slick-arrow" alt="2" style="">
    <ul class="slick-dots" style="" role="tablist">
        <li class="slick-active" role="presentation">
            <button type="button" role="tab" id="slick-slide-control30" aria-controls="slick-slide30" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button>
        </li>
        <li role="presentation">
            <button type="button" role="tab" id="slick-slide-control31" aria-controls="slick-slide31" aria-label="2 of 3" tabindex="-1">2</button>
        </li>
        <li role="presentation">
            <button type="button" role="tab" id="slick-slide-control32" aria-controls="slick-slide32" aria-label="3 of 3" tabindex="-1">3</button>
        </li>
    </ul>
</div>
</div>