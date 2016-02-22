<?php

	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	
	if(!preg_match('/^[a-z ]{3,50}$/i', $name)){
		die("Error in name!");
	}
	
	if(!preg_match('/^[a-z_0-9.@]{3,50}$/i', $email)){
		die("Error in email!");
	}
	
	echo "Thank you, $name!";
	echo "<br>We'll send you an email at $email";
	
