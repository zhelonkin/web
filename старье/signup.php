<?php
    require_once ('include/common.inc.php');
	
	$firstName = getParameterFromPost('first_name');
	$lastName = getParameterFromPost('last_name');
	if (isset($_FILES['avatar']))
	{
		$fileInfo = $_FILES['avatar'];
		$tmpPath = $fileInfo['tmp_name'];
		$finalPath = 'uploads/' . $fileInfo['name'];
		move_uploaded_file($tmpPath, $finalPath);
	}
?>