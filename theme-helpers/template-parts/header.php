<header>
    <div class="header-wrapper">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light top-menu fixed-navbar">
                <a href="/">
                    <picture>
                        <source srcset="<?= get_template_directory_uri(); ?>/css/images/logo.webp" type="image/webp">
                        <img class="logo mr-0 mr-lg-4" src="<?= get_template_directory_uri(); ?>/css/images/logo.png">
                    </picture>
                </a>
                <div class="desktop navbar-brand mr-auto location" data-toggle="modal" data-target="#citiesModal">
                    <img src="<?= get_template_directory_uri(); ?>/css/images/location.svg">
                    <span class="location-name"><?= get_city($post->ID) ?></span>
                </div>
                <div class="mobile mobile_phone"> 
                    <a class="nav-link phone-number mt-0" href="tel:<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('phone'));?>"><?= carbon_get_theme_option('phone');?></a>
                    <span>Звонок бесплатный</span>
                </div> 
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
                    <ul class="navbar-nav align-items-center mt-lg-0 d-flex justify-content-between mb-0">
                        <li class="nav-item mr-2 dropdown">
                            <div class="nav-link dropdown-toggle"
                                id="zaim_dd"
                                role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"    
                            >Займы</div>
                            <div class="dropdown-menu" aria-labelledby="zaim_dd">
                                <a class="dropdown-item" href="<?= get_city_link($post->ID);?>zajm-pod-zalog-avto/">Займ под залог авто</a>
                                <a class="dropdown-item" href="<?= get_city_link($post->ID);?>zajm-pod-zalog-pts/">Займ под залог ПТС авто</a>
                            </div>
                        </li>
                        <li class="nav-item mr-2 dropdown">
                            <div class="nav-link dropdown-toggle"
                                id="cred_dd"
                                role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"    
                            >Кредиты</div>
                            <div class="dropdown-menu" aria-labelledby="cred_dd">
                                <a class="dropdown-item" href="<?= get_city_link($post->ID);?>kredit-pod-zalog-avto/">Кредит под залог авто</a>
                                <a class="dropdown-item" href="<?= get_city_link($post->ID);?>kredit-pod-zalog-pts/">Кредит под залог ПТС авто</a>
                            </div>
                        </li>
                        <li class="nav-item mr-2  nav-link-faq">
                            <a class="nav-link not_link_style" href="<?= get_city_link($post->ID);?>bystrye-dengi-pod-pts/">Быстрые деньги</a>
                        </li>
                        <li class="nav-item nav-item-last nav-link-contacts">
                            <a class="nav-link not_link_style" href="<?= get_city_link($post->ID);?>yuridicheskie-licza/">Юр. Лица</a>
                        </li>
                    </ul>
                    <div class="mobile navbar-brand mx-auto mt-3 text-center location" data-toggle="modal" data-target="#citiesModal">
                        <img src="<?= get_template_directory_uri(); ?>/css/images/location.svg">
                        <span class="location-name"><?= get_city($post->ID) ?></span>
                    </div>
                    <div class="desktop nav-item mt-5 mt-md-0">
                        <a class="nav-link phone-number mt-0 nowrap" href="tel:<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('phone'));?>"><?= carbon_get_theme_option('phone');?></a>
                        <span>Звонок бесплатный</span>
                    </div> 
                    <div class="nav-item">
                        <button data-toggle="modal" data-target="#formModal" type="submit" data-wait="Пожалуйста, подождите." class="new-button">Заказать звонок</button>
                    </div> 
                </div>
            </nav>
        </div>
    </div>
</header>