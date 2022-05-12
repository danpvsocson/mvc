<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function index()
	{
		// $this->load->model('shiper_m');
        // $data = $this->shiper_m->showshiper();
        // $data = array('datashow' => $data);
        // // var_dump($data);
        // $this->load->view('shiper', $data);
		$this->load->view('welcome_message');

	}
}
