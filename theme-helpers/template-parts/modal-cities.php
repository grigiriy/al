<div class="modal fade" id="citiesModal" tabindex="-1" role="dialog" aria-labelledby="citiesModal" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered mt-n5">
        <div class="modal-content">
            <div class="modal-header">
            <p class="h5 modal-title">Выбрать город</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

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
                <ul>
                <?php foreach ($cities as $city){ ?>
                    <li>
                        <a class="default-text" href="<?= get_the_permalink($city->ID)?>"><?= get_the_title($city->ID); ?></a>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>