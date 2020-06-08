<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make( 'theme_options', 'Настроечки' )
->add_fields( [
    Field::make( 'rich_text', 'types_text', 'Текст о том, что можно заложить' ),
    Field::make( 'rich_text', 'advantages_text', 'Текст о преимуществах' ),
    Field::make( 'rich_text', 'requirements_text', 'Текст о требованиях' ),
    // Field::make( 'rich_text', 'example', 'Example' ),
    // Field::make( 'rich_text', 'example', 'Example' ),

]);

?>