<?php
class bootstrap {
	public $config;
	function __construct() {
		$url =  $_GET['url'];
		$url = rtrim($url,"/");
		$url = explode("/", $url);
		$default_controller = 'Index';
		$default_view = 'Index';
		//print_r($url);
		if (empty($url[0])){
			$url[0] = $default_controller;
		}
		$file = 'application/controller/'.$url[0].'.php';
		if(file_exists($file)){
			require $file;
		}
		else {
			require 'application/controller/error.php';
			$controller = new error();
			$controller->render_404();
			return FALSE;
		}

		$controller = new $url[0]();

		if (isset($url[1])){
			if(is_callable(array($controller, $url[1]))){
				if(isset($url[2])){
					$controller->{$url[1]}($url[2]);
				}
				else{
					$controller->{$url[1]}();
				}
			}
			else{
				require 'application/controller/error.php';
				$controller = new error();
				$controller->render_404();
				return FALSE;
			}
		}
		else{
			if(is_callable(array($controller, $default_view))){
				$controller->{$default_view}();
			}
			else{
				require 'application/controller/error.php';
				$controller = new error();
				$controller->render_404();
				return FALSE;
			}
		}
	}
}