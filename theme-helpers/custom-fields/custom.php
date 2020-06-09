<?php


$sklons = [
    null => 'Город не указан',
    '0' => 'Город (Москва)',
    '1' => 'Сущ.Предложный (Москве)',
    '2' => 'Сущ.Родительный (Москвы)',
    '3' => 'Сущ.Дательный (Москве)',
    '4' => 'Сущ.Винительный (Москву)',
    '5' => 'Прилагательное (Московский)',
    '6' => 'Прил.Единств.Родительный (Московского)',
    '7' => 'Прил.Единств.Дательный (московскому)',
    '8' => 'Прил.Единств.Винительный (московский)',
    '9' => 'Прил.Единств.Предложный (московском)',
    '10' => 'Прил.Множеств.Родительный (московских)',
    '11' => 'Прил.Множеств.Дательный (московским)',
    '12' => 'Прил.Множеств.Вительный (московские)',
    '13' => 'Сленг (МСК)',
    '14' => 'Область (Московская область)',
    '15' => 'Область. Родительный (Московской области)',
    '16' => 'Область. Предложный (Московской области)',
    '17' => 'Житель (Москвич)',
    '18' => 'Житель.Родительный (москвича)',
    '19' => 'Житель.Дательный (москвичу)',
    '20' => 'Житель.Винительный (москвича)',
    '21' => 'Житель.предложный (москвиче)'
];



use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make( 'theme_options', 'Управление контентом' )
    ->add_tab( __('subtitles'), [
        Field::make( 'complex', 'main', 'Подзаги главной' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields([
            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'advantages_sub', 'Подзаг преимуществ' )
                ->set_width( 50 ),
            Field::make( 'select', 'advantages_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'advantages_sub_after', 'Подзаг преимуществ (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', 'credit_pts', 'Подзаги кредита под птс' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields( [
            Field::make( 'text', 'advantages_sub', 'Подзаг преимуществ' )
            ->set_width( 50 ),
            Field::make( 'select', 'advantages_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'advantages_sub_after', 'Подзаг преимуществ (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),
                
            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', 'credit_auto', 'Подзаги кредита под авто' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields( [
            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'advantages_sub', 'Подзаг преимуществ' )
            ->set_width( 50 ),
            Field::make( 'select', 'advantages_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'advantages_sub_after', 'Подзаг преимуществ (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', 'zaim_pts', 'Подзаги займов под птс' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields( [
            Field::make( 'text', 'advantages_sub', 'Подзаг преимуществ' )
            ->set_width( 50 ),
            Field::make( 'select', 'advantages_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'advantages_sub_after', 'Подзаг преимуществ (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),
                
            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', 'zaim_auto', 'Подзаги займов под авто' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields( [
            Field::make( 'text', 'advantages_sub', 'Подзаг преимуществ' )
            ->set_width( 50 ),
            Field::make( 'select', 'advantages_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'advantages_sub_after', 'Подзаг преимуществ (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),
                
            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', 'fast_money', 'Подзаги быстрых денег' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields( [
            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),
                
            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', 'business', 'Подзаги ИП/юр.лиц' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields( [
            Field::make( 'text', 'advantages_sub', 'Подзаг преимуществ' )
            ->set_width( 50 ),
            Field::make( 'select', 'advantages_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'advantages_sub_after', 'Подзаг преимуществ (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),
                
            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', 'calc', 'Подзаги калькулятора' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields( [
            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', 'refinance', 'Подзаги рефинансирования' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields( [
            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),
                
            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', 'truck', 'Подзаги грузовые авто' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields( [
            Field::make( 'text', 'advantages_sub', 'Подзаг преимуществ' )
            ->set_width( 50 ),
            Field::make( 'select', 'advantages_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'advantages_sub_after', 'Подзаг преимуществ (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),
                
            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', 'spec', 'Подзаги спецтехника' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields( [
            Field::make( 'text', 'advantages_sub', 'Подзаг преимуществ' )
            ->set_width( 50 ),
            Field::make( 'select', 'advantages_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'advantages_sub_after', 'Подзаг преимуществ (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),
                
            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),

            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', 'moto', 'Подзаги мото' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields([
            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'advantages_sub', 'Подзаг преимуществ' )
                ->set_width( 50 ),
            Field::make( 'select', 'advantages_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'advantages_sub_after', 'Подзаг преимуществ (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),



        Field::make( 'complex', '24h', 'Подзаги круглосуточно' )
        ->set_collapsed( true )
        ->set_max( 1 )
        ->add_fields([
            Field::make( 'text', 'types_sub', 'Подзаг типов' )
                ->set_width( 50 ),
            Field::make( 'select', 'types_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'types_sub_after', 'Подзаг типов (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'advantages_sub', 'Подзаг преимуществ' )
                ->set_width( 50 ),
            Field::make( 'select', 'advantages_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'advantages_sub_after', 'Подзаг преимуществ (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'calc_sub', 'Подзаг калькулятора' )
            ->set_width( 50 ),
            Field::make( 'select', 'calc_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'calc_sub_after', 'Подзаг калькулятора (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'terms_sub', 'Подзаг условий' )
            ->set_width( 50 ),
            Field::make( 'select', 'terms_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'terms_sub_after', 'Подзаг условий (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'requirements_sub', 'Подзаг требований' )
            ->set_width( 50 ),
            Field::make( 'select', 'requirements_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'requirements_sub_after', 'Подзаг требований (после города)' )
                ->set_width( 30 ),
        
            Field::make( 'text', 'order_sub', 'Подзаг заявки' )
            ->set_width( 50 ),
            Field::make( 'select', 'order_case', 'Склонение города (если есть)' )
                ->set_width( 20 )
                ->set_options( $sklons ),
            Field::make( 'text', 'order_sub_after', 'Подзаг заявки (после города)' )
                ->set_width( 30 ),
        ]),
    ])



    ->add_tab( __('base_texts'), [
        Field::make( 'html', 'crb_information_text' )
        ->set_html( '<h2>Номера склонений:</h2>
        <ul>
            <li><p>0 => Город (Москва)</p></li>
            <li><p>1 => Сущ.Предложный (Москве)</p></li>
            <li><p>2 => Сущ.Родительный (Москвы)</p></li>
            <li><p>3 => Сущ.Дательный (Москве)</p></li>
            <li><p>4 => Сущ.Винительный (Москву)</p></li>
            <li><p>5 => Прилагательное (Московский)</p></li>
            <li><p>6 => Прил.Единств.Родительный (Московского)</p></li>
            <li><p>7 => Прил.Единств.Дательный (московскому)</p></li>
            <li><p>8 => Прил.Единств.Винительный (московский)</p></li>
            <li><p>9 => Прил.Единств.Предложный (московском)</p></li>
            <li><p>10 => Прил.Множеств.Родительный (московских)</p></li>
            <li><p>11 => Прил.Множеств.Дательный (московским)</p></li>
            <li><p>12 => Прил.Множеств.Вительный (московские)</p></li>
            <li><p>13 => Сленг (МСК)</p></li>
            <li><p>14 => Область (Московская область)</p></li>
            <li><p>15 => Область. Родительный (Московской области)</p></li>
            <li><p>16 => Область. Предложный (Московской области)</p></li>
            <li><p>17 => Житель (Москвич)</p></li>
            <li><p>18 => Житель.Родительный (москвича)</p></li>
            <li><p>19 => Житель.Дательный (москвичу)</p></li>
            <li><p>20 => Житель.Винительный (москвича)</p></li>
            <li><p>21 => Житель.предложный (москвиче)</p></li>
            </ul>
        ' ),
        Field::make( 'rich_text', 'types_text', 'Текст о том, что можно заложить' ),
        Field::make( 'rich_text', 'advantages_text', 'Текст о преимуществах' ),
        Field::make( 'rich_text', 'requirements_text', 'Текст о требованиях' ),
        Field::make( 'rich_text', 'calc_text', 'Текст о калькуляторе' ),
    ])
    ->add_tab( __('faq_texts'), [
        Field::make( 'complex', 'main_faq', 'FAQ главной' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ]),

        Field::make( 'complex', 'credit_pts_faq', 'FAQ Кредит под ПТС' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ]),

        Field::make( 'complex', 'credit_auto_faq', 'FAQ Кредит под залог авто' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ]),

        Field::make( 'complex', 'zaim_pts_faq', 'FAQ Займ под ПТС' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ]),

        Field::make( 'complex', 'zaim_auto_faq', 'FAQ Займ под залог автомобиля' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ]),

        Field::make( 'complex', 'fast_money_faq', 'FAQ Быстрый займ под залог ПТС авто' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ]),
        
        Field::make( 'complex', 'business_faq', 'FAQ Кредит для ИП под залог авто ПТС' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ]),
        
        Field::make( 'complex', 'refinance_faq', 'FAQ рефинансирования' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ]),
        
        Field::make( 'complex', 'truck_faq', 'FAQ грузовых' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ]),

        Field::make( 'complex', 'moto_faq', 'FAQ мото' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ]),

        Field::make( 'complex', '24h_faq', 'FAQ круглосуточного' )
        ->set_collapsed( true )
        ->add_fields( [
            Field::make( 'text', 'subtitle', 'Вопрос (h3)' ),
            Field::make( 'rich_text', 'text', 'Ответ' ),
        ])
    ])
?>