<section><div class="text-center bg-transparent ">
    <p class="lead">Остались вопросы? Звоните по телефону автоломбарда:</p>
<p class="display-4 h1 bolder my-4">+7 (495) 128-28-90</p>
<p class="lead mb-3">
<button type="submit" data-wait="Пожалуйста, подождите." class="new-button">Оставить заявку</button>
</p>
</div>
</section>
<?php get_template_part('theme-helpers/template-parts/form','horizontal'); ?>


<section class="bg-f2">
  <div class="container" id="contacts">

  <div class="d-flex flex-wrap flex-lg-nowrap justify-content-between">
  <div class="w-75 mx-auto mx-lg-1 my-2 my-lg-0">
          <div class="con-head-main">Контакты</div>         
      </div>

      <div class="w-75 mx-auto mx-lg-1 my-2 my-lg-0">
          <div class="con-head">Центральный офис:</div>
          <div class="con-text text-small uk-margin-remove-bottom">Москва, ул. Льва Толстого, 18Б</div>
      </div>

      <div class="w-75 mx-auto mx-lg-1 my-2 my-lg-0">
          <div class="con-head">Звоните:</div>
          <div class="con-text text-small uk-margin-remove-bottom">
            <div class="phone-wrap inmap-phone">
              <a href="tel:88005517172" class="phone-number">8 800 551 71 72</a>
            </div>   
            Ежедневно с 08:00 до 20:00
          </div>
      </div>
      <div class="w-75 mx-auto mx-lg-1 my-2 my-lg-0">
          <div class="con-head">Пишите:</div>
          <div class="con-text text-small uk-margin-remove-bottom">info@avtolombard24.com</div>
        </div>
    </div>
  </div>
  </section>

  <section class="bg-f2">
    <div class="container-fluid" style="max-height:500px;overflow-y:hidden">
      <img src="<?= get_template_directory_uri(); ?>/css/images/bg-map.jpg" class="w-100" alt="">
    </div>
  </section>


<footer class="footer">
  <div class="pt-5 pb-4 container">
    <div class="row">
      <div class="col-12-xs col-8 offset-xs-0 offset-2 offset-lg-0 col-lg-4">
        <div class="footer-logo">      
          <img src="<?= get_template_directory_uri(); ?>/css/images/logo.png">  
          <p>Автоломбард&nbsp;<?= do_shortcode('[brand]'); ?> ©&nbsp;2020&nbsp;год</p>
        </div>
      </div>
      <div class="col-12-xs col-8 offset-xs-0 offset-2 offset-lg-0 col-lg-2">         
        <div class="footer-head">Ссылки:</div>
        <div class="footer-list">
          <a href="/">Автоломбард</a>
          <a href="<?= get_city_link($post->ID);?>zajmy-pod-zalog-pts/">Займы под залог ПТС</a>
          <a href="<?= get_city_link($post->ID);?>zajmy-pod-zalog-avto/">Займы под залог авто</a>
          <a href="<?= get_city_link($post->ID);?>kredit-pod-zalog-avto/">Кредит под залог ПТС</a>
          <a href="<?= get_city_link($post->ID);?>kredit-pod-zalog-pts/">Кредит под залог Авто</a>
        </div>
      </div>

      <div class="col-12-xs col-8 offset-xs-0 offset-2 offset-lg-0 col-lg-3">           
        <div class="footer-list">
          <a href="<?= get_city_link($post->ID);?>bystrye-dengi-pod-pts/">Быстрые деньги</a>
          <a href="<?= get_city_link($post->ID);?>yuridicheskie-licza/">Юр. Лица</a>
          <a href="<?= get_city_link($post->ID);?>refinansirovanie/">Рефинансирование</a>
        </div>
      </div>

      <div class="col-12-xs col-8 offset-xs-0 offset-2 offset-lg-0 col-lg-3">           
        <div class="footer-head">Контакты:</div>
        <div class="footer-list">
          <a href="https://vk.com/avtozaimlombard" class="footer-icon">
            <img src="<?= get_template_directory_uri(); ?>/css/images/vk-social-logotype.svg" _target="blank">
            <img style="display:none" src="<?= get_template_directory_uri(); ?>/css/images/vk-social-logotype--hover.svg" _target="blank">
          </a>
          <a href="https://instagram.com/avtolombard_zaim" class="footer-icon">
            <img src="<?= get_template_directory_uri(); ?>/css/images/instagram-social.svg" _target="blank">
            <img style="display:none" src="<?= get_template_directory_uri(); ?>/css/images/instagram-social--hover.svg" _target="blank">
          </a>
          <a href="https://ok.ru/avtozaimlombard" class="footer-icon">
            <img src="<?= get_template_directory_uri(); ?>/css/images/odnoklassniki-logo.svg" _target="blank">
            <img style="display:none" src="<?= get_template_directory_uri(); ?>/css/images/odnoklassniki-logo--hover.svg" _target="blank">
          </a>
        </div>
        <a href="#modal-center1" uk-toggle="">Заказать обратный звонок</a>          
        <a href="tel:88005517172" class="phone-block-number uk-margin-remove-bottom foot-phone">8 800 551 71 72</a>  
        <div class="foot-rezhim">Ежедневно с 08:00 до 20:00</div>
      </div>
    </div>
  </div>
  <div class="subfooter">  
    <div class="container">
      <p class="mb-0">Информация на сайте не является публичной офертой. Сервис "Автоломбард Автозайм" оказывает содействие в подборе финансовых услуг компаний-партнеров и не является финансовым учреждением, банком, микрофинансовой организацией, лизинговой компанией, или ломбардом. Работа сайта avtolombard24.com не связана с осуществлением инвестиционной деятельности. Дополнительные и скрытые комиссии не взимаются. Все права защищены.</p>
    </div>
  </div>
</footer>

<?php
get_template_part('theme-helpers/template-parts/modal','cities');
get_template_part('theme-helpers/template-parts/modal','form');
?>

<?php wp_footer() ?>
</body>
</html>
