<?php
	$str = "hello\n everyone!\t\t   welcome \n to iti!";
	
	var_dump(explode(' ', $str));
	
	var_dump(preg_split('/\s+/', $str));