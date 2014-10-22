<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Members extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('javascript');
		$this->load->library('table');
		
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('member_model');
	}

	function index()
	{
		

		$this->load->model('member_model');
		
		/* $data['result'] = $this->member_model->getAnggotaClub(2); */
		$data['result'] = $this->member_model->getAllAnggota();
		$this->load->view('member_view',$data);
			
			
	/* 	$this->load->model('club');
		$data['result'] = $this->club->getClubDaerahLimit(2,0,3);
		$this->load->view('club_view',$data); */


		/* $data = $this->member_model->general();
		 $data['page_title'] = "IMI Online Database";
		$data['library_src'] = $this->jquery->script();
		$data['script_head'] = $this->jquery->_compile();

		$this->load->view('member_input',$data);


		if($this->input->post('mysubmit')){
		$this->member_model->insertEntry();
		//redirect('\imi_home\view', 'refresh');
		} */

	}

	function view(){
		$this->load->model('member_model');
		/* $data['result'] = $this->member_model->getAnggotaClub(2);
		$this->load->view('member_view',$data); */
		
		
	}

}

?>
