<?php
class controller {
	function __construct() {
		$this->view = new view();
		$this->modal = new modal();
		$this->helper = new helper();
		$this->library = new library();
	}
}