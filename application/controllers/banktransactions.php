<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banktransactions extends CI_Controller {

	public function index()
	{
		$this->load->view('banktransactions/import');
	}
}

/* End of file banktransactions.php */
/* Location: ./application/controllers/banktransactions.php */