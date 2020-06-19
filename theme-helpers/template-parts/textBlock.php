<section <?= ( $text === 'advantages_text') ? 'class="bg-f2"' : '';?> >
    <div class="container text-lightcolor">
        <?= apply_filters( 'the_content', wpautop(carbon_get_theme_option( $text_page.'_texts' )[0][$text] ) ); ?>
    </div>
</section>