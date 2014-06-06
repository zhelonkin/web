<?php
    require_once( 'include/common.inc.php' );
    
    $identifier = getParameterFromGet( 'identifier' );
    $error_value = 0;
    $error_position = 0;
    $errorCode = IDENTIFIER_OK;
    
    checkIdentifier( $identifier, $errorCode, $errorValue, $errorPosition );
    
    printIdentifierResult( $errorCode, $errorValue, $errorPosition );
?>