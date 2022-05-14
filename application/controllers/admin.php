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
		$this->load->view('admin');
	}
	public function login()
	{
		$username = $this->input->post('Username');
		$password = $this->input->post('Password');
		$this->load->model('admin_login');
		$login_status = $this->admin_login->login($username, $password);
		// $login_status = true;
		if ($login_status) {
			// echo '<script>alert("Đăng Nhập Thành Công");</script>';
			$this->load->view('login_success');
			$_SESSION['login_status'] = TRUE;
			if ($this->input->post('brand1') != 0) {
				$this->input->cookie('username');
				$cookie_username = array(
					'name'   => 'user',
					'value'  => $username,
					'expire' => '86500',
					'secure' => TRUE
				);
				$this->input->set_cookie($cookie_username);
				$cookie_password = array(
					'name'   => 'password',
					'value'  => $password,
					'expire' => '86500',
					'secure' => TRUE
				);
				$this->input->set_cookie($cookie_password);
			}
		} else {
			echo '<script>alert("Đăng Nhập Thất Bại");</script>';
			// echo '<div class="alert alert-danger" role="alert">
			// 		Đăng Nhập Thất Bại
			// 	</div>';
			$this->load->view('admin');
		}
	}
	public function edit_password_admin()
	{
		$password = $this->input->post('password');
		$this->load->model('admin_login');
		if ($this->admin_login->edit_password_admin($password)) {
			echo '<script>alert("Thay Đổi Mật Khẩu Thành Công");</script>';
			$this->load->view('login_success');
		}
	}
}

/* End of file: home.php */
