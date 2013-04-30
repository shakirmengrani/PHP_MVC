<?php
class modal {
	protected $link = null;
	private $server = DB_HOST;
	private $user = DB_USER;
	private $password = DB_PASSWORD;
	private $database_name = DATABASE;
	function __construct() {
		$this->link = mysql_connect($this->server,$this->user,$this->password);
		mysql_select_db($this->database_name,$this->link); 
	}
	function Import_modal($name){
	require App_path.'modal/'.$name.'.php';
	}
}