<?php

require_once 'fence.php';
require_once 'source/newic.php';

try {
    $fence = new Fence();
    $fence->add_content( new NewIc( "new.json" ) );
    $fence->render();
} catch( Exception $exception ) {
    Fence::handle_exception( $exception );
}

?>
