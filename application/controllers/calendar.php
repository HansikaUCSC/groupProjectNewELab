<?php 

class calendar extends CI_Controller{
	
	public function BkCalendar(){

		

		$this->load->model('Model_user');
			$response = $this->Model_user->ReserveData();

		$name=$this->session->userdata('user_name');

	}
	public function {
		$this->load->model('Model_user');
		$data=$this->Model_user->selectTimeSlot();
		var_dump($data)
	}
}

?>