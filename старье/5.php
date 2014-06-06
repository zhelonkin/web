<?php
    header("Content-Type: text/plain");
	
	if (isset($_GET['name']) && !empty($_GET['name']))
	{
	    echo "Hello, Dear " . $_GET['name'] . "!";
	}
	else
	{
		echo "Parameter name didn't receive";
	}
	
?>	