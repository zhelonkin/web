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

function checkField( $userInfo, &$errorCode )
{
    $namePattern = '/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/';
    return preg_match( $namePattern, $userInfo );
}

function checkFirstName( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( !checkField( $userInfo['firstName'], &$errorCode ) )
        {
            $errorCode = ERR_INCORRECT_FIRST_NAME;
        }
    }
    return $errorCode;
}

function checkLastName( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( !checkField( $userInfo['lastName'], &$errorCode ) )
        {
            $errorCode = ERR_INCORRECT_LAST_NAME;
        }
    }
    return $errorCode;
}

function checkEmail( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( empty( $userInfo['email'] ) || !filter_var( $userInfo['email'], FILTER_VALIDATE_EMAIL ) )
        {
            $errorCode = ERR_INCORRECT_EMAIL;
        }       
    }
    
    if ( $errorCode == USER_INFO_OK )
    {
        if ( empty( $userInfo['reEmail'] ) || $userInfo['email'] != $userInfo['reEmail'] )
        {
            $errorCode = ERR_INCORRECT_EMAIL;
        }        
    }
    return $errorCode;
}

function checkPassword( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( empty( $userInfo['password'] ) || !ctype_alnum( $userInfo['password'] ) )
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
        if ( $userInfo['sex'] == 'Select Sex:' )
        {
            $errorCode = ERR_EMPTY_SEX;
        }
    };
    return $errorCode;
}

function checkOfDate( $userInfo, &$errorCode )
{
    if ( $errorCode == USER_INFO_OK )
    {
        if ( $userInfo['month'] == 'Month:'
          || $userInfo['day'] == 'Day:' 
          || $userInfo['year'] == 'Year:' )
        {
            $errorCode = ERR_EMPTY_DATE;
        }
    }
    return $errorCode;
}

function checkUserInfo( $userInfo, &$errorCode )
{      
    $errorCode == USER_INFO_OK;

    checkFirstName( $userInfo, &$errorCode );
    checkLastName( $userInfo, &$errorCode );
    checkEmail( $userInfo, &$errorCode );
    checkPassword( $userInfo, &$errorCode );
    checkSex( $userInfo, &$errorCode );
    checkOfDate( $userInfo, &$errorCode ); 
    
    return $errorCode;
}
