<?php
defined('BASEPATH') or exit('No direct script access allowed');

class add extends CI_Model
{

    protected $table = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function add_account($username, $password, $hoten, $gioitinh, $sdt, $email, $diachi, $avatar, $trangthai)
    {
        $this->db->select('*');
        $this->db->where('username', $username);
        $check = $this->db->get('account');
        $check = $check->result_array();
        if ($check) {
            return 1;
        } else {
            $this->db->select('*');
            $this->db->where('email', $email);
            $check = $this->db->get('account');
            $check = $check->result_array();
            if ($check) {
                return 2;
            } 
            else{
                $this->db->select('*');
                $this->db->where('sdt', $sdt);
                $check = $this->db->get('account');
                $check = $check->result_array();
                if ($check) {
                    return 3;
                } else {
                    $addToDataBase = array(
                        'username' => $username, 
                        'password' => $password, 
                        'hoten' => $hoten, 
                        'gioitinh' => $gioitinh, 
                        'sdt' => $sdt, 
                        'email' => $email, 
                        'diachi' => $diachi, 
                        'avatar' => $avatar, 
                        'trangthai' => $trangthai
                    );
                    $this->db->get('account');
                    $this->db->insert('account', $addToDataBase);
                    return 4;
                }
            }
        }
    }
}

/* End of file: add.php */
