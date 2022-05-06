<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('home');
        
    }
    public function themSoSim()
    {
        
    }
    

}


/* End of file: home.php */
