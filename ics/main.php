<?php

require_once 'fence.php';

class AlunosSearchInterface extends GlanceSearchInterface {

    // add category operator!
}

try {
    $fence = new Fence();
    $fence->add_content( new AlunosSearchInterface( '.search.json', 'search.json' ) );
    $fence->render();
} catch( Exception $exception ) {
    Fence::handle_exception( $exception );
}

?>
