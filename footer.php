<div class="jumbotron text-center bg-transparent pb-0">
    <p class="lead">Остались вопросы? Звоните по телефону автоломбарда:</p>
<p class="display-4 h1 bolder">+7 (495) 128-28-90</p>
<p class="lead">
<button data-toggle="modal" data-target="#formModal" class="form-button w-button uk-button uk-button-primary uk-button-small-hor-pad uk-margin-bottom uk-button-small px-5">Оставить заявку</button>
</p>
</div>
<?php get_template_part('theme-helpers/template-parts/form','horizontal'); ?>


<div class="bottom-contact mt-0 border-0" id="contacts">

  <div class="uk-container">

    <div class="uk-child-width-1-1 uk-child-width-1-4@s uk-grid-default uk-grid-match uk-grid" uk-grid="">
      <div class="uk-first-column">
        <div class="uk-first-column flex-center">      
          <div class="con-head-main">Контакты</div>         
        </div>
      </div>

      <div>
        <div>         
          <div class="con-head">Центральный офис:</div>
          <div class="con-text text-small uk-margin-remove-bottom">Москва, ул. Льва Толстого, 18Б</div>
        </div>
      </div>

      <div>
        <div> 

          <div class="con-head">Звоните:</div>

          <div class="con-text text-small uk-margin-remove-bottom">

            <div class="phone-wrap inmap-phone">
              <a href="tel:88005517172" class="phone-number">8 800 551 71 72</a>
            </div>   

            Ежедневно с 08:00 до 20:00
          </div>

        </div>
      </div>

      <div>
        <div>                  
          <div class="con-head">Пишите:</div>
          <div class="con-text text-small uk-margin-remove-bottom">info@avtolombard24.com</div>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="container-fluid" style="max-height:500px;overflow-y:hidden">
    <img src="<?= get_template_directory_uri(); ?>/css/images/bg-map.jpg" class="w-100" alt="">
</div>
</div>

<footer>
  <div class="footer pt-5 pb-4">
    <div class="uk-container">
      <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m uk-grid-default uk-grid-match uk-grid" uk-grid="">
        <div class="uk-width-1-3@m uk-first-column">
          <div>      
            <img src="<?= get_template_directory_uri(); ?>/css/images/logo-foot.svg">  
            <p class="uk-width-4-5@m weight100">Автоломбард в городе Москва – верный способ взять займ под залог ПТС или автомобиля. Одобрение по заявки займет всего 5 минут, а&nbsp;денежные средства будут у Вас сразу после подписания договора.
            </p>       
            <p class="deepgray">© «Автоломбард Автозайм», 2019 г.</p>
          </div>
        </div>



        <div class="">
          <div>         
            <div class="footer-head">Ссылки:</div>
            <a href="/">Автоломбард</a>
            <a href="<?= get_city_link($post->ID);?>zajmy-pod-zalog-pts/">Займы под залог ПТС</a>
            <a href="<?= get_city_link($post->ID);?>zajmy-pod-zalog-avto/">Займы под залог авто</a>
            <a href="<?= get_city_link($post->ID);?>kredit-pod-zalog-avto/">Кредит под залог ПТС</a>
            <a href="<?= get_city_link($post->ID);?>kredit-pod-zalog-pts/">Кредит под залог Авто</a>
          </div>
        </div>

        <div class="">
          <div>         
            <div class="footer-head second-head"> </div>
            <a href="<?= get_city_link($post->ID);?>bystrye-dengi-pod-pts/">Быстрые деньги</a>
            <a href="<?= get_city_link($post->ID);?>yuridicheskie-licza/">Юр. Лица</a>
            <a href="<?= get_city_link($post->ID);?>refinansirovanie/">Рефинансирование</a>

          </div>
        </div>

        <div class="">
          <div>                  
            <div class="footer-head">Контакты:</div>
            <a href="https://vk.com/avtozaimlombard" class="footer-icon"><img src="<?= get_template_directory_uri(); ?>/css/images/vk-social-logotype.svg" _target="blank"></a>
            <a href="https://instagram.com/avtolombard_zaim" class="footer-icon"><img src="<?= get_template_directory_uri(); ?>/css/images/instagram-social.svg" _target="blank"></a>
            <a href="https://ok.ru/avtozaimlombard" class="footer-icon"><img src="<?= get_template_directory_uri(); ?>/css/images/odnoklassniki-logo.svg" _target="blank"></a>
            <a href="#modal-center1" uk-toggle="">Заказать обратный звонок</a>          
            <a href="tel:88005517172" class="phone-block-number uk-margin-remove-bottom foot-phone">8 800 551 71 72</a>  
            <div class="foot-rezhim">Ежедневно с 08:00 до 20:00</div>
          </div>
        </div>


      </div>  
    </div>
  </div>
  <div class="subfooter">  
    <div class="uk-container">  
      <p>Информация на сайте не является публичной офертой. Сервис "Автоломбард Автозайм" оказывает содействие в подборе финансовых услуг компаний-партнеров и не является финансовым учреждением, банком, микрофинансовой организацией, лизинговой компанией, или ломбардом. Работа сайта avtolombard24.com не связана с осуществлением инвестиционной деятельности. Дополнительные и скрытые комиссии не взимаются. Все права защищены.</p>
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
