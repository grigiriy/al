<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make( 'theme_options', 'Настроечки' )
    ->add_tab( __('base_texts'), [
        Field::make( 'rich_text', 'types_text', 'Текст о том, что можно заложить' ),
        Field::make( 'rich_text', 'advantages_text', 'Текст о преимуществах' ),
        Field::make( 'rich_text', 'requirements_text', 'Текст о требованиях' ),
    ])
    ->add_tab( __('faq_texts'), [
        Field::make( 'complex', 'main_faq', 'FAQ главной' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ]),
        Field::make( 'complex', 'spec_faq', 'FAQ спецтехники' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ])
    ])
?>