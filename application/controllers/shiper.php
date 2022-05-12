<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shiper extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('shiper_m');
        $data = $this->shiper_m->showshiper();
        $data = array('datashow' => $data);
        // var_dump($data);
        $this->load->view('shiper', $data);
    }
    public function addshiper()
    {
        $hoten = $this->input->post('hoten');
        $tuoi = $this->input->post('tuoi');
        $sdt = $this->input->post('sdt');
        $sodonhang = $this->input->post('sodonhang');
        $linkfb = $this->input->post('linkfb');
        // * Model Upload
        $config['upload_path'] = './uploads/img';
        $config['allowed_types'] = 'gif|jpg|png|webp';
        $config['max_size']      = 100000;
        $config['max_width']     = 2000;
        $config['max_height']    = 2000;
        $config['encrypt_name']  = FALSE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('avatar')){
            $data = array('upload_data' => $this->upload->data());
            foreach($data as $key => $value){
                // $avatar = $value["file_path"].$value["file_name"];
                $avatar = base_url().'uploads/img/'.$value["file_name"];
            }
        }
        else{
            echo 'Lỗi upfile';
        }
        $this->load->model('shiper');
    }
    public function addbyajax()
    {
        $hoten = $this->input->post('hoten');
        $tuoi = $this->input->post('tuoi');
        $sdt = $this->input->post('sdt');
        $sodonhang = $this->input->post('sodonhang');
        $linkfb = $this->input->post('linkfb');
        $avatar = "https://i.ytimg.com/vi/HH1fZ7rx5pQ/maxresdefault.jpg";
        $this->load->model('shiper_m');
        if($this->shiper_m->addshiper($hoten, $tuoi, $sdt, $sodonhang, $linkfb, $avatar)){
            echo 'OK';
        }else{echo 'Loi';}
    }

}

/* End of file: shiper.php */
