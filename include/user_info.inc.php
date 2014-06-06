<?php
/**
 * Сохраняет имя, фамилию, эл. адрес, возраст из анкеты
 * в файл с названием "эл. адрес" в папку data
 */ 
function saveInfo( $firstName, $secondName, $email, $age )
{
    if ( !empty($firstName) && !empty($secondName) 
        && !empty($email) && !empty($age) )
    {
        $email = strtolower($email);
        $file = fopen('data/$email.txt', 'w');
        if ( $file )
        {
            fwrite($file, $firstName . "\n");
            fwrite($file, $secondName . "\n");
            fwrite($file, $email . "\n");
            fwrite($file, $age);
            fclose($file);
            echo "Запись произведена";
        } 
        else
        {
            echo "Ошибка, файл не создан";
        };
    } 
    else
    {
        echo "Введены не все строки формы";
    }
}

/**
 * Выводит имя, фамилию, эл. адрес, возраст
 * из файла с названием "эл. адрес" в папке data
 */ 
function printInfo( $email )
{             
    if (!empty ($email))
    {
        $info = file( "data\\$email.txt" );
        if ( $info )
        {
            echo "First Name: " . $info[0];
            echo "Second Name: " . $info[1];
            echo "Email: " . $info[2];
            echo "Age: " . $info[3];
        } 
        else
        {
            echo "Ошибка открытия файла";
        }
    } 
    else
    {
        echo "email пуст";
    };                
}