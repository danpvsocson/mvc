<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin extends CI_Controller
{
	private $account_page;
	public function __construct()
	{
		parent::__construct();
		$this->account_page = 10;
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
			$account = $this->view->view_account($this->account_page);
			$page = $this->view->page_account($this->account_page);
			$data = array(
				'accountshow' => $account,
				'page' => $page
			);
			$this->load->view('admin/account', $data);
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
		$password = trim($this->input->post('password'));
		$username = trim($this->input->post('username'));
		$hoten = trim($this->input->post('hoten'));
		$gioitinh = $this->input->post('gioitinh');
		$ngaysinh = $this->input->post('ngaysinh');
		if(!$ngaysinh){$ngaysinh = date('d/m/Y');}
		$sdt = $this->input->post('sdt');
		$email = trim($this->input->post('email'));
		$diachi = trim($this->input->post('diachi'));

		// * Upload Avatar
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'gif|jpg|png|webp';
		$config['max_size']      = 100000;
		$config['max_width']     = 2000;
		$config['max_height']    = 2000;
		$config['encrypt_name']  = FALSE;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('avatar')) {
			$data = array('upload_data' => $this->upload->data());
			foreach ($data as $key => $value) {
				$avatar = base_url() . 'uploads/' . $value["file_name"];
			}
		} else {
			$avatar = 'https://bit.ly/3nOXIFh';
		}
		$trangthai = $this->input->post('trangthai');
		if ($gioitinh != '') {
			$this->load->model('admin/add');
			$check = $this->add->add_account($username, $password, $hoten, $gioitinh, $ngaysinh, $sdt, $email, $diachi, $avatar, $trangthai);
			switch ($check) {
				case 1:
					$this->session->set_flashdata('error', 'Tài Khoản Này Đã Có');
					redirect(base_url() . 'admin/add_account_form');
					break;
				case 2:
					$this->session->set_flashdata('error', 'Email Này Đã Có');
					redirect(base_url() . 'admin/add_account_form');
					break;
				case 3:
					$this->session->set_flashdata('error', 'Số Điện Thoại Này Đã Có');
					redirect(base_url() . 'admin/add_account_form');
					break;
				case 4:
					$this->session->set_flashdata('success', 'Thêm Thành Công');
					redirect(base_url() . 'admin/add_account_form');
					break;
			}
		}else{
			$this->session->set_flashdata('error', 'Chưa Chọn Giới Tính');
			redirect(base_url() . 'admin/add_account_form');
		}
	}
	public function form_edit_account($id)
	{
		$this->load->model('admin/view');
		$account = $this->view->edit_account($id);
		$account = array('accountshow' => $account);
		// var_dump($account);
		$this->load->view('admin/edit_account', $account);
	}
	public function edit_account()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$hoten = $this->input->post('hoten');
		$gioitinh = $this->input->post('gioitinh');
		$ngaysinh = $this->input->post('ngaysinh');
		$sdt = $this->input->post('sdt');
		$email = $this->input->post('email');
		$diachi = $this->input->post('diachi');

		// * Upload Avatar
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 100000;
		$config['max_width']     = 20000;
		$config['max_height']    = 20000;
		$config['encrypt_name']  = FALSE;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('avatar')) {
			$data = array('upload_data' => $this->upload->data());
			foreach ($data as $key => $value) {
				$avatar = base_url() . 'uploads/' . $value["file_name"];
			}
		} else {
			$avatar = $this->input->post('avatar_old');
		}
		var_dump(date("d/m/Y"));
		die();
		$trangthai = $this->input->post('trangthai');
			$this->load->model('admin/edit');
			$check = $this->edit->edit_account($id, $username, $password, $hoten, $gioitinh, $ngaysinh, $sdt, $email, $diachi, $avatar, $trangthai);
			switch ($check) {
				case 1:
					$this->session->set_flashdata('error', 'Tài Khoản Này Đã Có');
					$this->form_edit_account($username);
					break;

				case 2:
					$this->session->set_flashdata('error', 'Email Này Đã Có');
					$this->form_edit_account($username);
					break;
				case 3:
					$this->session->set_flashdata('error', 'Số Điện Thoại Này Đã Có');
					$this->form_edit_account($username);
					break;
				case 4:
					$this->session->set_flashdata('success', 'Thay Đổi Thành Công');
					$this->form_edit_account($username);
					// redirect(base_url() . 'admin/form_edit_account');
					break;
			}
		
	}
	public function delete_account($username)
	{
		$this->load->model('admin/delete');
		if($this->delete->delete_account($username)){
			echo'';
		}else{
			echo'';
		}
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
	public function product_group()
	{
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/product_group');
		} else {
			// $this->login();
			redirect(base_url() . 'admin');
		}
	}
	public function content_group()
	{
		if ($this->session->userdata('username') != '') {

			$this->load->view('admin/content_group');
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
	public function page($page)
	{
	}
}

/* End of file: home.php */
