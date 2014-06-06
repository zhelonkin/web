 <html>
 <body>
 <form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   Enter identifier: <input type="text" name="identifier">
   <input type="submit" value="OK">
 </form>
 <?php
    if (isset($_GET['identifier'])&& (!empty($_GET['identifier']))) {
	   $flag = ' ';
       $ident = $_GET['identifier'];
	   $ident_array = str_split($ident);
	   if (ctype_alpha($ident_array[0])) {
	      //echo 'ok first';
		  for ($key = 1; $key < count ($ident_array); $key++) {
             if (ctype_alnum($ident_array[$key])) {
			    $flag = "Идентификатор соответствует SR3";
			 } else {
			    $flag = "Введен специальный символ";
			 }
          }			 
	   } else {
	      $flag = "Введен ошибочный первый символ"; 
	   }
	} else echo 'Enter identifier';	
	echo ($flag);
 ?>
 </body>
 </html>