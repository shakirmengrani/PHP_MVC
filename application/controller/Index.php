<?php
class Index extends controller {

	function __construct() {
		parent::__construct();
	}

	public function Index() {
		$this->view->title = APP_TITLE;
		$this->view->render("Index/index");
	}
	public function news($ID = false) {
		$DB = null;
		$this->view->title = APP_TITLE;
		$this->modal->Import_modal("news_modal");
		$data = new news_modal();
		$DB = $data->get_news($ID);
		if ($DB){
			$this->view->data =$DB;
			$this->view->render("Index/news");
		}
		else{
			$this->view->msg = "404 - Page Not Found";
			$this->view->render("error/index");
		}
	}

}