<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('sim');
        $data = $this->sim->showsim();
        $data = array('datashow' => $data);
        include('header.php');
        echo '<title>Dữ Liệu Sim</title>';
        // var_dump($data);
        $this->load->view('showsim',$data, false);
        include('footer.php');
        
    }
    public function editsim()
    {
        $this->load->model('sim');
        $data = $this->sim->showsim();
        $data = array('datashow' => $data);
        include('header.php');
        // var_dump($data);
        echo '<title>Chỉnh Sửa Sim</title>';
        $this->load->view('editsim',$data, false);
        include('footer.php');
        
    }
    public function addsim()
    {
        $this->load->view('addsim');
        
    }
    public function themsosim()
    {
        // $this->load->view('addsim');
        $sosim = $this->input->post('sosim');
        $giatien = $this->input->post('giatien');
        $this->load->model('sim');
        if ($this->sim->addsim($sosim,$giatien)) {
            echo 'thanh cong';
        }else{
            echo 'that bai';
        }
    }
    

}


/* End of file: home.php */
