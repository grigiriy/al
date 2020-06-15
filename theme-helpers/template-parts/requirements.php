<section>
    <div class="container">
        <div class="text-center">
        <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] . ' ' . get_declension(get_city($post->ID),$subtitle_arr[1]).' '.$subtitle_arr[2]; ?>
            <h2 class="text-center"><?= apply_filters( 'the_content', $subtitle ); ?></h2>
            <p class="subtitle">Наши требования для выдачи денег под залог ПТС</p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 d-flex justify-content-start my-4">
                <div class="user pt-5 pl-1 ">
                    <div class="user-table ">
                        <div class="user-user-svg d-flex justify-content-center">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/req_icon_male.png" alt="user">
                        </div>
                    </div>
                    <p class="pt-3 pt-3 h3">
                        К заемщику:
                    </p>
                    <ul class="py-3 pr-3">
                        <li>Гражданство РФ</li>
                        <li>Возраст от 18 лет</li>
                        <li>Не требуется официальное трудоустройство</li>
                        <li>Не требуется справка 2-НДФЛ</li>
                        <li>Не рассматривается кредитная история</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 d-flex justify-content-start my-4">
                <div class="auto pt-5 pl-1">
                    <div class="user-table ">
                        <div class="car-car-svg d-flex justify-content-center">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/req_icon_car.png" alt="user">
                        </div>
                    </div>
                    <p class="pt-3 pt-3 h3">
                        К авто:
                    </p>
                    <ul class="py-3 pr-3">
                        <li>Авто в исправном состоянии</li>
                        <li>Авто не находится в залоге</li>
                        <li>Состоит на учете в ГИБДД</li>
                        <li>Год выпуска не имеет значения</li>
                        <li>Внешний вид не имеет значения</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 d-flex justify-content-start my-4 ">
                <div class="auto pt-5 pl-1">
                    <div class="user-table">
                        <div class="user-user-svg d-flex justify-content-center">
                            <img src="<?= get_template_directory_uri(); ?>/css/images/req_icon_doc.png" alt="user">
                        </div>
                    </div>
                    <p class="pt-3 pt-3 h3">
                        К документам:
                    </p>
                    <ul class="py-3 pr-3">
                        <li>Паспорт РФ</li>
                        <li>Паспорт технического средства (ПТС) или дубликат</li>
                        <li>Свидетельство о регистрации транспортного средства (СРТС)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>