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
        <?= do_shortcode('[contact-form-7 id="3829" html_class="mt-n2"]'); ?>    
    </div>
  </div>
</section>