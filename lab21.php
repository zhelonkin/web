<?php
    	if (isset($_GET['text']) && !empty($_GET['text']))
		{
		    echo trim(preg_replace('/\s+/', ' ', $_GET['text']));
		}
		else
		{
		    'Ошибка';
		}

	
?>