<?php

const IDENTIFIER_OK = 0;
const IDENTIFIER_EMPTY = 1;
const IDENTIFIER_ERROR_FIRST_NOT_ALPHA = 2;
const IDENTIFIER_ERROR_SYMBOL_NOT_ALNUM = 3;

function checkIdentifier( $identifier, &$errorCode, &$errorValue, &$errorPosition )
{
    $errorCode = IDENTIFIER_OK;
    
    if ( empty( $identifier ) )
    {
        $errorCode = IDENTIFIER_EMPTY;
    }
    
    if ( $errorCode == IDENTIFIER_OK )
    {
        if ( !ctype_alpha( $identifier[0] ) )
        {
            $errorCode = IDENTIFIER_ERROR_FIRST_NOT_ALPHA;
        }
    }
    
    if ( $errorCode == IDENTIFIER_OK )
    {
        //TODO check all other symbols
        for ($key = 1; $key < strlen($identifier); $key++) {
            if ( !ctype_alnum( $identifier[$key] ) )
            {
                $errorCode = IDENTIFIER_ERROR_SYMBOL_NOT_ALNUM;
                $errorValue = $identifier[$key];
                $errorPosition = $key + 1;
                break;
            }
        }
    }
    
    return $errorCode;
}

function printIdentifierResult( $errorCode, $errorValue, $errorPosition )
{
    $messages = array
    (
        IDENTIFIER_OK => 'Identifier is correct!',
        IDENTIFIER_EMPTY => 'Identifier is not specified',
        IDENTIFIER_ERROR_FIRST_NOT_ALPHA => 'First symbol is not alpha',
        IDENTIFIER_ERROR_SYMBOL_NOT_ALNUM => 'Identifier consist of not alpha and numeric'
    );
    
    $message = isset( $messages[$errorCode] ) ? $messages[$errorCode] : '';
    if ($errorCode == IDENTIFIER_ERROR_SYMBOL_NOT_ALNUM)
    {
        $message = 'errorPosition: ' . ($errorPosition) . ',' . ' errorValue: ' . ($errorValue);
    }
    echo $message;
}
?>