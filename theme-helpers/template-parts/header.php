<header>
    <div class="header-wrapper">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light top-menu fixed-navbar">
                <a href="/">
                    <img src="<?= get_template_directory_uri(); ?>/css/images/logo.png" class="logo mr-4" alt="logo">
                </a>
                <div class="navbar-brand mr-auto location" data-toggle="modal" data-target="#citiesModal">
                    <img src="<?= get_template_directory_uri(); ?>/css/images/location.svg">
                    <span class="location-name"><?= get_city($post->ID) ?></span>
                </div>

                <div class="mobile_phone">
                    <a href="tel:+78005552027">8 (800) 555-20-27</a>
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
                                <a class="dropdown-item" href="<?= get_city_link($post->ID);?>zajmy-pod-zalog-avto/">Займ под залог авто</a>
                                <a class="dropdown-item" href="<?= get_city_link($post->ID);?>zajmy-pod-zalog-pts/">Займ под залог ПТС авто</a>
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
                    <div class="nav-item">
                        <a class="nav-link phone-number" href="tel:+78005552027">8 (800) 555-20-27</a>
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