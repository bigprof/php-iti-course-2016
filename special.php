<?php
	$x = null;
	$y = false;
	
	if($x === $y) echo 'x = y';
	
	/* beware of data type! */
	$str = 'Hany loves apples -- Hany';
	if(strpos($str, 'Hany')){
		echo 'Hany found!';
	}else{
		echo 'Hany not found';
	}