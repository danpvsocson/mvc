<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shiper extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('shiper.php');
    }
    public function addshiper()
    {
        // $hoten = $this->input->post('hoten');
        // $tuoi = $this->input->post('tuoi');
        // $sdt = $this->input->post('sdt');
        // $sodonhang = $this->input->post('sodonhang');
        // $linkfb = $this->input->post('linkfb');
        // $avatar = $this->input->post('avatar');
        // $this->load->model('shiper');
        // * Model Upload
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 100000;
        $config['max_width']     = 2000;
        $config['max_height']    = 2000;
        $config['encrypt_name']  = FALSE;
        
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('avatar')){
            $data = array('upload_data' => $this->upload->data());
            foreach($data as $key => $value){
                $avatar = base_url().$value["file_name"];
            }
        }
        else{
            echo 'Lỗi upfile';
        }
        echo $avatar;



        
    }

}

/* End of file: shiper.php */
