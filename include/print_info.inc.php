<?php
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