<?php
    
require_once( 'common.inc.php' );

const DB_HOST = '127.0.0.1';
const DB_PORT = '7188';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'user';
    
$g_dbLink = null;
function dbInitialConnect()
{
    global $g_dbLink;
    $g_dbLink = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

    if ( !$g_dbLink )
    {
        die( 'Connection error: ' . mysqli_connect_error() );
    } 
}

function dbQuery($query)
{
    global $g_dbLink;
    $result = mysqli_query($g_dbLink, $query);
    return ($result !== false);
}

function dbQuote($value)
{
    global $g_dbLink;
    return mysqli_real_escape_string($g_dbLink, $value);
}

function dbGetLastInsertId()
{
    global $g_dbLink;
    return mysqli_insert_id($g_dbLink);
}

function dbQueryGetResult($query)
{
    global $g_dbLink;
    $data = array();
    $result = mysqli_query($g_dbLink, $query);
    if ($result)
    {
        while ($row = mysqli_fetch_accoc($result))
        {
            array_push($data, $row);
        }
        mysqli_free_results($result);
    }
    return $data;
}
?>