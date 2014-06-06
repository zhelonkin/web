<?php

/**
 * К надежности прибавляется (4*n), 
 * где n - количество всех симоволов пароля 
 */
function lengthStrength( $password )
{
    $n = strlen( $password );
    return 4 * $n;
}

/**
 * К надежности прибавляется +(n*4),
 * где n - количество цифр в пароле
 */ 
function numberOfDigitStrength( $password )
{
    $n = 0;
    for ( $key = 0; $key < strlen( $password ); $key++ )
    {
        if (ctype_digit( $password[$key] )) 
        {
            $n++;
        }
    }
    return $n * 4;
}

/** 
 * К надежности прибавляется +((len-n)*2) в случае,
 * если пароль содержит n символов в верхнем регистре
 */
function hightRegisterStrength( $password )
{
    $n = 0;
    for ($key = 0; $key < strlen( $password ); $key++ )
    {
        if (ctype_upper( $password[$key] ))
        {
            $n++;
        } 
    }
    return (strlen( $password ) - $n) * 2;
}

/**
 * К надежности прибавляется +((len-n)*2) в случае, 
 * если пароль содержит n символов в нижнем регистре
 * @param string $password
 * @return int 
 */
function lowRegisterStrength( $password )
{
    $n = 0;
    for ($key = 0; $key < strlen( $password ); $key++ )
    {
        if (ctype_lower( $password[$key] ))
        {
            $n++;
        } 
    }
    return (strlen( $password ) - $n) * 2;
}

/**
 * Если пароль состоит только из букв вычитаем число
 * равное количеству символов
 */
function lettersStrength( $password )
{
    $n = 0;
    for ( $key = 0; $key < strlen( $password ); $key++ )
    {
        if (ctype_alpha( $password[$key] ))
        {
            $n++;
        }
    };
    return ($n == strlen( $password )) ? (-$n) : 0;
}

/** 
 * Если пароль состоит только из цифр вычитаем число
 * равное количеству символов
 */
function digitsStrength( $password )
{
    $n = 0;
    for ( $key = 0; $key < strlen( $password ); $key++ )
    {
        if (ctype_digit( $password[$key] ))
        {
            $n++;
        }
    };
    return ($n == strlen( $password )) ? (-$n) : 0;
}

/**
 * За каждый повторяющийся символ в пароле
 * вычитается количество повторяющихся символов
 */
function matchStrength( $password )
{
    $n = 0;
    foreach (count_chars($password, 1) as $i => $val) 
    {
        if ($val > 1)
        {
            $n += $val;
        }
    };
    return (-$n);
} 

/**
 * Итоговая надежность
 */
function sumStrength( $password )
{
    $strength  = lengthStrength( $password );
    $strength += numberOfDigitStrength( $password );
    $strength += hightRegisterStrength( $password );
    $strength += lowRegisterStrength( $password );
    $strength += lettersStrength( $password );
    $strength += digitsStrength( $password ); 
    $strength += matchStrength( $password );

    return $strength;
}
