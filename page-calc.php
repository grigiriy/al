<?php
/**
 * Template Name: Calc
 */
get_header(); 

while ( have_posts() ) :
the_post();

get_template_part('theme-helpers/template-parts/firstScreen');

echo '<h2>Headline 2</h2>';
get_template_part('theme-helpers/template-parts/calc');
get_template_part('theme-helpers/template-parts/textBlock');

echo '<h2>Headline 2</h2>';
get_template_part('theme-helpers/template-parts/terms');
get_template_part('theme-helpers/template-parts/textBlock');

echo '<h2>Headline 2</h2>';
get_template_part('theme-helpers/template-parts/order');

endwhile;
get_footer();
?>