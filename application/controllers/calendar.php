<?php
/**
 * Created by PhpStorm.
 * User: Isuru Nanayakkara
 * Date: 02-Dec-17
 * Time: 4:39 PM
 */

class Calendar extends CI_Controller
{
    function index(){
        $this->load->view('tempCal');
    }


    public function check_timeslot(){
        $this->form_validation->set_rules('endtime', 'End Time', 'callback_endTimeValidation'); //created validation
        $sTime = $this->input->post('starttime');
        $eTime = $this->input->post('endtime');
        //check validations
        if ($this->form_validation->run() == TRUE){
            $this->load->model('Model_user');
            $data=$this->Model_user->selectTimeSlot();
            if($data==null){
                $this->load->model('Model_profile');
                $uname=$this->session->userdata('user_name');
                $uid=$this->Model_profile->getid($uname);
                $this->Model_user->ReserveData($uid[0]['user_id']);
                $this->session->set_flashdata('msg','successful');
                redirect('Home/logged');
            }
            else{
                $this->session->set_flashdata('msg','1');
                redirect('Home/logged');
            }        

           } 
        else{
            $this->session->set_flashdata('msg','0');
            redirect('Home/logged');
            }     
    }
    public function endTimeValidation($str) // this function is for validation
        {
            $sTime = $this->input->post('starttime');
            if ($str <$sTime)
            {
                $this->form_validation->set_message('endtime', 'end time must greater than statr time');
                return FALSE;
            }
            else
            {
                return TRUE;
            }
        }

}