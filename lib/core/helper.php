<?php
class helper {
	function __construct() {
	
	}
	public function load_helper($name){
		require App_path.'helper/'.$name.'.php';
	}
}