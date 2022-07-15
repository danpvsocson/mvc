<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
	private $so_tin_1_trang;
	public function __construct()
	{
		parent::__construct();
		$this->so_tin_1_trang = 2;
	}

	public function index()
	{
		if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {
			$this->load->model('admin/view');
			$account = $this->view->view_account($this->so_tin_1_trang);
			$page = $this->view->page_account($this->so_tin_1_trang);
			$data = array(
				'accountshow' => $account,
				'page' => $page
			);
			$this->load->view('admin/account', $data);
		} else {
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Truy Cập</i>');
			redirect(base_url() . 'admin');
		}
	}

	public function add_account_form()
	{
		if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {
			$this->load->view('admin/add_account');
		} else {
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Truy Cập</i>');
			redirect(base_url() . 'admin');
		}
	}
	public function add_account()
	{
		if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {
			$password = trim($this->input->post('password'));
			$username = trim($this->input->post('username'));
			$hoten = trim($this->input->post('hoten'));
			$gioitinh = $this->input->post('gioitinh');
			$ngaysinh = $this->input->post('ngaysinh');
			if (!$ngaysinh || $ngaysinh == '') {
				$ngaysinh = date('Y-m-d');
			}
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
			// var_dump($ngaysinh);
			// die();
			$trangthai = $this->input->post('trangthai');
			if ($gioitinh != '') {
				$this->load->model('admin/add');
				$check = $this->add->add_account($username, $password, $hoten, $gioitinh, $ngaysinh, $sdt, $email, $diachi, $avatar, $trangthai);
				switch ($check) {
					case 1:
						$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none;">Tài Khoản Này Đã Có</i>');
						redirect(base_url() . 'manager/account/add_account_form');
						break;
					case 2:
						$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none;">Email Này Đã Có</i>');
						redirect(base_url() . 'manager/account/add_account_form');
						break;
					case 3:
						$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none;">Số Điện Thoại Này Đã Có</i>');
						redirect(base_url() . 'manager/account/add_account_form');
						break;
					case 4:
						$this->session->set_flashdata('success', '<i class="success" id="testtb" style="display:none;">Thêm</i>');
						redirect(base_url() . 'manager/account/add_account_form');
						break;
				}
			} else {
				$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none;">Chưa Chọn Giới Tính</i>');
				redirect(base_url() . 'manager/account/add_account_form');
			}
		}else{
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Truy Cập</i>');
			redirect(base_url() . 'admin');
		}
	}
	public function form_edit_account($id)
	{
		if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {
			$this->load->model('admin/view');
			$account = $this->view->edit_account($id);
			$account = array('accountshow' => $account);
			$this->load->view('admin/edit_account', $account);
		} else{
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Truy Cập</i>');
			redirect(base_url() . 'admin');
		}
	}
	public function edit_account()
	{
		if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {
			$id = $this->input->post('id');
			$username = trim($this->input->post('username'));
			$password = trim($this->input->post('password'));
			$hoten = trim($this->input->post('hoten'));
			$gioitinh = $this->input->post('gioitinh');
			$ngaysinh = $this->input->post('ngaysinh');
			if ($ngaysinh == '') {
				$ngaysinh = date('Y-m-d');
			}
			$sdt = $this->input->post('sdt');
			$email = trim($this->input->post('email'));
			$diachi = trim($this->input->post('diachi'));

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
			// var_dump($ngaysinh);
			// die();
			$trangthai = $this->input->post('trangthai');
			$this->load->model('admin/edit');
			$check = $this->edit->edit_account($id, $username, $password, $hoten, $gioitinh, $ngaysinh, $sdt, $email, $diachi, $avatar, $trangthai);
			switch ($check) {
				case 1:
					$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none;">Tài Khoản Này Đã Có</i>');
					redirect(base_url() . 'manager/account/form_edit_account/' . $id);
					break;
				case 2:
					$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none;">Email Này Đã Có</i>');
					redirect(base_url() . 'manager/account/form_edit_account/' . $id);
					break;
				case 3:
					$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none;">Số Điện Thoại Này Đã Có</i>');
					redirect(base_url() . 'manager/account/form_edit_account/' . $id);
					break;
				case 4:
					$this->session->set_flashdata('success', '<i class="success" id="testtb" style="display:none;">Cập Nhật</i>');
					redirect(base_url() . 'manager/account/form_edit_account/' . $id);
					break;
			}
		} else{
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Truy Cập</i>');
			redirect(base_url() . 'admin');
		}
	}
	public function delete_account($username)
	{
		if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {
			$this->load->model('admin/delete');
			if ($this->delete->delete_account($username)) {
				$this->session->set_flashdata('success', '<i class="success" id="testtb" style="display:none;">Xóa</i>');
				redirect(base_url() . 'manager/account');
			} else {
				$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none;"></i>');
				redirect(base_url() . 'manager/account');
			}
		}
		else {
			$this->session->set_flashdata('error', '<i class="error" id="testtb" style="display:none">Truy Cập</i>');
			redirect(base_url() . 'admin');
		}
	}
	public function page($page_index)
	{
		if ($this->session->userdata('username') != '' || $this->session->userdata('password') != '') {
			$this->load->model('admin/view');
			$account = $this->view->load_account_theo_trang($page_index, $this->so_tin_1_trang);
			$page = $this->view->page_account($this->so_tin_1_trang);
			$data = array(
				'accountshow' => $account,
				'page' => $page
			);
			$this->load->view('admin/account', $data);
		} else {
			redirect(base_url() . 'admin');
		}
	}
}

/* End of file: account.php */
