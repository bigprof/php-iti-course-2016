<?php
	switch($_REQUEST['code']){
		case 'ABCD':
			echo round(rand(1000,1200) / 100, 2);
			break;
		case 'WXYZ':
			echo round(rand(2500,2800) / 100, 2);
			break;
		default:
			echo 'Share not found';
	}
	
	