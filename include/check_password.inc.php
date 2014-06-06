<?php

const PASSWORD_OK = 0;
const PASSWORD_EMPTY = 1;
const PASSWORD_INCORRECT = 2;

function checkPassword( $password, &$errorCode )
{
    $errorCode = IDENTIFIER_OK;
    
    if ( empty( $password ) )
    {
        $errorCode = PASSWORD_EMPTY;
    }
    
    if ( $errorCode == PASSWORD_OK )
    {
        if (ctype_alnum( $password )) 
            {
                $errorCode = PASSWORD_OK;
            } else 
            {
                $errorCode = PASSWORD_INCORRECT;
            }
    }
    return $errorCode;
}
?>