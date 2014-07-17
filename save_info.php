<?php
  require_once( 'include/common.inc.php' );
  
  $userInfo = getUserInfoFromRequest();
  
  if( checkUserInfo( $userInfo, &$errorCode ) == USER_INFO_OK )
  {
      //saveUserInfoToFile( $userInfo );
      saveUserInfoToDb( $userInfo );
  };
  
  if( $userInfo != USER_INFO_OK )
  {
      errorHandler( $errorCode );
  }