<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit extends CI_Model {

    protected $table = '';

    public function __construct() {
        parent::__construct();
    }

    public function edit_account($username)
    {
        $this->db->select('*');
        $this->db->where('username', $username);
        $account = $this->db->get('account');
        $account = $account->result_array();
        // var_dump($account);
        // die();
        return $account;
    }

}

/* End of file: edit.php */
