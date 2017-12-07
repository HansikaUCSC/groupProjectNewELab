<?php

class Model_user extends CI_Model
{
	
	function InsertUserData()
	{
		$data = array(
			'username' => $this->input->post('username','TRUE') , 
			'email' => $this->input->post('email','TRUE') ,
			'nic' => $this->input->post('nic','TRUE') ,
			'contact' => $this->input->post('contact','TRUE') ,
			'usertype' => $this->input->post('usertype','TRUE') ,
			'password' => sha1($this->input->post('password','TRUE')) ,
			);
		
		return $this->db->insert('user_reg',$data);
	}

	function LoginUser()
	{
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));

		// $query = "select * from user_reg where username='$username' and password='$password'";
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$respond = $this->db->get('reguser');

		if ($respond->num_rows() == 1) {
			return $respond->row(0);
			
		}
		else{
			return false;
		}
	}

	function ReserveData()
	{
		$data = array(
			'scheDate' => $this->input->post('date','TRUE') , 
			'startTime' => $this->input->post('starttime','TRUE') ,
			'endTime' => $this->input->post('endtime','TRUE') ,
			'scheType' => $this->input->post('optradio','TRUE') ,
			'scheDiscription' => $this->input->post('comment','TRUE') ,
			
			);
		
		return $this->db->insert('schedule',$data);
	}

	function selectTimeSlot()
	{
		 $this->db->select('startTime,endTime')
		 $query =$this->db->get('schedule');
    		
		$Date = $_POST['date'];
		$STime = $_POST['starttime'];
		$ETime = $_POST['endtime'];
		//$Purpose = $_POST['optradio'];
		//$Description = $_POST['comment'];
		$sql="SELECT startTime,endTime WHERE = '$Date' ";
		$this->db->query($sql);

		/*if ($STime<$ETime) {
				
		}*/
	}

}

?>