<?php
	function ls($path, $regex = '/.*/'){
		$d = dir($path);
		
		$files = [];
		while(false !== ($entry = $d->read())){
			if(preg_match($regex, $entry))
				$files[] = $entry;
		}
		$d->close();
		
		return $files;
	}
	
	var_dump(ls(dirname(__FILE__), '/^e/i'));
	