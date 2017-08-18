<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
		$this->view->pageName = 'Index';
        $this->view->pageScrollNav = array('registreren', 'other');
        $this->view->js = array('index/js/register_form.js');
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