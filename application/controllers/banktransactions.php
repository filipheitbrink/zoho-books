<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banktransactions extends CI_Controller {

	public function index()
	{
        $this->import_form();
	}

    public function import_form()
    {
        $tmpl['bankaccounts']  = $this->zohobooks->getBankaccounts('Status.Active');
        $this->load->view('banktransactions/import', $tmpl);
    }
}

/* End of file banktransactions.php */
/* Location: ./application/controllers/banktransactions.php */