<div class="modal fade" id="citiesModal" tabindex="-1" role="dialog" aria-labelledby="citiesModal" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered mt-n5">
        <div class="modal-content px-3 py-4">
            <div class="modal-body">
            <div class="d-flex mb-4">
                <p class="h3  ml-auto">Выбрать город</p>
                <button type="button" class="ml-auto close align-self-start font-weight-light h1 mt-n3" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php $cities = get_posts([
                    'post_type' => 'page',
                    'numberposts' => '-1',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'meta_query' => [
                        [
                            'key'   => '_wp_page_template', 
                            'value' => 'main.php'
                        ],
                    ]
                ]);
                $big_cities = get_posts([
                    'post_type' => 'page',
                    'category'    => 2,
                    'numberposts' => '-1',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'meta_query' => [
                        [
                            'key'   => '_wp_page_template', 
                            'value' => 'main.php'
                        ],
                    ]
                ]);
                ?>
                <div class="cities">
                    <div>
                    <?php
                        $letter_pr = '';
                        foreach ($big_cities as $city){
                        $letter = mb_substr(get_the_title($city->ID), 0, 1, "UTF-8");
                        if ($letter_pr !== $letter){
                        ?>
                        </div><div><h3 class="mt-2"><?= $letter; ?></h3>
                        <?php } ?>
                        <p>
                            <a href="<?= get_the_permalink($city->ID)?>"><?= get_the_title($city->ID); ?></a>
                        </p>
                        <?php
                        $letter_pr = $letter;
                        } ?>
                            <button type="button" class="btn btn-link" onclick="showCities(this)">
                            Все города
                        </button>
                    </div>
                </div>
                <div class="cities" style="display:none">
                <div>
                    <?php
                        $letter_pr = '';
                        foreach ($cities as $city){
                        $letter = mb_substr(get_the_title($city->ID), 0, 1, "UTF-8");
                        if ($letter_pr !== $letter){
                        ?>
                        </div><div><h3 class="mt-2"><?= $letter; ?></h3>
                        <?php } ?>
                        <p>
                            <a href="<?= get_the_permalink($city->ID)?>"><?= get_the_title($city->ID); ?></a>
                        </p>
                        <?php
                        $letter_pr = $letter;
                        } ?>
                            <button type="button" class="btn btn-link" onclick="showCities(this)">
                            Все города
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>