<?php 

class calendar extends CI_Controller{
	
	public function BkCalendar(){
		
		$Date = $_POST['date'];
		$STime = $_POST['starttime'];
		$ETime = $_POST['endtime'];
		$Purpose = $_POST['optradio'];
		$Description = $_POST['comment'];

		$this->load->model('Model_user');
			$response = $this->Model_user->ReserveData();

		$name=$this->session->userdata('user_name');

	}
}

?>