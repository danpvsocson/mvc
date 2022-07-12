<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('username') || $this->session->userdata('password')) {
			$this->load->view('admin/home');
		} else {
			redirect(base_url() . 'admin');
		}
    }

}

/* End of file: home.php */
