<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Model {

    protected $table = '';

    public function __construct() {
        parent::__construct();
    }

    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $login_status = $this->db->get('admin');
        $login_status = $login_status->result_array();
        if ($login_status) {
            return $login_status;
        } else {
            return $login_status;
        }
        
    }
    public function edit_password_admin($password)
    {
        return $this->db->update('admin', array('password' => $password));
    }

}

/* End of file: admin.php */
