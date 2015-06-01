<?php

require_once 'fence.php';

class OrientadoresSearchInterface extends GlanceSearchInterface {

    // add category operator!
}

try {
    $fence = new Fence();
    $fence->add_content( new OrientadoresSearchInterface( '.search.json', 'search.json' ) );
    $fence->render();
} catch( Exception $exception ) {
    Fence::handle_exception( $exception );
}

?>
