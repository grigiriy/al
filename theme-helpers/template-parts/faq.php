<div class="uk-section bg-f2 my-5 pb-5 uk-section-default padding-bottom-small uk-overflow-hidden">
  <div class="uk-container uk-position-relative">

    <h2 class="uk-text-center uk-h2">Ответы на вопросы</h2>
    <p class="uk-text-center weight300 padding-lr-50">Вопросы о деятельности автоломбарда в Москве. Мы собрали самые популярные вопросы и подробно ответили на них.</p>

    <ul id="faq_accordion" class="uk-accordion">
    <?php $faqs = carbon_get_theme_option( $faq_type.'_faq' );
    foreach ($faqs as $key=>$faq){ ?>
      <li class="uk-open">
        <a id="heading_<?= $key; ?>" class="uk-accordion-title" data-toggle="collapse" data-target="#collapse_<?= $key; ?>" aria-expanded="false" aria-controls="collapse_<?= $key; ?>">
          <h3><?= apply_filters( 'the_content', $faq['subtitle'] ); ?></h3>
        </a>
        <div id="collapse_<?= $key; ?>" class="uk-accordion-content collapse <?= ($key === 0) ? 'show' : ''; ?>" aria-labelledby="heading_<?= $key; ?>" data-parent="#faq_accordion">
          <p><?= apply_filters( 'the_content', $faq['text']); ?></p>
        </div>
      </li>
      <?php } ?>
    </ul>

  </div>
</div>