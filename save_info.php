<?php
  require_once( 'include/common.inc.php' );
  
  getUserInfoFromRequest();
  
  $userInfo = getUserInfoFromRequest();
  
  saveUserInfoToFile( $userInfo );