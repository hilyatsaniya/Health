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

	public function Crowd()
	{
		$this->load->view('Header');
		$this->load->view('Crowd');
	}

	public function Tips()
	{
		$this->load->view('Header');
		$this->load->view('Tips');
	}
	public function Diagnosa()
	{
		$this->load->view('Header');
		$this->load->view('Diagnosa');
	}
	public function Detail()
	{
		$this->load->view('Header');
		$this->load->view('Detail');
	}
<<<<<<< HEAD
	public function insertcrowd()
	{
		$this->load->view('Header');
		$this->load->view('insertcrowd');
	}
||||||| merged common ancestors
=======

	public function Dana()
	{
		$this->load->view('Header');
		$this->load->view('Dana');
	}
>>>>>>> f764bc3312cd76e165a3162646bd9b7745a2201b
}

?>