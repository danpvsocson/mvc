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
		// $login_status = true;
		if ($login_status) {
			
			$session_data = array(
				'username' => $username
			);
			$this->session->set_userdata($session_data);
            redirect(base_url().'admin/admin_manager');
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
	public function admin_manager()
	{	
		if ($this->session->userdata('username') != '') {
			$this->load->view('admin/admin_manager');
		} else {
			// $this->load->view('admin');
			$this->login();
		}
		
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		// $this->load->view('admin/admin_login');
		// $this->login();
		redirect(base_url().'admin');
	}
	public function edit_password_admin()
	{
		$password = $this->input->post('password');
		$this->load->model('admin/admin_login');
		if ($this->admin_login->edit_password_admin($password)) {
			// $this->session->set_flashdata('success', 'Thay Đổi Mật Khẩu Thành Công');
			// redirect(base_url().'admin');
			echo '<script>alert("Thay Đổi Mật Khẩu Thành Công");</script>';
			$this->load->view('admin/admin_manager');
		}
	}
	public function account()
	{	
		if ($this->session->userdata('username') != '') {
			$this->load->view('admin/account');
		} else {
			$this->login();
		}
		
	}
	public function content()
	{	
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/content');
		} else {
			$this->login();
		}
		
	}
	public function shop()
	{	
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/shop');
		} else {
			$this->login();
		}
		
	}
	public function modul()
	{	
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/modul');
		} else {
			$this->login();
		}
		
	}
	public function help()
	{	
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/help');
		} else {
			$this->login();
		}
		
	}
	public function bug()
	{	
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/bug');
		} else {
			$this->login();
		}
		
	}
}

/* End of file: home.php */
