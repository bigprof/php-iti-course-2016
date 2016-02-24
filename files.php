<?php
	define('LOG_FILE', 'test.log');
	
	function logger($msg){
		$date_time = date('Y-m-d H:i:s');
		file_put_contents(LOG_FILE, "$date_time, $msg\n", FILE_APPEND);
	}
	
	function read_log(){
		return file_get_contents(LOG_FILE);
	}
	
	if(isset($_REQUEST['msg'])) logger($_REQUEST['msg']);
	
	echo '<pre>' . read_log() . '</pre>';