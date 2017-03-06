<?php

class View {

	function __construct() {
		//echo 'this is the view. <br />';
	}

	public function render($name)
	{  

		if ($name != 'login/index'){
	include './src/php/header_main.php';
	include './src/php/content_top.php';
	require 'views/' . $name . '.php';
	include './src/php/content_bott.php';
	include './src/php/footer_main.php';
	} else {

	require 'views/' . $name . '.php';
		}
	}

}