<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sim extends CI_Model {

    protected $table = '';

    public function __construct() {
        parent::__construct();
    }

    public function addsim($sosim, $giatien)
    {

        $addToDataBase = array('so' => $sosim, 'gia' => $giatien );
        $this->db->select('*');
        $t = $this->db->get('so_sim');
        $this->db->where('so !=', $sosim);
        var_dump($t);
        // $this->db->insert('so_sim', $addToDataBase);
        // return $this->db->insert_id();
    }
    public function showsim()
    {
        $this->db->select('*');
        $data = $this->db->get('so_sim');  
        $data = $data ->result_array();
        return $data;
        
    }


}

/* End of file: addsim.php */
