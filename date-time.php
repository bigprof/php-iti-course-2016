<?php
	$dob = '1991-10-25';
	$ts = strtotime($dob);
	
	$age = round((time() - $ts) / 60 / 60 / 24 / 365.25);
	
	echo "Age is $age";
	
	/**********************/
	
	echo '<br>';
	
	echo date('l d/n/Y H:i:s');
	
	echo '<br>';
	
	echo 'Number of days in this month: ' . date('t');	
	echo '<br>';
	
	echo 'Index of today: ' . date('z');
	
	/****************************/
	
	echo '<br>';
	$t1 = microtime(true);
	
	for($i = 0; $i < 100000000; $i++){
	}
	
	$t2 = microtime(true);
	
	echo round($t2 - $t1, 3);