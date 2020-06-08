<?php
/**
 * Template Name: Main
 */
get_header(); 

while ( have_posts() ) :
the_post();

get_template_part('theme-helpers/template-parts/firstScreen');

set_query_var( 'subtitle', ['Автоломбард под залог ПТС любой техники в городе','0'] );
set_query_var( 'text', 'types_text' );
get_template_part('theme-helpers/template-parts/types');
get_template_part('theme-helpers/template-parts/textBlock');

set_query_var( 'subtitle', ['Самое выгодное кредитование под залог автомобиля в','1'] );
set_query_var( 'text', 'advantages_text' );
get_template_part('theme-helpers/template-parts/advantages');
get_template_part('theme-helpers/template-parts/textBlock');

set_query_var( 'subtitle', ['Расчет кредитов населению под залог авто ПТС в','1'] );
get_template_part('theme-helpers/template-parts/calc');

set_query_var( 'subtitle', ['Новые условия выдачи денег под ПТС без сдачи автомобиля',null] );
get_template_part('theme-helpers/template-parts/terms');


set_query_var( 'subtitle', ['Требования автоломбарда под залог авто в','1'] );
set_query_var( 'text', 'requirements_text' );
get_template_part('theme-helpers/template-parts/requirements');
get_template_part('theme-helpers/template-parts/textBlock');

set_query_var( 'subtitle', ['Онлайн заявка в автоломбард с правом вождения',null] );
get_template_part('theme-helpers/template-parts/order');


set_query_var( 'faq_type', 'main' );
get_template_part('theme-helpers/template-parts/faq');

endwhile;
get_footer();
?>