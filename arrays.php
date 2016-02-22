<?php
	$x = array(
		250,
		59,
		'abc'
	);
	
	$x[1] = 'def';
	
	echo $x[1];
	
	$x[5] = 45;
	
	$x[] = 30;
	$x[] = 40;
	
	var_dump($x);
	
	$y = array(
		'a' => 'abcdef',
		'f' => '234',
		'gt' => 23.45,
		'7' => 'abddddd'
	);
	
	echo $y[7];
	
	echo "<br>{$y['gt']}";