<?php
    require_once( 'include/common.inc.php' );
  
    $email = getParameterFromPost('email');
    
    if( $errorCode == USER_INFO_OK )
    {
        $userInfo = printUserInfoFromFile( $email, &$errorCode );        
    } else
    {
        errorHandler( $errorCode );
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Print User Info</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/output_form_style.css" />
</head>
<body>
  <div class="form">
    <div class="headline">User info</div>
    <ul class="left">
      <li class="info_block first">First Name:</li>
      <li class="info_block all">Last Name:</li>
      <li class="info_block all">Email:</li>
      <li class="info_block all">Sex:</li>
      <li class="info_block all">Birthday:</li>
    </ul>
    <ul class="right">
      <li class="output_text"><?= $userInfo[0]; ?></li>
      <li class="output_text"><?= $userInfo[1]; ?></li>
      <li class="output_text"><?= $userInfo[2]; ?></li>
      <li class="output_text"><?= $userInfo[5]; ?></li>
      <li class="output_text"><?= $userInfo[7] . $userInfo[6] . $userInfo[8] ?></li>
    </ul>
    <div class="clear"></div>
  </div>  
</body>
</html>