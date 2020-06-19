<section>
  <div class="text-center bg-transparent ">
    <p class="lead">Остались вопросы? Звоните по телефону автоломбарда:</p>
    <p class="bolder my-4 footer_phone">+7 (495) 128-28-90</p>
    <p class="lead mb-3">
      <button type="submit" data-wait="Пожалуйста, подождите." class="new-button">Оставить заявку</button>
    </p>
  </div>
</section>
<?php
set_query_var( 'form_arr', get_form_header('foot',$post->ID));
get_template_part('theme-helpers/template-parts/form','horizontal'); ?>


<section class="mt-0">
  <div class="container-fluid" style="max-height:500px;overflow-y:hidden">
    <img src="<?= get_template_directory_uri(); ?>/css/images/bg-map.jpg" class="w-100" alt="">
  </div>
</section>


<footer class="footer">
  <div class="pt-5 pb-4 container">
    <div class="row">
      <div class="col-12 col-sm-8 offset-0 offset-sm-2 offset-lg-0 col-lg-4">
        <div class="footer-logo">      
          <img src="<?= get_template_directory_uri(); ?>/css/images/logo.png">  
          <p>Автоломбард&nbsp;<?= do_shortcode('[brand]'); ?> ©&nbsp;2020&nbsp;год</p>
        </div>
      </div>
      <div class="col-12 col-sm-8 offset-0 offset-sm-2 offset-lg-0 col-lg-2">         
        <div class="footer-head">Ссылки:</div>
        <div class="footer-list">
          <a href="/">Автоломбард</a>
          <a href="<?= get_city_link($post->ID);?>zajmy-pod-zalog-pts/">Займы под залог ПТС</a>
          <a href="<?= get_city_link($post->ID);?>zajmy-pod-zalog-avto/">Займы под залог авто</a>
          <a href="<?= get_city_link($post->ID);?>kredit-pod-zalog-avto/">Кредит под залог ПТС</a>
          <a href="<?= get_city_link($post->ID);?>kredit-pod-zalog-pts/">Кредит под залог Авто</a>
        </div>
      </div>

      <div class="col-12 col-sm-8 offset-0 offset-sm-2 offset-lg-0 col-lg-3">           
        <div class="footer-list">
          <a href="<?= get_city_link($post->ID);?>bystrye-dengi-pod-pts/">Быстрые деньги</a>
          <a href="<?= get_city_link($post->ID);?>yuridicheskie-licza/">Юр. Лица</a>
          <a href="<?= get_city_link($post->ID);?>refinansirovanie/">Рефинансирование</a>
        </div>
      </div>

      <div class="col-12 col-sm-8 offset-0 offset-sm-2 offset-lg-0 col-lg-3">           
        <div class="footer-head">Контакты:</div>
        <div class="foot-rezhim">Москва, ул. Льва Толстого, 18Б</div>
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
