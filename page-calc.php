<?php
/**
 * Template Name: Calc
 */
get_header(); 

while ( have_posts() ) :
the_post();

set_query_var('image', get_template_directory_uri().'/css/images/car-blue.png');
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
    carbon_get_theme_option('main')[0]['terms_sub'],
    carbon_get_theme_option('main')[0]['terms_case'],
    carbon_get_theme_option('main')[0]['terms_sub_after']
]);
get_template_part('theme-helpers/template-parts/terms');
set_query_var( 'text', 'terms_text' );
get_template_part('theme-helpers/template-parts/textBlock');

set_query_var( 'subtitle_arr', [
    carbon_get_theme_option('main')[0]['order_sub'],
    carbon_get_theme_option('main')[0]['order_case'],
    carbon_get_theme_option('main')[0]['order_sub_after']
]);
get_template_part('theme-helpers/template-parts/order');

endwhile;
get_footer();
?>