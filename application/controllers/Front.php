<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model(array('Portfolio_model'));
 		$this->load->library(array('pagination'));
 		$this->load->library('user_agent');
 
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		// if ($this->agent->is_browser())
		// {
		//         $agent = $this->agent->browser().' '.$this->agent->version();
		// }
		// elseif ($this->agent->is_robot())
		// {
		//         $agent = $this->agent->robot();
		// }
		// elseif ($this->agent->is_mobile())
		// {
		//         $agent = $this->agent->mobile();
		// }
		// else
		// {
		//         $agent = 'Unidentified User Agent';
		// }

		// echo $agent;

		// echo $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)
		// echo "IP = " . $this->input->ip_address();


		// if ($this->agent->is_browser('Safari'))
		// {
		//         echo 'You are using Safari.';
		// }
		// elseif ($this->agent->is_browser())
		// {
		//         echo 'You are using a browser.';
		// }
		$portfolio_home = $this->Portfolio_model->get_portfolio_home();

		$data['portfolio_home'] = $portfolio_home;

		$this->load->view('frontend/v_home',$data);
	}

	public function all_free_template(){
		$this->load->view('v_all_free_template');
	}

	public function order($layanan)
	{
		if ($layanan=='slide') 
		{
			$this->load->view('v_order_slide_form');
		}
		elseif($layanan=='poster')
		{
			$this->load->view('v_order_form');
		}
		
	}

	public function about_us()
	{
		$this->load->view('frontend/v_about_us');
	}

	public function order_desain()
	{
		$this->load->view('frontend/v_order_desain');
	}

	public function portfolio()
	{
		$portfolio = $this->Portfolio_model->get_all();

		$data['portfolio'] = $portfolio;

		$this->load->view('frontend/v_portfolio',$data);
	}

}
