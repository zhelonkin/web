<?php

const USER_INFO_OK = 0;
const ERR_EMPTY_FIRST_NAME = 1;
const ERR_EMPTY_LAST_NAME = 2;
const ERR_EMPTY_EMAIL = 3;
const ERR_EMPTY_RE_EMAIL = 4;
const ERR_EMPTY_PASSWORD = 5;
const ERR_EMPTY_SEX = 6;
const ERR_EMPTY_MONTH = 7;
const ERR_EMPTY_DAY = 8;
const ERR_EMPTY_YEAR = 9;

function getUserInfoFromRequest()
{
    $userInfo = array 
    (
        'firstName' => getParameterFromPost('first_name'),
        'lastName' => getParameterFromPost('last_name'),
        'email' => getParameterFromPost('email'),
        'reEmail' => getParameterFromPost('re_email'),
        'password' => getParameterFromPost('password'),
        'sex' => getParameterFromPost('sex'),
        'month' => getParameterFromPost('month'),
        'day' => getParameterFromPost('day'),
        'year' => getParameterFromPost('year'),
    );
    return $userInfo;
}
    
function validateUserInfo( $userInfo, &$errorCode )
{
    $errorCode = USER_INFO_OK;
    
    if ( empty( $userInfo['firstName'] ) )
    {
        $errorCode = ERR_EMPTY_FIRST_NAME;
    };

    if ( $errorCode = USER_INFO_OK; )
    {
        if ( empty( $userInfo['lastName'] ) )
        {
            $errorCode = ERR_EMPTY_LAST_NAME;
        }
    };
    
    if ( $errorCode = USER_INFO_OK; )
    {
        if ( empty( $userInfo['email'] ) )
        {
            $errorCode = ERR_EMPTY_EMAIL;
        }
    };

    if ( $errorCode = USER_INFO_OK; )
    {
        if ( empty( $userInfo['reEmail'] ) )
        {
            $errorCode = ERR_EMPTY_RE_EMAIL;
        }
    };

    if ( $errorCode = USER_INFO_OK; )
    {
        if ( empty( $userInfo['password'] ) )
        {
            $errorCode = ERR_EMPTY_PASSWORD;
        }
    };

    if ( $errorCode = USER_INFO_OK; )
    {
        if ( empty( $userInfo['sex'] ) )
        {
            $errorCode = ERR_EMPTY_SEX;
        }
    };

    if ( $errorCode = USER_INFO_OK; )
    {
        if ( empty( $userInfo['month'] ) )
        {
            $errorCode = ERR_EMPTY_MONTH;
        }
    };

    if ( $errorCode = USER_INFO_OK; )
    {
        if ( empty( $userInfo['day'] ) )
        {
            $errorCode = ERR_EMPTY_DAY;
        }
    };

    if ( $errorCode = USER_INFO_OK; )
    {
        if ( empty( $userInfo['year'] ) )
        {
            $errorCode = ERR_EMPTY_YEAR;
        }
    };
    
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
        ERR_EMPTY_RE_EMAIL => 'Email is not specified',
        ERR_EMPTY_PASSWORD => 'Password is not specified',
        ERR_EMPTY_SEX => 'Sex is not specified',
        ERR_EMPTY_MONTH => 'Month is not specified',
        ERR_EMPTY_DAY => 'Day is not specified',
        ERR_EMPTY_YEAR => 'Year is not specified'
    );
}