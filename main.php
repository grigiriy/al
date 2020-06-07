<?php
/**
 * Template Name: Main
 */
get_header(); 

while ( have_posts() ) :
the_post();

get_template_part('theme-helpers/template-parts/firstScreen');

set_query_var( 'subtitle', 'Автоломбард под залог ПТС любой техники в городе' );
set_query_var( 'text', 'types_text' );
get_template_part('theme-helpers/template-parts/types');
get_template_part('theme-helpers/template-parts/textBlock');

set_query_var( 'subtitle', 'Самое выгодное кредитование под залог автомобиля в' );
set_query_var( 'text', 'advantages_text' );
get_template_part('theme-helpers/template-parts/advantages');
get_template_part('theme-helpers/template-parts/textBlock');

set_query_var( 'subtitle', 'Расчет кредитов населению под залог авто ПТС в' );
get_template_part('theme-helpers/template-parts/calc');

echo '<h2>Headline 2</h2>';
get_template_part('theme-helpers/template-parts/terms');

echo '<h2>Headline 2</h2>';
get_template_part('theme-helpers/template-parts/requirements');
get_template_part('theme-helpers/template-parts/textBlock');

echo '<h2>Headline 2</h2>';
get_template_part('theme-helpers/template-parts/order');

echo '<h2>Headline 2</h2>';
get_template_part('theme-helpers/template-parts/faq');

endwhile;
get_footer();
?>