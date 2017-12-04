<?php

class Upload extends CI_Controller {

 
        public function index()
        {
                $error="";
                $this->load->view('cimage', $error);
        }

        public function do_upload()
        {
              /*  $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 20240;
                $config['max_height']           = 76800; */

                
                $config=(
                      'upload_path' =>  './uploads/',
                      'allowed_types' => 'jpg|png|jpeg'
                );
                $this->load->library('upload', $config);
                $this->form_validation->set_error_delimiters();

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        echo "error";
                        $this->load->view('cimage', $error);

                }
                else
                {
                       /* $data = array('upload_data' => $this->upload->data());
                        $this->load->view('upload_success', $data);*/
                        $data=$this->input->post();
                        $info=$this->upload->data();

                        echo "<pre>";
                        print_r($info);
                        echo "</pre>";
                }
        }
}
?>