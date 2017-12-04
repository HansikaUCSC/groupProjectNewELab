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
}