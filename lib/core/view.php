<?php
class view {
	function __construct() {
	
	}
	public function render($name){
		require App_path.'view/'.$name.'.php';
	}
}