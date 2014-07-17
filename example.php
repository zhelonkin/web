<?php

   $email = "box-man@mail.ru";
   $password = md5("1234");
	  
	$query = 'SELECT * FROM uploads where email=EMAIL AND password=PASSWORD';
    $questVar = array('EMAIL', 'PASSWORD');
	$userVar = array($email, $password);
	$query = str_replace($questVar, $userVar, $query);
	  echo $query;
