<?php

class Controller {

	function __construct() {
		//echo 'Main controller<br />';
		$this->view = new View();
	}
	
    
    // this function is called from Bootstrap.php
	public function loadModel($name) {
		
		$path = 'models/'.$name.'_model.php';
		
		if (!file_exists($path)) {
            return false;
        } else {
			require 'models/'.$name.'_model.php';
			
			$modelName = $name . '_Model';

			$this->model = new $modelName();
		}		
	}

}