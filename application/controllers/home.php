<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('javascript');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('member_model');
	}

	function index()
	{
		$data = $this->member_model->getAnggotaCount();
		$this->load->view('home_view', $data);
	}
	
}

?>
