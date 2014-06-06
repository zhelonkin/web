<?php
    function saveInfo( $firstName, $secondName, $email, $age )
    {
        if ( !empty($firstName) && !empty($secondName) 
            && !empty($email) && !empty($age) )
        {
            $file = fopen("data/$email.txt", 'w');
            if ( $file )
            {
                fwrite($file, $firstName . "\n");
                fwrite($file, $secondName . "\n");
                fwrite($file, $email . "\n");
                fwrite($file, $age);
                fclose($file);
                echo "Запись произведена";
            } else
            {
                echo "Ошибка, файл не создан";
            };
        } else
        {
            echo "Введены не все строки формы";
        }
    }
