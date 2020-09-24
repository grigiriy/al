<?php
/**
 * Template Name: Table
 */


$args = array(
    'post_type'=>'page',
	'posts_per_page' => -1
); ?>

<table>
<tr style="background:#ccc">
<td>Страница</td>
<td>Яндекс</td>
<td>Гугл</td>
</tr>
<?php
$blogposts = query_posts( $args );

foreach ( $blogposts as $blogpost ):
?>
<tr>
<td><a href="<?= get_permalink($blogpost->ID); ?>"><?= get_headline($blogpost->ID,$blogpost->post_parent,'0') ?></a></td>
<?= carbon_get_post_meta($blogpost->ID, 'check_ya') ? '<td style="background:green">YES</td>' : '<td>NO</td>'?></td>
<?= carbon_get_post_meta($blogpost->ID, 'check_go') ? '<td style="background:green">YES</td>' : '<td>NO</td>'?></td>
</tr>
<?php endforeach;?>
</table>