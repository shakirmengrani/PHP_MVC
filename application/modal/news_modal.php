<?php
class news_modal extends modal{
function __construct(){
		parent::__construct();
	}
	public function get_news($ID = false){
		$data = null;

		if ($ID == null){
			$result = mysql_query('select id,title,slug,text from news where id=(select max(id) from news)');
		}
		else{
			$result = mysql_query('select id,title,slug,text from news where id='.$ID);
		}

		if(!@ $result){
			$data =  $result;
		}
		else{
			while($row = mysql_fetch_array($result)){
				$data[] = array("ID"=>$row['id'],"Title"=>$row['title'],"slug"=>$row['slug'],"Body"=>$row['text']);
			}
		}
		return $data;
	}
	
	
}