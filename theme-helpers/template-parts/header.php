<header>
    <div class="header-wrapper">
        <div class="header header-pc">
            <nav class="navbar navbar-expand-lg navbar-light top-menu fixed-navbar">
                <a href="#">
                    <img src="<?= get_template_directory_uri(); ?>/css/images/logo.svg" class="logo mr-4" alt="logo">
                </a>
                <div class="navbar-brand mr-auto location" data-toggle="modal" data-target="#citiesModal">
                    <img src="<?= get_template_directory_uri(); ?>/css/images/location.svg">
                    <span class="location-name"><?= get_city($post->ID) ?></span>
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
                    <div class="fill" style="width: 200px;"></div>
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
                                <a class="dropdown-item" href="zajmy-pod-zalog-avto/">Займ под залог авто</a>
                                <a class="dropdown-item" href="zajmy-pod-zalog-pts/">Займ под залог ПТС авто</a>
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
                                <a class="dropdown-item" href="kredit-pod-zalog-avto/">Кредит под залог авто</a>
                                <a class="dropdown-item" href="kredit-pod-zalog-pts/">Кредит под залог ПТС авто</a>
                            </div>
                        </li>
                        <li class="nav-item mr-2  nav-link-faq">
                            <a class="nav-link not_link_style" href="bystrye-dengi-pod-pts/">Быстрые деньги</a>
                        </li>
                        <li class="nav-item nav-item-last nav-link-contacts">
                            <a class="nav-link not_link_style" href="yuridicheskie-licza/">Юр. Лица</a>
                        </li>
                    </ul>
                    <!-- <div class="form-inline my-2 my-lg-0 f-flex justify-content-center ">
                        <button class="btn btn-outline-primary my-2 my-sm-0 pt-3 pb-3 pr-4 pl-4" type="button"><b>Заказать звонок</b></button>
                    </div> -->
                    <div class="nav-item">
                    <a class="nav-link phone-number" href="tel:+78005552027">8 (800) 555-20-27<br> 
                        <span class="phone-number__details">Звонок бесплатный</span>
                    </a>
                </div> 
                </div>
            </nav>
        </div>
        <div class="header header-mobile">
            <div class="header-mob-wrapper">
                <div class="mob-hamburger"></div>
                <div class="geo location-name">Москва</div>
                <div class="nav-item phone-wrapper">  
                    <a class="nav-link phone-number" href="tel:+78005552027">8 (800) 555-20-27<br> 
                        <span class="phone-number__details">Звонок бесплатный</span>
                    </a>
                </div>     
            </div>
            <ul class="nav-mobile">
                <li class="nav-item mr-2 nav-link-calc">
                    <div class="nav-link " href="#">Займы</div>
                </li>
                <li class="nav-item mr-2 nav-link-treb">
                    <div class="nav-link " href="#">Кредиты</div>
                </li>
                <li class="nav-item mr-2  nav-link-faq">
                    <div class="nav-link" href="#">Быстрые деньги</div>
                </li>
                <li class="nav-item nav-item-last nav-link-contacts">
                    <div class="nav-link " href="#">Юр. Лица</div>
                </li>
                <!-- <li class="form-inline my-2 my-lg-0 f-flex justify-content-center ">
                    <button class="btn btn-outline-primary my-2 my-sm-0 pt-3 pb-3 pr-4 pl-4" type="button"><b>Заказать звонок</b></button>
                </li> -->
            </ul>
        </div>
    </div>
</header>