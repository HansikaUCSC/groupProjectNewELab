<?php

class Upload extends CI_Controller {

 
        public function index()
        {
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
                        $image_path=base_url("uploads/".$data['upload_data']['raw_name'].$data['upload_data']['file_ext']);
                        $arr['imagepath']= $image_path;
                
                }
        }
}
?>