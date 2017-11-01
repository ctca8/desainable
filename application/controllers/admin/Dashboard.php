<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 		$this->load->library(array('pagination','user_agent','template'));
 
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{

		$this->template->admin('admin/v_dashboard');
	}

}
