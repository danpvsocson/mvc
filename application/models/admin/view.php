<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view extends CI_Model {

    protected $table = '';

    public function __construct() {
        parent::__construct();
    }

    public function view_account()
    {
        $this->db->select('*');
        $account = $this->db->get('account');
        $account = $account->result_array();
        return $account;
    }

}

/* End of file: view.php */
