<?php

    require_once( 'include/common.inc.php' );
    
    $email = getParameterFromGet('email');
    
    printInfo( $email );