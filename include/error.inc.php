<?php

const USER_INFO_OK = 0;
const ERR_INCORRECT_FIRST_NAME = 1;
const ERR_INCORRECT_LAST_NAME = 2;
const ERR_INCORRECT_EMAIL = 3;
const ERR_INCORRECT_PASSWORD = 4;
const ERR_EMPTY_SEX = 5;
const ERR_EMPTY_DATE = 6;
const ERR_CREATE_FILE = 7;
const ERR_OPEN_FILE = 8;
const ERR_FIND_USER_FORM = 9;


function errorHandler( $errorCode )
{
    $messages = array
    (
        USER_INFO_OK => 'All fields are entered correctly',
        ERR_INCORRECT_FIRST_NAME => 'Incorrect First Name',
        ERR_INCORRECT_LAST_NAME => 'Incorrect Last Name',
        ERR_INCORRECT_EMAIL => 'Incorrect email',        
        ERR_INCORRECT_PASSWORD => 'Incorrect password',
        ERR_EMPTY_SEX => 'Sex is not specified',
        ERR_EMPTY_DATE => 'Date is not specified',
        ERR_CREATE_FILE => 'File not created',
        ERR_OPEN_FILE => 'File didnt open',
        ERR_FIND_USER_FORM => 'Nobody with entered email'
    );
    
    $message = isset( $messages[$errorCode] ) ? $messages[$errorCode] : '';
    
    echo $message;
}