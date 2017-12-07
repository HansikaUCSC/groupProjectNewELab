<?php

class Model_user extends CI_Model
{
	//admin insertion
	function InsertUserData()
	{
		$data = array(
			'username' => $this->input->post('username','TRUE') , 
			'email' => $this->input->post('email','TRUE') ,
			'nic' => $this->input->post('nic','TRUE') ,
			'contact' => $this->input->post('contact','TRUE') ,
			'usertype' => $this->input->post('usertype','TRUE') ,
			'password' => ($this->input->post('password','TRUE')) ,
			);
		
		return $this->db->insert('regUser',$data);
	}



	function LoginUser()
	{
		$username = $this->input->post('username');
		$password = ($this->input->post('password'));

		// $query = "select * from user_reg where username='$username' and password='$password'";
		$this->db->where('fName',$username);
		$this->db->where('passWeb',$password);
		$respond = $this->db->get('reguser');

		if ($respond->num_rows() == 1) {
			return $respond->row(0);
			
		}
		else{
			return false;
		}
	}
    function ReserveData($uid)
    {
        $data = array(
            'scheDate' => $this->input->post('date', 'TRUE'),
            'startTime' => $this->input->post('starttime', 'TRUE'),
            'endTime' => $this->input->post('endtime', 'TRUE'),
            'scheType' => $this->input->post('optradio', 'TRUE'),
            'scheDiscription' => $this->input->post('comment', 'TRUE'),
            'user_id'=>$uid

        );

        return $this->db->insert('schedule', $data);
    }
    public function selectTimeSlot(){
    	$date = $this->input->post('date');
    	$sTime = $this->input->post('starttime');
    	$eTime = $this->input->post('endtime');
    	//echo $date;
    	$sql="SELECT startTime , endTime FROM schedule WHERE scheDate='$date' AND startTime>='$sTime' AND endTime<='$eTime'";
    	//$sql="SELECT * FROM schedule";
    	$result=$this->db->query($sql);
   
    
        return $result->result_array();
    	
    }
}

?>