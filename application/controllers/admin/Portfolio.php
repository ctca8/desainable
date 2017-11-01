<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->Model(array('Service_category_model','Portfolio_model'));
 		$this->load->library(array('pagination','user_agent','template','upload'));
 
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		$service_category 	= $this->Service_category_model->get_all();
		$portfolio 			= $this->Portfolio_model->get_all();

		$data['service_category'] 	= $service_category;
		$data['portfolio'] 			= $portfolio;

		$this->template->admin('admin/v_portfolio_list',$data);
	}

	public function insert_portfolio_action()
	{
		$post=$this->input->post();

        $config['upload_path']='./uploads/images/portfolio/';
        $config['allowed_types']='jpg|png|gif|jpeg|pdf|ppt';
        $config['encrypt_name'] = TRUE;
        $config['maintain_ratio'] = FALSE;
        $config['width'] = 600;
        $config['height'] = 600;

        $this->upload->initialize($config);
        $this->upload->do_upload('file_portfolio');

        $portfolio   =$this->upload->data();

        if ($portfolio) {
            $data=array(
                'portfolio_name'     => $post['portfolio_name'],
    			'portfolio_slug'     => strtolower(str_replace(' ', '-', $post['portfolio_name'])),
                'id_service_category'  => $post['id_service_category'],
                'file_portfolio'       => $portfolio['file_name'],
                 );
            $this->Portfolio_model->insert($data);
            $this->session->set_flashdata('message_success', 'Berhasil menambah data portfolio !');
            redirect(base_url('admin/Portfolio'));
        }
	}

}
