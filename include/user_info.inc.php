<?php
/**
 * Сохраняет имя, фамилию, эл. адрес, возраст из анкеты
 * в файл с названием "эл. адрес" в папку data
 */ 

function saveUserInfoToFile( $userInfo )
{
  if ( !validateUserInfo( $userInfo, $errorCode ) )
  {
    echo $errorCode;
    return $errorCode;
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
  }
}

/**
 * Выводит имя, фамилию, эл. адрес, возраст
 * из файла с названием "эл. адрес" в папке data
 
function getUserInfoFromFile( $email );
{             
  if (!empty ($email))
  {
    $userEmail = strtolower($email);
    $info = file( "data\\$userEmail.txt" );
    if ( $info )
    {
      echo "First Name: " . $info[0];
      echo "Last Name: " . $info[1];
      echo "Email: " . $info[2];
      echo "Password: " . $info[3];
      echo "Sex: " . $info[4];
      echo "Month of birthday: " . $info[5]; 
      echo "Day of birthday: ". $info[6];
      echo "Year of birthday: ". $info[7];
    }
  }
}*/ 