<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
	}

	public function index()
	{
		$this->load->view('insert');
	}

	public function show()
	{
		$query['station'] = $this->Menu->Allbus();
		$this->load->view('show',$query);
	}

	public function insert()
	{
			$data = array(
				't_id' => $this->input->post("t_id"),
				't_name' => $this->input->post("t_name"),
				't_out' => $this->input->post("t_out"),
				'h_to'=> $this->input->post("h_to"),
				'h_out'=> $this->input->post("h_out"),
				'f_name'=> $this->input->post("f_name"),
				'f_out'=> $this->input->post("f_out"),
				'type'=> $this->input->post("type")
		
			);
				
				$this->Menu->station($data);
			    redirect('welcome/show');
					
	}

		
}
