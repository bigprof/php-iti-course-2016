<?php
	include(dirname(__FILE__) . '/TextField.php');
	echo __FILE__ . '<br><br>';
	
	$z = 'c:\var\html\index';
	echo dirname($z) . '<br>';
	echo basename($z) . '<br>';
	
	echo dirname(__FILE__) . '<br>';
	echo basename(__FILE__) . '<br>';