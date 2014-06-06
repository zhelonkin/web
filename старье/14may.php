<?php
    header("Content-Type text/plain");
	$digits = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
	for($i = 0; $i < count($digits); $i++)
	{
	    echo $digits[$i] . '\n';
	}
	$i =0;
	while($i < count($digits))
	{
	    echo $digits[$i] . '\n';
	    $i++;
	}
	
	foreach($digits as $key => $value)
	{
	    echo $key . ]=] . $value . '\n';
	}
	
	$fruits = array
	{
	    'apple' => 'green';
		'orange' => 'orange';
		'banana' => 'yellow'
	};
	
	foreach ($fruits as $fruit => 'color'
	{
	  echo $fruit . '=' . $color . '\n';
	}
	
	
	