<?php
    require_once( 'include/common.inc.php' );
    
    $password = getParameterFromGet( 'password' );
    
    if (checkPassword( $password, $errorCode ) == PASSWORD_OK)
    {
        echo "Итоговая надежность: " . sumStrength( $password );
    } else
    {
        echo "Введите корректный пароль";
    }

