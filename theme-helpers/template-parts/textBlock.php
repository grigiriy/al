<div class="pt-0 uk-section mb-0 <?= ( $text === 'advantages_text') ? 'bg-f2' : '';?>">
    <div class="uk-container uk-position-relativ">
        <?= apply_filters( 'the_content', carbon_get_theme_option( $text )); ?>
    </div>
</div>