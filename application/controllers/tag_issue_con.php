<?php


class tag_issue_con extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('tag_issue_model', 'm');
	}

	public function index(){
		
		$this->load->view('tag_issue_view');
	}

	public function insert(){

		//form validation
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('nic', 'NIC No', 'required');

		if($this->form_validation->run() == TRUE){

			$data_user = array('userName' => $this->input->post('fname'));
			
			//get the the genrated user id 
			$user_id = $this->m->insertToUser($data_user);
	
			if($user_id){
				$data_stud = array(
					'user_id' => $user_id,
					'fName' => $this->input->post('fname'),
					'lName' => $this->input->post('lname'),
					'nic' => $this->input->post('nic'),
				);
	
				$tag_id = $this->m->newTag();  //allocate tag
				$data_tag = array(
					'nuser_id' => $user_id,
					'tagId' =>  $tag_id,
				);
	
				$this->m->insertToOthers($data_stud,$data_tag); //insert to others
			}
			else{
				$this->session->set_flashdata('exist', 'User Name already taken please try with another');
				$this->load->view('tag_issue_view',TRUE);	
				
			}
		}

		else {
			$this->session->set_flashdata('notValid', 'Please fill all te details');
			$this->load->view('tag_issue_view',TRUE);
			
			
		}
		
		

		
        
	}
}
