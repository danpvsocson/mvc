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
		$this->load->view('admin/admin.php');
	}
	public function login()
	{
		$username = $this->input->post('Username');
		$password = $this->input->post('Password');
		$this->load->model('admin/admin_login');
		$login_status = $this->admin_login->login($username, $password);
		// $login_status = true;
		if ($login_status) {
			
			$session_data = array(
				'username' => $username
			);
			$this->session->set_userdata($session_data);
            redirect(base_url().'admin/login_success');
			// echo '<script>alert("Đăng Nhập Thành Công");</script>';
		} else {
			// echo '<script>alert("Đăng Nhập Thất Bại");</script>';
			// echo '<div class="alert alert-danger" role="alert">
			// 		Đăng Nhập Thất Bại
			// 	</div>';
			$this->session->set_flashdata('error', 'Sai Tài Khoản Hoặc Mật Khẩu');
			$this->index();
			// $this->load->view('admin/admin.php');
		}
	}
	public function login_success()
	{	
		if ($this->session->userdata('username') != '') {
			$this->load->view('admin/login_success');
		} else {
			// $this->load->view('admin');
			$this->login();
		}
		
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->load->view('admin/admin');
		// $this->login();
	}
	public function edit_password_admin()
	{
		$password = $this->input->post('password');
		$this->load->model('admin/admin_login');
		if ($this->admin_login->edit_password_admin($password)) {
			echo '<script>alert("Thay Đổi Mật Khẩu Thành Công");</script>';
			$this->load->view('admin/login_success');
			// $this->session->set_flashdata('success', 'Thay Đổi Mật Khẩu Thành Công');
			// redirect(base_url().'admin/login_success');
		}
	}
	public function account()
	{	
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/account');
		} else {
			// $this->load->view('admin');
			$this->login();
		}
		
	}
	public function content()
	{	
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/content');
		} else {
			// $this->load->view('admin');
			$this->login();
		}
		
	}
	public function shop()
	{	
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/shop');
		} else {
			// $this->load->view('admin');
			$this->login();
		}
		
	}
	public function modul()
	{	
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/modul');
		} else {
			// $this->load->view('admin');
			$this->login();
		}
		
	}
	public function help()
	{	
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/help');
		} else {
			// $this->load->view('admin');
			$this->login();
		}
		
	}
	public function bug()
	{	
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/bug');
		} else {
			// $this->load->view('admin');
			$this->login();
		}
		
	}
}

/* End of file: home.php */
