<?php
/**
 * Template Name: First
 */
get_header(); 

while ( have_posts() ) :
the_post();

switch (get_the_title()) {
    case 'Кредит под залог ПТС авто':
        $page_type = 'credit_pts';
        break;
    case 'Кредит под залог авто':
        $page_type = 'credit_auto';
        break;
    case 'Займы под залог ПТС автомобиля':
        $page_type = 'zaim_pts';
        break;
    case 'Займы под залог авто':
        $page_type = 'zaim_auto';
        break;
    case 'Кредит для ИП под залог авто ПТС':
        $page_type = 'business';
        break;
    case 'Круглосуточный автоломбард':
        $page_type = '24h';
        break;
    default:
        $page_type = 'main';
}


get_template_part('theme-helpers/template-parts/firstScreen');


set_query_var( 'subtitle_arr', [
    carbon_get_theme_option($page_type)[0]['advantages_sub'],
    carbon_get_theme_option($page_type)[0]['advantages_case'],
    carbon_get_theme_option($page_type)[0]['advantages_sub_after']
]);
set_query_var( 'text', 'advantages_text' );
get_template_part('theme-helpers/template-parts/advantages');
get_template_part('theme-helpers/template-parts/textBlock');


set_query_var( 'subtitle_arr', [
    carbon_get_theme_option($page_type)[0]['types_sub'],
    carbon_get_theme_option($page_type)[0]['types_case'],
    carbon_get_theme_option($page_type)[0]['types_sub_after']
]);
get_template_part('theme-helpers/template-parts/types');
get_template_part('theme-helpers/template-parts/textBlock');


set_query_var( 'subtitle_arr', [
    carbon_get_theme_option($page_type)[0]['calc_sub'],
    carbon_get_theme_option($page_type)[0]['calc_case'],
    carbon_get_theme_option($page_type)[0]['calc_sub_after']
]);
get_template_part('theme-helpers/template-parts/calc');


set_query_var( 'subtitle_arr', [
    carbon_get_theme_option($page_type)[0]['terms_sub'],
    carbon_get_theme_option($page_type)[0]['terms_case'],
    carbon_get_theme_option($page_type)[0]['terms_sub_after']
]);
get_template_part('theme-helpers/template-parts/terms');


set_query_var( 'text', 'requirements_text' );
set_query_var( 'subtitle_arr', [
    carbon_get_theme_option($page_type)[0]['requirements_sub'],
    carbon_get_theme_option($page_type)[0]['requirements_case'],
    carbon_get_theme_option($page_type)[0]['requirements_sub_after']
]);
get_template_part('theme-helpers/template-parts/requirements');
get_template_part('theme-helpers/template-parts/textBlock');


set_query_var( 'subtitle_arr', [
    carbon_get_theme_option($page_type)[0]['order_sub'],
    carbon_get_theme_option($page_type)[0]['order_case'],
    carbon_get_theme_option($page_type)[0]['order_sub_after']
]);
get_template_part('theme-helpers/template-parts/order');


set_query_var( 'faq_type', $page_type );
get_template_part('theme-helpers/template-parts/faq');

endwhile;
get_footer();
?>