<?php 

// <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crowd_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->model('Crowd_Model');
	}

	public function get_some()
	{
		$data['crowd'] = $this->Crowd_Model->get_all();
		echo "<pre>";
		var_dump($data);
		die();
		echo "</pre>";
	}

	public function get_case($id)
	{
		if ($id === NULL) {
			return false;
		} else {
			$case = array('details' => $this->Crowd_Model->get_one($id) , );
		}
		echo "<pre>";
		var_dump($case);
		die();
		echo "</pre>";
		
	}


}

/* End of file  */
/* Location: ./application/controllers/ */

 ?>