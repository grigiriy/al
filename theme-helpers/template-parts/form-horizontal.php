<?php
$form_title = $form_arr['title'];
$form_subtitle = $form_arr['subtitle'];
?>

<section class="background-deepblue">
  <div class="full-contact-width mw-100 py-5 uk-overflow-hidden" id="odobrenie">
    <div class="container">
      <h2 class="text-center text-white">
      <?= apply_filters( 'the_content', $form_title ); ?>
      </h2>
      <p class="text-center text-white subtitle"><?= apply_filters( 'the_content', $form_subtitle ); ?></p>
        <form data-name="Заявка Москва" class="mt-n2" onsubmit="return false;">
          <div class="d-flex flex-wrap flex-lg-nowrap justify-content-between">
          <div class="w-75 mx-auto mx-lg-1 my-2 my-lg-0">
              <input class="uk-input w-input" type="text" placeholder="Ваше имя" name="name" data-name="name">
            </div>
            <div class="w-75 mx-auto mx-lg-1 my-2 my-lg-0">
              <input class="uk-input w-input phone-input" type="text" placeholder="Номер телефона" name="phone" data-name="phone">
            </div>
            <div class="w-75 mx-auto mx-lg-1 my-2 my-lg-0">
              <input class="uk-input w-input" type="text" placeholder="Марка / Модель" name="car" data-name="car" id="car" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
            </div>
            <div class="w-75 mx-auto mx-lg-1 my-2 my-lg-0">
              <input class="uk-input w-input" type="text" placeholder="Год выпуска" name="year" data-name="year" id="year">
            </div>
            <div class="w-75 mx-auto mx-lg-1 my-2 my-lg-0 text-center">
              <button type="submit" data-wait="Пожалуйста, подождите." class="new-button">Получить одобрение</button>
            </div>
          </div>
          <div class="text-white text-center mt-4">
            <label class="form-chek-small control control-checkbox">
              <input class="uk-checkbox form-chek-small" type="checkbox" id="checkbox-10" name="checkbox-10" data-name="Checkbox 10" required="" checked=""> 
              <noindex class="subtitle font-weight-normal">Согласие с <a href="/privacy-policy.pdf" target="_blank" class="subtitle link">политикой конфиденциальности</a>. </noindex> 
              <div class="control_indicator"></div>
            </label>
          </div>      
        </form>
    </div>
  </div>
</section>