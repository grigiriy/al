<?php
/**
 * Template Name: Second
 */
get_header(); 

while ( have_posts() ) :
the_post();

get_template_part('theme-helpers/template-parts/firstScreen');

echo '<h2>Headline 2</h2>';
get_template_part('theme-helpers/template-parts/calc');
get_template_part('theme-helpers/template-parts/textBlock');

echo '<h2>Headline 2</h2>';
get_template_part('theme-helpers/template-parts/types');
get_template_part('theme-helpers/template-parts/textBlock');


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