<?php

class Model_profile extends CI_Model
{
	public function update_data($uname){
		$fname=$uname;
		$fName=$this->input->post('firstName');
		$lName=$this->input->post('lastName');
		$phNum=$this->input->post('tp');
 
		//$this->update('reguser',$data,$uname);
		$sql = "UPDATE reguser SET fName='$fName',lName='$lName',phNum='$phNum'  WHERE fName='$fname'"; 
		$this->db->query($sql);

	}
	public function update_wpass($fname){
		$wpass=$this->input->post('wpass');
		$sql = "UPDATE reguser SET passWeb='$wpass'  WHERE fName='$fname'";
		$this->db->query($sql);
		
	}
	public function update_Dpass($fname){
		$dpass=$this->input->post('DPass');
		$sql = "UPDATE reguser SET passDevice='$dpass'  WHERE fName='$fname'";
		$this->db->query($sql);
	}

	public function getid($username){
		$this->db->select('user_id');
		$this->db->where('userName', '$username');
		$q = $this->db->get('user');
		$data = $q->result_array();
		// above code segment used to get id where user name =$username

	}

	public function upload_image($path,$id){
		$img=$path['image'] ;
		$sql = "UPDATE reguser SET userImage='$img'  WHERE fName='$id'";
		$this->db->query($sql); // store image path in db
	

	}
}//