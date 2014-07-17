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
    if( !file_exists( "../../data/$userEmail.txt" ) )
    {
        $errorCode = ERR_FIND_USER_FORM;        
    } else
    {
        $file = file( "../../data/$userEmail.txt" );
        if ( !$file )
        {
            $errorCode = ERR_OPEN_FILE;
        } 
    }
    if( $errorCode == USER_INFO_OK )
    {
      return $file;
    }
}

/**
 * Сохраняет имя, фамилию, эл. адрес, пароль, пол, дату рождения
 *  из анкеты в файл базу данных
 */ 
function saveUserInfoToDb( $userInfo )
{ 
    $g_dbLink = null;
    $errorCode = USER_INFO_OK;
    
    dbInitialConnect(); // Соединяемся с базой
    
    $firstName = dbQuote( $userInfo['firstName'] );
    $lastName = dbQuote( $userInfo['lastName'] );
    $email = dbQuote( $userInfo['email'] );
    $password = md5( dbQuote( $userInfo['password'] ) );
    $sex = dbQuote( $userInfo['sex'] );
    $day = dbQuote( $userInfo['day'] );
    $month = dbQuote( $userInfo['month'] );
    $year = dbQuote( $userInfo['year'] );
    
    /* Создаем таблицу user_info */
    $query = 'CREATE TABLE user_info
     (user_id INT(11) UNSIGNED auto_increment, first_name VARCHAR(50),
     second_name VARCHAR(50), email VARCHAR(255), password VARCHAR(50), 
     sex VARCHAR(6), birthday DATE, PRIMARY KEY(user_id))';
    dbQuery($query);
    
    $query = 'SELECT * FROM user_info where email=' . $email . '';
    $result = dbQueryGetResult($query);
    if( !empty($result) )
    {
          $errorCode = ERR_ALREADY_EXIST;
    } else
    {
        /* Записываем строку в таблицу user_info */
        $query = "INSERT INTO user_info
          (first_name, second_name, email, password, sex, birthday)
           VALUES ('FIRST_NAME', 'LAST_NAME', 'EMAIL', 'PASSWORD',
           'SEX', 'YEAR:MONTH:DAY')";
        $questVar = array('FIRST_NAME', 'LAST_NAME', 'EMAIL', 'PASSWORD',
           'SEX', 'YEAR', 'MONTH', 'DAY');
        $userVar = array($firstName, $lastName, $email, $password,
            $sex, $year, $month, $day);
        $query = str_replace($questVar, $userVar, $query);
        dbQuery($query);
    }
} 