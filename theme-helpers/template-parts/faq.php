<div class="uk-section uk-section-default padding-bottom-small uk-overflow-hidden">
  <div class="uk-container uk-position-relative">

    <h2 class="uk-text-center uk-h2">Ответы на вопросы</h2>
    <p class="uk-text-center weight300 padding-lr-50">Вопросы о деятельности автоломбарда в Москве. Мы собрали самые популярные вопросы и подробно ответили на них.</p>

    <ul uk-accordion="" class="uk-accordion">
    <?php $faqs = carbon_get_theme_option( $faq_type.'_faq' );
    foreach ($faqs as $faq){ ?>
      <li class="uk-open">
        <a class="uk-accordion-title" href="#"><h3><?= $faq['subtitle']; ?></h3></a>
        <div class="uk-accordion-content" aria-hidden="false">
          <p><?= apply_filters( 'the_content', $faq['text']); ?></p>
        </div>
      </li>
      <?php } ?>
    </ul>

  </div>
</div>