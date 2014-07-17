<?php
require_once ('include/common.inc.php');

global $uploaddir = 'uploads/';

$email = getParameterFromPost('email');
$password = getParameterFromPost('password');
  
function saveFileToHard( &$errorCode )
{

    if( $_FILES['userfile']['error'] == UPLOAD_ERR_OK )
    {
        $tmpPath = $_FILES['userfile']['tmp_name'];
        $finalPath = $uploaddir . $_FILES['userfile']['name'];
        move_uploaded_file( $tmpPath, $finalPath );
    } else
    {
        $errorCode = $_FILES['userfile']['error'];
    }
        echo '<pre>';
        print_r($_FILES);
        echo '<pre>';
}

function userValidation( $email, $password )
{
    dbInitialConnect(); // Соединяемся с базой
    
    $query = 'SELECT * FROM user_info where email=EMAIL AND password=PASSWORD';
    $questVar = array('EMAIL', 'PASSWORD');
    $userVar = array($email, $password);
    $query = str_replace($questVar, $userVar, $query);
    return dbQuery( $query );
}

function isFileSaved()
{
    dbInitialConnect(); // Соединяемся с базой
    $fileName = $_FILES['userfile']['name'];
    $filePath = md5( $uploaddir . $_FILES['userfile']['name'] );
    
    $query = 'SELECT * FROM uploads where file_name=FILE_NAME AND file_path=FILE_PATH';
    $questVar = array('FILE_NAME', 'FILE_PATH');
    $userVar = array($fileName, $filePath);
    $query = str_replace($questVar, $userVar, $query);
    
    return dbQuery( $query );
}

// проверка наличия email и firstName в базе
userValidation( $email, $password )
// Проверка наличия файла в системе
isFileSaved()
// Если имя файла не найдено - загрузить файл в директорию
saveFileToHard();
