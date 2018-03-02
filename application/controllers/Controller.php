<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	
  
	public function Home()
	{
		$this->load->view('Header');
		$this->load->view('content');
	}

	public function Dana()
	{
		$this->load->view('Header');
		$this->load->view('Dana');
	}

	public function Crowd()
	{
		$this->load->view('Header');
		$this->load->view('Crowd');
	}
}

?>