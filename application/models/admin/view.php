<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view extends CI_Model {

    protected $table = '';

    public function __construct() {
        parent::__construct();
    }
    // * Account
    public function view_account($account_page)
    {   
        
        $this->db->select('*');
        $account = $this->db->get('account',$account_page,0);
        $account = $account->result_array();
        return $account;
    }
    public function edit_account($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $account = $this->db->get('account');
        $account = $account->result_array();
        return $account;
    }

    public function page_account($account_page)
    {
        $this->db->select('*');
        $number_account = $this->db->get('account');
        $number_account = $number_account->result_array();
        $all_account = count($number_account);
        $page = round($all_account/$account_page);
        return $page;
    }
    public function page_load($inpage, $account_page){
    }

}

/* End of file: view.php */
