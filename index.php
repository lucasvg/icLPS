<?php

require_once 'fence.php';
try {
    $fence = new Fence();
    $fence->authenticate_user( $_POST );
    $fence->add_menu( 'menu.json' );
    $fence->render();
} catch( Exception $exception ) {
    Fence::handle_exception( $exception );
}

?>
