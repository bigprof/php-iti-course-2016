<?php
	include('TextField.php');
	
	$name = new TextField([
		'name' => 'name',
		'label' => 'Your full name',
		'validation' => function($name){
			if(!preg_match('/^[a-z ]{3,50}$/i', $name)){
				return 'Invalid name';
			}
			
			return true;
		}
	]);
	
	$email = new TextField([
		'name' => 'email',
		'label' => 'Your email address',
		'validation' => function($email){
			if(!preg_match('/^([*+!.&#$�\'\\%\/0-9a-z^_`{}=?~:-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i', $email)){
				return 'Invalid email address';
			}
			
			return true;
		}
	]);
	
	
	
	if(!$name->valid() || !$email->valid()){
		echo '<form method="post" action="super-form.php">';
		
		$name->show();
		$email->show();
		
		echo '<br><button>Submit!</button>';
		echo '</form>';
	}else{
		echo 'Thanks for submitting the super form!';
	}
?>

<style>
	.error{ color: red; }
</style>
	
	
	