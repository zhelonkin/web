<?php
/**
 * Сохраняет имя, фамилию, эл. адрес, возраст из анкеты
 * в файл с названием "эл. адрес" в папку data
 */ 

function saveUserInfoToFile( $userInfo )
{
    if ( !validateUserInfo( $userInfo, $errorCode ) == USER_INFO_OK )
    {      
        return errorHandler( $errorCode );
    }
 
    $userEmail = strtolower($userInfo['email']);
    $file = fopen("data/$userEmail.txt", 'w');
    if ( $file )
    {
        foreach ( $userInfo as $key => $value )
        {
            fwrite($file, $userInfo[$key] . "\n");
        };
      fclose($file);
    } else
    {
        $errorCode = ERR_CREATE_FILE;
    }
}
