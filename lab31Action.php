<?php
    require_once( 'include/common.inc.php' );
    
    $firstName = getParameterFromGet('first_name');
    $lastName = getParameterFromGet('last_name');
    $email = getParameterFromGet('email');
    $reEmail = getParameterFromGet('re_email');
    $password = getParameterFromGet('password');
    $sex = getParameterFromGet('sex');
    $month= getParameterFromGet('month');
    $day = getParameterFromGet('day');
    $year = getParameterFromGet('year');
    
    saveUserInfo( $firstName, $lastName, $email,
              $reEmail, $password, $sex,
              $month, $day, $year );