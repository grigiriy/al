<section <?= ( $text === 'advantages_text') ? 'class="bg-f2"' : '';?>>
    <div class="container text-lightcolor">
        <?= apply_filters( 'the_content', wpautop(carbon_get_theme_option( $text ) ) ); ?>
    </div>
</section>