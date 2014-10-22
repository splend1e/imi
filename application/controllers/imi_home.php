<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI

class Imi_home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->library('javascript');
	}

	function index(){
		$data = $this->member_model->general();
		$data['page_title'] = "IMI Online Database!";
		$data['library_src'] = $this->jquery->script();
		$data['script_head'] = $this->jquery->_compile();
		
		$this->load->view('member_input',$data);
		
		if($this->input->post('mysubmit')){
			$this->member_model->insertEntry();
			redirect('\members\view', 'refresh');
		}
		
		/* $this->load->model('member_model');
		$data['result'] = $this->member_model->getAnggotaClub(2);
		$this->load->view('member_view',$data); */
	}

	function view(){
		 $this->load->model('member_model');
		 $data['result'] = $this->member_model->getAnggotaClub(2);
	     $this->load->view('member_view',$data); 
	}

}

?>
