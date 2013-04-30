<?php
require 'application/modal/error_modal.php';
class error extends controller {
	function __construct() {
		parent::__construct();
		$this->render = new error_modal();
	}
	public function render_404(){
		$this->view->title = "Error page";
		$this->view->msg = $this->render->get_404();
		$this->view->render("error/index");
		
	}
}