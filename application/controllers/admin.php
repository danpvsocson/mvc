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
			redirect(base_url() . 'admin/home');
			// echo '<script>alert("Đăng Nhập Thành Công");</script>';
		} else {
			// echo '<script>alert("Đăng Nhập Thất Bại");</script>';
			// echo '<div class="alert alert-danger" role="alert">
			// 		Đăng Nhập Thất Bại
			// 	</div>';
			$this->session->set_flashdata('error', 'Sai Tài Khoản Hoặc Mật Khẩu');
			$this->index();
		}
	}
	public function home()
	{
		if ($this->session->userdata('username') != '') {
			$this->load->view('admin/home');
		} else {
			// $this->login();
			// $this->load->view('admin/admin');
			redirect(base_url() . 'admin/admin');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		// $this->load->view('admin/admin_login');
		// $this->login();
		redirect(base_url() . 'admin');
	}
	public function edit_password_admin()
	{
		$password = $this->input->post('password');
		$this->load->model('admin/admin_login');
		if ($this->admin_login->edit_password_admin($password)) {
			// $this->session->set_flashdata('success', 'Thay Đổi Mật Khẩu Thành Công');
			// redirect(base_url().'admin');
			echo '<script>alert("Thay Đổi Mật Khẩu Thành Công");</script>';
			$this->load->view('admin/home');
			// redirect(base_url().'admin/home');
		}
	}
	// * Account
	public function account()
	{
		if ($this->session->userdata('username') != '') {
			$this->load->model('admin/view');
			$account = $this->view->view_account();
			$account = array('accountshow' => $account);
			$this->load->view('admin/account', $account);
		} else {
			// $this->login();
			redirect(base_url() . 'admin');
		}
	}
	public function add_account_form()
	{
		$this->load->view('admin/add_account');
	}
	public function add_account()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$hoten = $this->input->post('hoten');
		$gioitinh = $this->input->post('gioitinh');
		$sdt = $this->input->post('sdt');
		$email = $this->input->post('email');
		$diachi = $this->input->post('diachi');
		$avatar = $this->input->post('avatar');
		$trangthai = $this->input->post('trangthai');
		$this->load->model('admin/add');
		$check = $this->add->add_account($username, $password, $hoten, $gioitinh, $sdt, $email, $diachi, $avatar, $trangthai);
		if ($check == 1) {
			$this->session->set_flashdata('error', 'Tài Khoản Này Đã Có');
			redirect(base_url() . 'admin/add_account_form');
		}
		if ($check == 2) {
			$this->session->set_flashdata('error', 'Email Này Đã Có');
			redirect(base_url() . 'admin/add_account_form');
		}
		if ($check == 3) {
			$this->session->set_flashdata('error', 'Số Điện Thoại Này Đã Có');
			redirect(base_url() . 'admin/add_account_form');
		}
		if ($check == 4) {
			$this->session->set_flashdata('success', 'Thêm Thành Công');
			redirect(base_url() . 'admin/add_account_form');
		}
	}
	public function form_edit_account($username)
	{
		$this->load->model('admin/edit');
		$account = $this->edit->edit_account($username);
		$account = array('accountshow' => $account);
		// var_dump($account);
		$this->load->view('admin/edit_account', $account);
	}
	public function edit_account()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$hoten = $this->input->post('hoten');
		$gioitinh = $this->input->post('gioitinh');
		$sdt = $this->input->post('sdt');
		$email = $this->input->post('email');
		$diachi = $this->input->post('diachi');
		$avatar = $this->input->post('avatar');
		$trangthai = $this->input->post('trangthai');
		$this->load->model('admin/edit');
		$check = $this->edit->edit_account($username, $password, $hoten, $gioitinh, $sdt, $email, $diachi, $avatar, $trangthai);
		if ($check == 1) {
			$this->session->set_flashdata('error', 'Tài Khoản Này Đã Có');
			redirect(base_url() . 'admin/add_account_form');
		}
		if ($check == 2) {
			$this->session->set_flashdata('error', 'Email Này Đã Có');
			redirect(base_url() . 'admin/add_account_form');
		}
		if ($check == 3) {
			$this->session->set_flashdata('error', 'Số Điện Thoại Này Đã Có');
			redirect(base_url() . 'admin/add_account_form');
		}
		if ($check == 4) {
			$this->session->set_flashdata('success', 'Thay Đổi Thành Công');

			redirect(base_url() . 'admin/form_edit_account');
		}
	}
	public function delete_account($username)
	{
		
	}
	// * Content
	public function content()
	{
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/content');
		} else {
			// $this->login();
			redirect(base_url() . 'admin');
		}
	}
	public function shop()
	{
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/shop');
		} else {
			// $this->login();
			redirect(base_url() . 'admin');
		}
	}
	public function modul()
	{
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/modul');
		} else {
			// $this->login();
			redirect(base_url() . 'admin');
		}
	}
	public function help()
	{
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/help');
		} else {
			// $this->login();
			redirect(base_url() . 'admin');
		}
	}
	public function bug()
	{
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/bug');
		} else {
			// $this->login();
			redirect(base_url() . 'admin');
		}
	}
}

/* End of file: home.php */
