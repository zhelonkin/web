<?php

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

function checkFirstName( $userInfo, &$errorCode )
{
    if ( empty( $userInfo['firstName'] ) )
    {
        $errorCode = ERR_EMPTY_FIRST_NAME;
    }
    return $errorCode;
}

function checkLastName( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( empty( $userInfo['lastName'] ) )
        {
            $errorCode = ERR_EMPTY_LAST_NAME;
        } 
    }
    return $errorCode;    
}

function checkEmail( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( empty( $userInfo['email'] ) )
        {
            $errorCode = ERR_EMPTY_EMAIL;
        } else if ( !filter_var( $userInfo['email'], FILTER_VALIDATE_EMAIL ) )
        {
            $errorCode = INCORRECT_EMAIL;
        }                    
    }
    return $errorCode;
}

function checkReEmail( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( empty( $userInfo['reEmail'] ) )
        {
            $errorCode = ERR_EMPTY_RE_EMAIL;
        } else if ( !( $userInfo['email'] == $userInfo['reEmail'] ) )
        {
            $errorCode = ERR_INCORRECT_RE_EMAIL;
        }
    }
    return $errorCode;
}

function checkPassword( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( empty( $userInfo['password'] ) )
        {
            $errorCode = ERR_EMPTY_PASSWORD;
        } else if ( !ctype_alnum( $userInfo['password'] )) 
        {
            $errorCode = ERR_INCORRECT_PASSWORD;
        } 
    }
    return $errorCode;    
}

function checkSex( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( empty( $userInfo['sex'] ) )
        {
            $errorCode = ERR_EMPTY_SEX;
        }
    }
    return $errorCode;
}

function checkMonth( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( empty( $userInfo['month'] ) )
        {
            $errorCode = ERR_EMPTY_MONTH;
        }
    }
    return $errorCode;
}

function checkDay( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( empty( $userInfo['day'] ) )
        {
            $errorCode = ERR_EMPTY_DAY;
        }
    }
    return $errorCode;
}

function checkYear( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( empty( $userInfo['year'] ) )
        {
            $errorCode = ERR_EMPTY_YEAR;
        }
    }   
    return $errorCode;
}

function validateUserInfo( $userInfo, &$errorCode )
{   
    
    checkFirstName( $userInfo, &$errorCode );
    checkLastName( $userInfo, &$errorCode );
    checkEmail( $userInfo, &$errorCode );
    checkReEmail( $userInfo, &$errorCode );
    checkPassword( $userInfo, &$errorCode );
    checkSex( $userInfo, &$errorCode );
    checkMonth( $userInfo, &$errorCode );
    checkDay( $userInfo, &$errorCode );
    checkYear( $userInfo, &$errorCode );
    
    return $errorCode;
}
