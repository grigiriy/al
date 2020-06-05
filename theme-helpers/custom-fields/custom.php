<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make( 'user_meta', 'Example' )
->add_fields( [
    Field::make( 'text', 'example', 'Example' ),

]);

?>