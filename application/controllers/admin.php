<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/admin');
	}
	public function login()
	{
		$username = $this->input->post('Username');
		$password = $this->input->post('Password');
		$this->load->model('admin/admin_login');
		$login_status = $this->admin_login->login($username, $password);
		if ($login_status) {

			$session_data = array(
				'username' => $username,
				'password' => $password
			);
			$this->session->set_userdata($session_data);
			redirect(base_url() . 'manager/home');
		} else {
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Đăng Nhập</i>');
			redirect(base_url() . 'admin');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		redirect(base_url() . 'admin');
	}
	public function edit_password_admin()
	{
		if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {
			$password = trim($this->input->post('password'));
			$this->load->model('admin/admin_login');
			if ($this->admin_login->edit_password_admin($password)) {
				$this->session->set_flashdata('success', '<i class="success" id="testtb" style="display:none;">Thay</i>');
				redirect(base_url().'manager/home');
			}
		} else {
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Truy Cập</i>');
			redirect(base_url() . 'admin');
		}
	}
}

/* End of file: home.php */
