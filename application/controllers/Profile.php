<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function get_profile(){
		$this->load->view('profile');

	}


}
?>