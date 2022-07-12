<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {

			$this->load->view('admin/help');
		} else {
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Truy Cập</i>');
			redirect(base_url() . 'admin');
		}
    }

}

/* End of file: Help.php */
