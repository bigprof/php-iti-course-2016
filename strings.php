<?php
	header("Content-Type: text/html; charset=UTF-8");
	
	$str = 'Welcome to ITI intake 36';
	$str2 = 'مرحباً بكم فى معهد الآى تى آى';
	
	iconv_set_encoding('internal_encoding', 'UTF-8');
	
	echo substr($str, -5);
	echo '<br>';
	echo substr($str2, 13, 6);
	echo '<br>';
	echo iconv_substr($str2, 7, 3);
	
	echo '<br>iconv_strlen($str2): ' . iconv_strlen($str2);
	
	echo '<br>' . str_replace('t', 'TTT', $str);
	echo '<br>' . str_ireplace('t', 'TTT', $str);
	echo '<br>' . str_ireplace('بكم', 'معكم', $str2);
	
	
	
	