<?php
    require_once( 'include/common.inc.php' );
    
    $firstName = getParameterFromGet('first_name');
    $secondName = getParameterFromGet('last_name');
    $email = getParameterFromGet('email');
    $age = getParameterFromGet('age');
    
    saveInfo( $firstName, $secondName, $email, $age );
