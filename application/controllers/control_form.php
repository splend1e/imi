<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Control_forms extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('jquery');
	}

	function index()
	{
		$this->load->view('view_form_all');
	}

	function view(){

	}

	function add_all(){

		#Validate entry form information
		$this->load->model('Model_form','', TRUE);
		$this->form_validation->set_rules('f_state', 'State', 'required');
		$this->form_validation->set_rules('f_city', 'City', 'required');
		$this->form_validation->set_rules('f_membername', 'Member Name', 'required');

		$data['city'] = $this->Model_form->get_state(); //gets the available groups for the dropdown

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('view_form_all', $data);
		}
		else
		{
			#Add Member to Database
			$this->Model_form->add_all();
			$this->load->view('view_form_success');
		}
	}
	
	function get_cities($state){
		$this->load->model('Model_form','', TRUE);
		header('Content-Type: application/x-json; charset=utf-8');
		echo(json_encode($this->Model_form->get_cities_by_state($state)));
	}

}

?>