<section class="bg-f2">
  <div class="uk-container uk-position-relative">

  <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] . ' <span class="nowrap">' . get_declension(get_city($post->ID),$subtitle_arr[1]).'</span> '.$subtitle_arr[2]; ?>
    <h2 class="uk-text-center uk-h2"><?= $subtitle; ?></h2>
    <p class="subtitle">Ответы на популярные вопросы про работу автоломбарда <?= do_shortcode('[brand]'); ?></p>

    <ul id="faq_accordion" class="uk-accordion">
    <?php $faqs = carbon_get_theme_option( $faq_type.'_faq' );
    foreach ($faqs as $key=>$faq){ ?>
      <li class="uk-open">
        <a id="heading_<?= $key; ?>" class="uk-accordion-title" data-toggle="collapse" data-target="#collapse_<?= $key; ?>" aria-expanded="false" aria-controls="collapse_<?= $key; ?>">
          <h3><?= apply_filters( 'the_content', $faq['subtitle'] ); ?></h3>
        </a>
        <div id="collapse_<?= $key; ?>" class="uk-accordion-content collapse <?= ($key === 0) ? 'show' : ''; ?>" aria-labelledby="heading_<?= $key; ?>" data-parent="#faq_accordion">
          <p>
          <?= apply_filters( 'the_content', wpautop($faq['text'] ) ); ?>
          </p>
        </div>
      </li>
      <?php } ?>
    </ul>

  </div>
    </section>