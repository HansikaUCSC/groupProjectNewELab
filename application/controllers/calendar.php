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
        $this->load->model('Model_user');
        $data=$this->Model_user->selectTimeSlot();
        //var_dump($data);
        if($data==null){
            $this->load->model('Model_profile');
            $uname=$this->session->userdata('user_name');
            $uid=$this->Model_profile->getid($uname);
           $this->Model_user->ReserveData($uid[0]['user_id']);
            
        }
        else{
            $this->session->set_flashdata('errmsg','You entered time already taken');
            redirect('Home/logged');
        }
    }

}