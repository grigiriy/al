<!-- <script src="https://api-maps.yandex.ru/2.1/?apikey=ad3389a6-b7a1-40d0-a0a9-082e7fa02f7d&lang=ru_RU" type="text/javascript"></script> -->

<section>
  <div class="text-center bg-transparent ">
    <p class="lead">Остались вопросы? Звоните по телефону автоломбарда:</p>
    <p class="bolder my-4 footer_phone"><a class="default-text nowrap" href="tel:<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('phone'));?>"><?= carbon_get_theme_option('phone');?></a></p>
    <p class="lead mb-3">
      <button type="submit" data-wait="Пожалуйста, подождите." class="new-button" data-toggle="modal" data-target="#formModal">Оставить заявку</button>
    </p>
  </div>
</section>
<?php
$form_footer = get_form_header('foot',$post->ID);
if ( $text_page === 'zaim_auto' ) {
  $form_footer['title'] = 'Займ под залог авто в [declension_city case="1"]';
} else if ( $text_page === 'zaim_pts') {
  $form_footer['title'] = 'Займ под залог ПТС в [declension_city case="1"]';
} else if ( $text_page === 'credit_auto' ) {
  $form_footer['title'] = 'Кредит под залог авто в [declension_city case="1"]';
} else if ( $text_page === 'credit_pts' ) {
  $form_footer['title'] = 'Кредит под залог ПТС в [declension_city case="1"]';
}
set_query_var( 'form_arr', $form_footer );
get_template_part('theme-helpers/template-parts/form','horizontal'); ?>


<!-- <section class="mt-0">
  <div class="container-fluid container-map px-0" style="max-height:500px;overflow-y:hidden">
      <div id="main-map" data-zoom='10' style="height: 400px">
      </div>
  </div>
</section> -->

<footer class="footer" data-city="<?= get_city($post->ID); ?>" data-coords="<?= get_city_meta($post->ID,'coord') ?>" data-address="<?= get_city_meta($post->ID,'address') ?>">
  <div class="pt-5 pb-4 container">
    <div class="row">
      <div class="col foot-col">
        <div class="footer-logo w-100">      
          <a href="/">
          <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/css/images/logo.webp" type="image/webp">
              <img src="<?= get_template_directory_uri(); ?>/css/images/logo.png">
          </picture>
          </a>
          <p>Автоломбард&nbsp;<?= do_shortcode('[brand]'); ?> ©&nbsp;2020&nbsp;год</p>
        </div>
      </div>
      <div class="col foot-col">         
        <div class="footer-head">Ссылки:</div>
        <div class="footer-list">
          <a href="/">Автоломбард</a>
          <a href="<?= get_city_link($post->ID);?>zajm-pod-zalog-pts/">Займы под залог ПТС</a>
          <a href="<?= get_city_link($post->ID);?>zajm-pod-zalog-avto/">Займы под залог авто</a>
          <a href="<?= get_city_link($post->ID);?>kredit-pod-zalog-pts/">Кредит под залог ПТС</a>
          <a href="<?= get_city_link($post->ID);?>kredit-pod-zalog-avto/">Кредит под залог Авто</a>
          <div class="footer-list mobile">
            <a href="<?= get_city_link($post->ID);?>bystrye-dengi-pod-pts/">Быстрые деньги</a>
            <a href="<?= get_city_link($post->ID);?>yuridicheskie-licza/">Юр. Лица</a>
            <a href="<?= get_city_link($post->ID);?>refinansirovanie/">Рефинансирование</a>
            <a href="/kalkulyator/">Калькулятор</a>
          </div>
        </div>
      </div>

      <div class="col foot-col desktop">           
        <div class="footer-list">
          <a href="<?= get_city_link($post->ID);?>bystrye-dengi-pod-pts/">Быстрые деньги</a>
          <a href="<?= get_city_link($post->ID);?>yuridicheskie-licza/">Юр. Лица</a>
          <a href="<?= get_city_link($post->ID);?>refinansirovanie/">Рефинансирование</a>
          <a href="/kalkulyator/">Калькулятор</a>
        </div>
      </div>

      <div class="col foot-col">           
        <div class="footer-head">Контакты:</div>
        <div class="foot-rezhim"><?= get_city($post->ID).', '.get_city_meta($post->ID,'address'); ?></div>
        <a href="tel:<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('phone'));?>" class="phone-block-number uk-margin-remove-bottom foot-phone nowrap"><?= carbon_get_theme_option('phone');?></a>  
        <div class="foot-rezhim">Ежедневно с 08:00 до 20:00</div>
      </div>
    </div>
  </div>
  <div class="subfooter">  
    <div class="container">
      <p class="mb-0">Информация на сайте не является публичной офертой. Сервис <?= do_shortcode('[brand]'); ?> оказывает содействие в подборе финансовых услуг компаний-партнеров и не является финансовым учреждением, банком, микрофинансовой организацией, лизинговой компанией, или ломбардом. Работа сайта <a class="default_text" target="_blank" href="<?= site_url(); ?>"><?= str_replace('http://', '', str_replace('https://', '', site_url() ) ); ?></a>  не связана с осуществлением инвестиционной деятельности. Дополнительные и скрытые комиссии не взимаются. Все права защищены.</p>
    </div>
  </div>
</footer>

<?php
get_template_part('theme-helpers/template-parts/modal','cities');
get_template_part('theme-helpers/template-parts/modal','form');

get_template_part('theme-helpers/template-parts/callback');
?>

<?php wp_footer() ?>
</body>
</html>