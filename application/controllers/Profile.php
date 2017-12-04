<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function change_image(){
		$this->load->view('cimage');

	}

	public function update(){
		$this->load->view('profile');

	}

	public function upload(){
		$config=[
			'upload_parth' => './upload',
			'allowed_type'=>'jpg | jpeg | png'
		];
		$this->load->library('upload',$config);
		$this->load->form_validation->set_error_delimiters();
		if($this->upload->do_upload()){
			$data=$this->input->post();
			$infor=$this->upload->data();

			echo "<pre>";
			print_r($infor);
			echo "</pre>";
		}
		else{

		}

		}
}
?>