<div class="modal fade" id="citiesModal" tabindex="-1" role="dialog" aria-labelledby="citiesModal" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered mt-n5">
        <div class="modal-content main-bg px-3 py-4">
            <div class="modal-body">
            <div class="d-flex mb-4">
                <p class="h3 text-white ml-auto">Выбрать город</p>
                    <button type="button" class=" ml-auto close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php $cities = get_posts([
                    'post_type' => 'page',
                    'numberposts' => '-1',
                    'meta_query' => [
                        [
                            'key'   => '_wp_page_template', 
                            'value' => 'main.php'
                        ],
                    ]
                ]); ?>
                <ul class="">
                <?php foreach ($cities as $city){ ?>
                    <li>
                        <a class="text-white <?= has_category( ['big_city'], $city ) ? '' : 'small_town'; ?>" href="<?= get_the_permalink($city->ID)?>"><?= get_the_title($city->ID); ?></a>
                    </li>
                <?php } ?>
                    <button type="button" class="btn btn-link" onclick="showCities(this)">
                        Все города
                    </button>
                </ul>
            </div>
        </div>
    </div>
</div>