<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_group extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {

			$this->load->view('admin/content_group');
		} else {
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Truy Cập</i>');
			redirect(base_url() . 'admin');
		}
    }
    public function add_content_group_form()
	{
		if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {
			$this->load->view('admin/add_content_group');
		} else {
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Truy Cập</i>');
			redirect(base_url() . 'admin');
		}
	}

}

/* End of file: Content_group.php */
