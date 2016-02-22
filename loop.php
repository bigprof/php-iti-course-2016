<?php
	$a = [
		'x' => 45,
		'y' => 345,
		'z' => 'dfg',
		'a' => 46764,
		'b' => 'eureur'
	];
	//$a = array(45, 6566, 'sd', 435);
	
	echo '<table border="1">';
	
	/*
	for($i = 0; $i < count($a); $i++){
		echo "<tr><td>{$a[$i]}</td></tr>";
	}
	*/
	foreach($a as $key => $val){
		echo "<tr><td>$key</td><td>$val</td></tr>";
	}
	
	echo '</table>';
?>
