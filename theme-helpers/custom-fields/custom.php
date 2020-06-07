<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make( 'theme_options', 'Настроечки' )
->add_fields( [
    Field::make( 'rich_text', 'types_text', 'Что можно заложить' ),
    // Field::make( 'rich_text', 'example', 'Example' ),
    // Field::make( 'rich_text', 'example', 'Example' ),

]);

?>