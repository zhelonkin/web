<?php

function getYear()
{
    $year = '';
    for ( $i = 1900; $i < 2014; $i++ )
    {
        $year .= '<option>'. $i . '</option>';
    }
    return $year;
}

function getMonth()
{
    $month = '';
    $months = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
    for ( $i = 0; $i < 12; $i++ )
    {
        $month .= '<option>'. $months[$i] . '</option>';
    }
    return $month;
}

function getDay()
{
    $day = '';
    for ( $i = 1; $i <= 31; $i++ )
    {
        $day .= '<option>'. $i . '</option>';
    }
    return $day;
}