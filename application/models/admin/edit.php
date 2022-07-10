<?php
defined('BASEPATH') or exit('No direct script access allowed');

class edit extends CI_Model
{

    protected $table = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function edit_account($id, $username, $password, $hoten, $gioitinh, $ngaysinh, $sdt, $email, $diachi, $avatar, $trangthai)
    {
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('id !=', $id);
        $check = $this->db->get('account');
        $check = $check->result_array();
        if ($check) {
            return 1;
        } else {
            $this->db->select('*');
            $this->db->where('email', $email);
            $this->db->where('id !=', $id);
            $check = $this->db->get('account');
            $check = $check->result_array();
            if ($check) {
                return 2;
            } else {
                $this->db->select('*');
                $this->db->where('sdt', $sdt);
                $this->db->where('id !=', $id);
                $check = $this->db->get('account');
                $check = $check->result_array();
                if ($check) {
                    return 3;
                } else {
                    $this->db->where('id', $id);
                    $this->db->update('account', array(
                        'username' => $username,
                        'id' => $id,
                        'password' => $password,
                        'hoten' => $hoten,
                        'gioitinh' => $gioitinh,
                        'ngaysinh' => $ngaysinh,
                        'sdt' => $sdt,
                        'email' => $email,
                        'diachi' => $diachi,
                        'avatar' => $avatar,
                        'trangthai' => $trangthai
                    ));
                    return 4;
                }
            }
        }
    }
}   

/* End of file: edit.php */
