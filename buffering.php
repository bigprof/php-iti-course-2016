<?php
	ob_start();
	echo "Hello";
	
	header("Content-Type: text/html; charset=UTF-8");
	
	echo "<br>Header sent";
	$html = ob_get_contents();
	ob_end_clean();
	
	echo $html;