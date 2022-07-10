<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class delete extends CI_Model {

    protected $table = '';

    public function __construct() {
        parent::__construct();
    }

    public function delete_account($username)
    {
        $this->db->where('username', $username);
        return $this->db->delete('account');
    }

}

/* End of file: delete.php */
