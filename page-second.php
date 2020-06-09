<?php
/**
 * Template Name: Second
 */
get_header(); 

while ( have_posts() ) :
the_post();

switch (get_the_title()) {
    case 'Быстрый займ под залог ПТС авто':
        $page_type = 'fast_money';
        break;
    case 'Рефинансирование кредитов под залог авто и ПТС':
        $page_type = 'refinance';
        break;
    default:
        $page_type = 'main';
}

get_template_part('theme-helpers/template-parts/firstScreen');


set_query_var( 'subtitle_arr', [
    carbon_get_theme_option('main')[0]['calc_sub'],
    carbon_get_theme_option('main')[0]['calc_case'],
    carbon_get_theme_option('main')[0]['calc_sub_after']
]);
get_template_part('theme-helpers/template-parts/calc');
set_query_var( 'text', 'calc_text' );
get_template_part('theme-helpers/template-parts/textBlock');


set_query_var( 'subtitle_arr', [
    carbon_get_theme_option('main')[0]['types_sub'],
    carbon_get_theme_option('main')[0]['types_case'],
    carbon_get_theme_option('main')[0]['types_sub_after']
]);
get_template_part('theme-helpers/template-parts/types');
get_template_part('theme-helpers/template-parts/textBlock');


set_query_var( 'subtitle_arr', [
    carbon_get_theme_option('main')[0]['terms_sub'],
    carbon_get_theme_option('main')[0]['terms_case'],
    carbon_get_theme_option('main')[0]['terms_sub_after']
]);
get_template_part('theme-helpers/template-parts/terms');


set_query_var( 'subtitle_arr', [
    carbon_get_theme_option('main')[0]['requirements_sub'],
    carbon_get_theme_option('main')[0]['requirements_case'],
    carbon_get_theme_option('main')[0]['requirements_sub_after']
]);
get_template_part('theme-helpers/template-parts/requirements');
get_template_part('theme-helpers/template-parts/textBlock');


set_query_var( 'subtitle_arr', [
    carbon_get_theme_option('main')[0]['order_sub'],
    carbon_get_theme_option('main')[0]['order_case'],
    carbon_get_theme_option('main')[0]['order_sub_after']
]);
get_template_part('theme-helpers/template-parts/order');

set_query_var( 'faq_type', $page_type );
get_template_part('theme-helpers/template-parts/faq');

endwhile;
get_footer();
?>