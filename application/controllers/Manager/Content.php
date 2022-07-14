<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {
	private $so_tin_1_trang;
    public function __construct() {
        parent::__construct();
		$this->so_tin_1_trang = 5;
    }

    public function index()
    {
        if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {
			$this->load->model('admin/view');
			$content = $this->view->view_content();
			$page = $this->view->page_content();
			$data = array(
				'contentshow' => $content,
				'page' => $page
			);
			$this->load->view('admin/content', $data);
		} else {
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Truy Cập</i>');
			redirect(base_url() . 'admin');
		}
    }

}

/* End of file: Content.php */
