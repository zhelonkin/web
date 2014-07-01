<?php
/**
 * Сохраняет имя, фамилию, эл. адрес, пароль, пол, дату рождения
 *  из анкеты в файл с названием "эл. адрес" в папку data
 */ 

function saveUserInfoToFile( $userInfo )
{
    $userEmail = strtolower( $userInfo['email'] );
    if( file_exists( "data/$userEmail.txt" ) )
    {
        $errorCode = ERR_CREATE_FILE;
    } else
    {
        $file = fopen( "data/$userEmail.txt", 'w' );
        if( $file )
        {
            foreach ( $userInfo as $key => $value )
            {
                fwrite( $file, $userInfo[$key] . "\n" );
            };
            fclose( $file );
        }
    }
    
    if ( !checkUserInfo( $userInfo, $errorCode ) == USER_INFO_OK )
    {      
        return errorHandler( $errorCode );
    }
}

/**
 * Выводит имя, фамилию, эл. адрес, пол, дату рождения
 *  из файла с названием "эл. адрес" из папки data 
 */ 
function printUserInfoFromFile( $email, &$errorCode )
{             
    $errorCode = USER_INFO_OK;
    $userEmail = strtolower( $email );
    if( file_exists( "data/$userEmail.txt" ) )
    {
        $userInfo = file( "data/$userEmail.txt" );
        if ( !$userInfo )
        {
            $errorCode = ERR_OPEN_FILE;
        }
    } else
    {
        $errorCode = ERR_FIND_USER_FORM;
    }
    
    return $userInfo;
}