<?php
/**
 * Сохраняет имя, фамилию, эл. адрес, возраст из анкеты
 * в файл с названием "эл. адрес" в папку data
 */ 
function saveUserInfo( $firstName, $lastName, $email,
                       $reEmail, $password, $sex,
                       $month, $day, $year )
{
    if ( !empty($firstName) && !empty($lastName) && !empty($email)
         && !empty($reEmail)&& !empty($password) && !empty($sex)
         && !empty($month) && !empty($day) && !empty($year) )
    {
        if ($email != $reEmail)
        {
            echo "Проверьте правильность email";  
        }
        else
        {
            $userEmail = strtolower($email);
            $file = fopen("data/$userEmail.txt", 'w');
            if ( $file )
            {
                fwrite($file, $firstName . "\n");
                fwrite($file, $lastName . "\n");
                fwrite($file, $email . "\n");
                fwrite($file, $password . "\n");
                fwrite($file, $sex . "\n");
                fwrite($file, $month . "\n");
                fwrite($file, $day . "\n");
                fwrite($file, $year);
                fclose($file);
                echo "Запись произведена";
            }
            else
            {
                echo "Ошибка, файл не создан";
            };
        }
    } 
    else
    {
        echo "Введены не все строки формы";
    }
}
