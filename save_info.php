<?php
  require_once( 'include/common.inc.php' );
  
  $userInfo = getUserInfoFromRequest();
  
  saveUserInfoToFile( $userInfo );