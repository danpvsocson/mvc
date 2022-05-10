<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sim extends CI_Model
{

    protected $table = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function addsim($sosim, $giatien)
    {
        $this->db->select('*');
        $this->db->where('so', $sosim);
        $data = $this->db->get('so_sim');
        $data = $data->result_array();
        if(!$data){
            $addToDataBase = array('so' => $sosim, 'gia' => $giatien);
            $this->db->get('so_sim');
            $this->db->where('so', $sosim);
            $this->db->insert('so_sim', $addToDataBase);
            return $this->db->insert_id();
        }
    }
    public function showsim()
    {
        $this->db->select('*');
        $data = $this->db->get('so_sim');
        $data = $data->result_array();
        return $data;
    }
    public function xoasim($so)
    {
        $this->db->where('so', $so);
        return $this->db->delete('so_sim');
    }
    public function editsim($so)
    {
        $this->db->select('*');
        $this->db->where('so', $so);
        $data = $this->db->get('so_sim');
        $data = $data->result_array();
        // var_dump($data);
        return $data;
    }
    public function updatesim($id, $so, $gia)
    {
        // var_dump($id);
        $this->db->where('id', $id);
        return $this->db->update('so_sim', array('so' => $so, 'gia' => $gia));
        
    }
}

/* End of file: addsim.php */
