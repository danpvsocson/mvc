<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lssim extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('sim');
        $data = $this->sim->showsim();
        $data = array('datashow' => $data);
        $this->load->view('showsim',$data, false);
        
    }
    public function editsim($so)
    {
        $this->load->model('sim');
        $data = $this->sim->editsim($so);
        $data = array('datashow' => $data);
        // var_dump($data);
        $this->load->view('editsim',$data);
        
    }
    public function updatesim()
    {
        $id = $this->input->post('id');
        $so = $this->input->post('sosim');
        $gia = $this->input->post('giatien');
        $this->load->model('sim');
        // var_dump($id);
        if ($this->sim->updatesim($id, $so, $gia)) {
            echo 'Update thanh cong';
        }else{
            echo 'That bai';
        }
    }
    public function addsim()
    {
        $this->load->view('addsim');
        
    }
    public function themsosim()
    {
        $sosim = $this->input->post('sosim');
        $giatien = $this->input->post('giatien');
        $this->load->model('sim');
        if ($this->sim->addsim($sosim,$giatien)) {
            echo 'thanh cong';
        }else{
            echo 'that bai so da co';
        }
    }
    public function xoasim($so)
    {
        $this->load->model('sim');
        if($this->sim->xoasim($so)){
            echo 'Xoa thanh cong';
        }else{
            echo 'Chua xoa duoc';
        }
    }
    

}


/* End of file: home.php */
