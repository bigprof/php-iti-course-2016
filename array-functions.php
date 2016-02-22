<?php
	
	$arr = [];
	
	for($i = 0; $i < 90; $i += 3){
		$arr[$i] = rand(0, 1000);
	}
	
?>

<table border="1">
	<tr>
		<td>Original array<br><?php var_dump($arr); ?></td>
		
		<td>ksort<br><?php ksort($arr); var_dump($arr); ?></td>
		<td>krsort<br><?php krsort($arr); var_dump($arr); ?></td>

		<td>asort<br><?php asort($arr); var_dump($arr); ?></td>

		<td>arsort<br><?php arsort($arr); var_dump($arr); ?></td>

		<td>sort<br><?php sort($arr); var_dump($arr); ?></td>
		
		<td>rsort<br><?php rsort($arr); var_dump($arr); ?></td>
	</tr>
</table>
	
	