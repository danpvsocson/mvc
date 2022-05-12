<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shiper_m extends CI_Model {

    protected $table = '';

    public function __construct() {
        parent::__construct();
    }

    public function addshiper($hoten, $tuoi, $sdt, $sodonhang, $linkfb, $avatar)
    {
        $data = array(
            'hoten' => $hoten,
            'tuoi' => $tuoi,
            'sdt' => $sdt,
            'sodonhang' => $sodonhang,
            'linkfb' => $linkfb,
            'avatar' => $avatar,
        );
        $this->db->get('nhan_vien');
        $this->db->insert('nhan_vien', $data);
        return $this->db->insert_id();

    }
    public function showshiper()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        $data = $this->db->get('nhan_vien');
        $data = $data->result_array();
        // var_dump($data);

        return $data;
    }

}

/* End of file: shiper.php */
