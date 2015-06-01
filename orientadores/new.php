<?php

require_once 'fence.php';
require_once 'source/neworientador.php';

try {
    $fence = new Fence();
    $fence->add_content( new NewOrientador( "new.json" ) );
    $fence->render();
} catch( Exception $exception ) {
    Fence::handle_exception( $exception );
}

?>
