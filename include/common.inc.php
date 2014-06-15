<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    require_once('request.inc.php');
    require_once('identifier.inc.php');
    require_once('check_password.inc.php');
    require_once('password_strength.inc.php');
    require_once('user_info.inc.php');
    require_once('user_infoV2.inc.php');
    
    header('Content-type: text/plain; charset=utf-8');
