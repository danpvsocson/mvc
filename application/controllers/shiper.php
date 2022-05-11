<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shiper extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->helper(array('form', 'url')); 
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
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 1000000;
        $config['max_width']     = 2000;
        $config['max_height']    = 2000;
        $config['encrypt_name']  = FALSE;
        
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('avatar')){
            $data = array('upload_data' => $this->upload->data());
            foreach($data as $key => $value){
                $avatar = $value["file_path"].$value["file_name"];
            }
            // print_r($this->upload->data());
        }
        else{
            echo 'Lỗi upfile';
            // print_r($this->upload->display_errors());
        }
        echo $avatar;



        //! Trước khi thêm phỉa kích hoạt file ở mục autoload
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 999999;
        $config['max_width']     = 2024;
        $config['max_height']    = 2024;
        $config['encrypt_name']  = FALSE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('name')) //Name của thẻ upload
        {
            $data = array('upload_data' => $this->upload->data());
            foreach($data as $key => $value){
            $avatar = $value['file_path'].$value['file_name']; //Link IMG
            }
        }
        else
        {
            echo 'Lỗi upfile';
        }
    }

}

/* End of file: shiper.php */
