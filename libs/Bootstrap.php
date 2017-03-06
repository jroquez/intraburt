<?php

class Bootstrap {

	function __construct() {

		$url = isset($_GET['url']) ? $_GET['url'] : NULL;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		$con    = isset($url[0]) ? $url[0] : NULL;
		$method = isset($url[1]) ? $url[1] : NULL;
		$arg    = isset($url[2]) ? $url[2] : NULL;


		if (empty($con)){
			require 'controllers/index.php';
			$controller = new index();
			$controller->index();
			return false;
		}

		$file = 'controllers/' . $con . '.php';
		if (file_exists($file)) {
			require $file;
		} else {
			//exit('si');
			error();
		}
		
		$controller = new $con;
		$controller ->loadModel($con);


		if (isset($url[2]) && method_exists($controller, $method)) {
			$controller->{$method}($arg);
			$controller->index();
			return false;
		} 
			//exit('si');
		if (isset($url[1]) && method_exists($controller, $method)) {
				$controller->{$method}();
				$controller->index();
				return false;
			}

		if (isset($url[0]) && !isset($url[1])) {	
			$controller->index();
			return false;
		} 
		if ((isset($url[2]) && method_exists($controller, $method)) OR (isset($url[1]) && method_exists($controller, $method)) ){
		
		$controller->index();
		} 
		else
		{ error(); }

	}

}

	function error(){
		require 'controllers/error.php';
			$controller = new Error();
			$controller->index();
			return false;
		}