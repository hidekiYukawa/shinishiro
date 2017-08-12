<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->render('index/index');
		
	}
	
	function details() {
		$this->view->render('index/index');
	}

	public function funct($data = false) {
		echo "INSIDE " . $data;
        $this->details();
	}

	
}