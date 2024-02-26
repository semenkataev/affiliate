<?php 
class Businesso_User_Languages_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function create_default($id)
	{
		$data = [
			'name' => 'English',
			'code' => 'en',
			'is_default' => 1,
			'rtl'=> 0,
			'keywords' => 'Information","retake_quiz":"retake_quiz","Correct":"Correct","Incorrect":"Incorrect"}',
			'user_id' => $id,
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		];
		if($this->db->insert('businesso_user_languages', $data))
			return true;
		return false;
	}
	
}		