<?php

global $cities;

$start_date = date_create('2020-09-24');
$current_date = date_create();
$date_diff = date_diff($start_date,$current_date);
$offset = 10*($date_diff->format('%a'));
$_cities = array_slice($cities,$offset,10);
?>

<div id="bot_hunter" class="px-4 pb-5">
    <div class="row mt-4">
        <div class="col-12 text-center">
            <h2 class="mx-auto mb-5">Возможно, вы находитесь в другом городе?</h2>
        </div>
    </div>
    <div class="slick row">
    <?php foreach($_cities as $city){
        
    $postfix = get_page_template_slug() === 'main.php' ? '' : '/'.$post->post_name;

    ?>
      <div class="col px-2 py-4">
          <div class="shadow p-3 overflow-hidden position-relative">
            <a href="https://autolombard-pts-zaim.ru/<?= $city->post_name.$postfix ?>/">
                <div class="half-circle-left h1">·</div>
                <p class="ml-max h4 text-nowrap">
                <?= get_the_title($city->ID); ?>
                </p>
            </a>
          </div>
      </div>
    <?php } ?>
    </div>
</div>