<?php

// load Smarty library
require_once( '../../lib/smarty/smarty.class.php' );
require_once( '../../include/common.inc.php' );


$smarty = new Smarty;
//$smarty->debugging = true; //включаем режим отладки(отладочную консоль)
$smarty->template_dir = 'D:/server2go/www2/web/Lab33/templates/';
$smarty->compile_dir = 'D:/server2go/www2/web/Lab33/templates_c/';
$smarty->config_dir = 'D:/server2go/www2/web/Lab33/configs/';
$smarty->cache_dir = 'D:/server2go/www2/web/Lab33/cache/';

$email = getParameterFromPost('email');
$userInfo = printUserInfoFromFile( $email, &$errorCode );
if( !$userInfo )
{
    errorHandler( $errorCode );
} else
{
    $smarty->assign('name', $userInfo );
    $smarty->display('out_form.tpl');
}