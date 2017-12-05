<?php

class Upload extends CI_Controller {

        public function load_update(){
                $this->load->view('profile');
        }
       /* public function update(){
               $this->load->model('Model_profile'),
               $this->Model_profile->update_data($this->session->userdata('user _name')); 
        }*/

 
        public function index()
        {
                //$this->load->view('nheader');
                $this->load->view('cimage');
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 20240;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        echo "error";
                        $this->load->view('cimage', $error);

                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                       // $this->load->view('upload_success', $data);
                        // get the parth of the image detail are return as array of array
                        $image_path=base_url("uploads/".$data['upload_data']['raw_name'].$data['upload_data']['file_ext']);
                        $arr['image']= $image_path;
                        unset($data['submit']);
                        $this->load->model('Model_profile');
                       // $this->Model_profile->getid( $this->session->userdata('user_name'));
                        $this->Model_profile->upload_image($arr, $this->session->userdata('user _name'));
                }
                //$this->load->view('nheader');
                $this->load->view('cimage');
        }
}
?>