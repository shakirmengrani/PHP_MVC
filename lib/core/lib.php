<?php
class library {
	function __construct() {
	
	}
	public function load_library($name){
		require App_path.'library/'.$name.'.php';
	}
}