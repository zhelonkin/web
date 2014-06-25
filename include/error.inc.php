<?php

const USER_INFO_OK = 0;
const ERR_EMPTY_FIRST_NAME = 1;
const ERR_EMPTY_LAST_NAME = 2;
const ERR_EMPTY_EMAIL = 3;
const ERR_INCORRECT_EMAIL = 4;
const ERR_EMPTY_RE_EMAIL = 5;
const ERR_INCORRECT_RE_EMAIL = 6;
const ERR_EMPTY_PASSWORD = 7;
const ERR_INCORRECT_PASSWORD = 8;
const ERR_EMPTY_SEX = 9;
const ERR_EMPTY_MONTH = 10;
const ERR_EMPTY_DAY = 11;
const ERR_EMPTY_YEAR = 12;
const ERR_CREATE_FILE = 13;

function errorBase()
{
    $errorCode = array
            (
                "USER_INFO_OK",
                "ERR_EMPTY_FIRST_NAME",
                "ERR_EMPTY_LAST_NAME",
                "ERR_EMPTY_EMAIL",
                "ERR_INCORRECT_EMAIL",
                "ERR_EMPTY_RE_EMAIL",
                "ERR_INCORRECT_RE_EMAIL",
                "ERR_EMPTY_PASSWORD",
                "ERR_INCORRECT_PASSWORD",
                "ERR_EMPTY_SEX",
                "ERR_EMPTY_MONTH",
                "ERR_EMPTY_DAY",
                "ERR_EMPTY_YEAR",
                "ERR_CREATE_FILE",
            );
    return $errorCode;
}

function errorHandler( $errorCode )
{
    $messages = array
    (
        USER_INFO_OK => 'All fields are entered correctly',
        ERR_EMPTY_FIRST_NAME => 'First Name is not specified',
        ERR_EMPTY_LAST_NAME => 'Last Name is not specified',
        ERR_EMPTY_EMAIL => 'Email is not specified',
        ERR_INCORRECT_EMAIL => 'Incorrect email',
        ERR_EMPTY_RE_EMAIL => 'Email is not specified',
        ERR_INCORRECT_RE_EMAIL => 'Incorrect re_email',        
        ERR_EMPTY_PASSWORD => 'Password is not specified',
        ERR_INCORRECT_PASSWORD => 'Incorrect password',
        ERR_EMPTY_SEX => 'Sex is not specified',
        ERR_EMPTY_MONTH => 'Month is not specified',
        ERR_EMPTY_DAY => 'Day is not specified',
        ERR_EMPTY_YEAR => 'Year is not specified',
        ERR_CREATE_FILE => 'File not created'
    );
    
    $message = isset( $messages[$errorCode] ) ? $messages[$errorCode] : '';
    
    echo $message;
}