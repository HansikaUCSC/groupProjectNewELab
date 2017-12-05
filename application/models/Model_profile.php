<?php

class Model_profile extends CI_Model
{
	public function getid($username){
		$this->db->select('user_id');
		$this->db->where('userName', '$username');
		$q = $this->db->get('user');
		$data = $q->result_array();
		// above code segment used to get id where user name =$username

	}

	public function upload_image($path,$id){
		$img=$path['image'] ;
		$sql = "UPDATE user_reg SET userImage='$img'  WHERE username='$id'";
		$this->db->query($sql); // store image path in db

	}
}//