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

    public function BkCalendar(){

        $Date = $_POST['date'];
        $STime = $_POST['starttime'];
        $ETime = $_POST['endtime'];
        $Purpose = $_POST['optradio'];
        $Description = $_POST['comment'];

        $this->load->model('Model_user');
        $response = $this->Model_user->ReserveData();

       // $this->session->userdata('user_id');

    }

    public function check_timeslot{
        $this->load->model('Model_user');
        $data=$this->Model_user->selectTimeSlot();
        var_dump($data)
    }

}