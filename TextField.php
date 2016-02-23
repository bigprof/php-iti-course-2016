<?php
	class TextField{
		private $name, $label, $validation, $error;
		
		public function __construct($config){
			$this->name = $config['name'];
			$this->label = $config['label'];
			$this->validation = $config['validation'];
		}
		
		public function valid(){
			if(isset($_REQUEST[$this->name])){
				$result = call_user_func_array(
					$this->validation, 
					array($_REQUEST[$this->name])
				);
				if($result === true) return true;
				
				$this->error = $result;
			}
			
			return false;
		}
		
		public function show(){
			$value = '';
			if(isset($_REQUEST[$this->name])){
				$value = $_REQUEST[$this->name];
			}
			
			echo '<br><br>' . $this->label . '<br><input type="text" name="' . 
				htmlspecialchars($this->name) . 
				'" value="' . 
				htmlspecialchars($value) .
				'">' . 
				'<div class="error">' . $this->error . '</div>';
		}
	}