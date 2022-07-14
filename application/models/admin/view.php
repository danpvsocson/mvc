<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Model {

    protected $table = '';
    public function __construct() {
        parent::__construct();
    }
    // * Account
    public function view_account($so_tin_1_trang)
    {   
        $this->db->select('*');
        $all_account = $this->db->get('account');
        $all_account = count($all_account->result_array());
        $account = $this->db->get('account',$so_tin_1_trang,0);
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

    public function page_account($so_tin_1_trang)
    {
        $this->db->select('*');
        $all_account = $this->db->get('account');
        $all_account = count($all_account->result_array());
        $page = round($all_account/$so_tin_1_trang);
        return $page;
    }
    public function load_account_theo_trang($page_index, $so_tin_1_trang)
    {
        $this->db->select('*');
        $all_account = $this->db->get('account');
        $vitri = ($page_index-1)*$so_tin_1_trang;
        $all_account = count($all_account->result_array());
        $account = $this->db->get('account',$so_tin_1_trang,$vitri);
        $account = $account->result_array();
        return $account;
    }


    
    // * Content
    public function view_content()
    {   
        // $this->db->select('*');
        // $content = $this->db->get('content',$so_tin_1_trang,0);
        // $content = $content->result_array();
        // return $content;
        echo 'content';
    }
    public function page_content()
    {
        // $this->db->select('*');
        // $number_content = $this->db->get('content');
        // $number_content = $number_content->result_array();
        // $all_content = count($number_content);
        // $page = round($all_content/$so_tin_1_trang);
        // return $page;
        echo 'content-page';
    }
}

/* End of file: view.php */
