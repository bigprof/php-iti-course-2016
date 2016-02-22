<?php
	
	$s = 0;
	
	/* passing variables by reference */
	function increment(&$base, $amount){
		/* in case we want to bring a variable from global scope */
		//global $s;
		$base += $amount;
	}
	
	increment($s, 10);
	increment($s, 5);
	increment($s, -3);
	
	echo $s . '<br><hr>';
	
	/*********************************/
	
	function add($x, $y = 10){
		return $x + $y;
	}
	
	echo add(12, 15) . '<br>';
	echo add(12) . '<br>';
	
	/********************************/
	$abc = function($y){
		return $y * 10;
	};
	
	echo '<hr>' . $abc(20);
	/*******************/
	$z = [10, 15, 24, 100];
	
	$aa = array_map( $abc , $z );
		
	var_dump($aa);