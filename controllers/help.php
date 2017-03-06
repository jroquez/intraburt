<?php

class Help extends Controller {

	function __construct() {
		parent::__construct();
		//echo 'We are inside help<br />';
	}

	function index(){
		$this->view->render('help/index');
	}

	public function other($arg = false) {
		// 'we are inside other<br />';
		exit ('Optional: ' . $arg . '<br />');

		require 'models/help_model.php';
		$model = new Help_Model();
	}

}