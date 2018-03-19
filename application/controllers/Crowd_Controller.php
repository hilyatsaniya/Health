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
		// echo "<pre>";
		// var_dump($data);
		// die();
		// echo "</pre>";
		$this->load->view('Header');
		$this->load->view('Crowd', $data);
	}

	public function get_case($id)
	{
		if ($id === NULL) {
			return false;
		} else {
			$case = array('details' => $this->Crowd_Model->get_one($id) , );
		}
		// echo "<pre>";
		// var_dump($case);
		// die();
		// echo "</pre>";
		$this->load->view('Header');
		$this->load->view('Detail', $case);		
	}

	// public function insert_case()
	// {
	// 	$path = './images';
	// 	chmod($path, 0777);
	// 	$val_add = array(
	// 				 array(
	// 				 	'field' => 'Judul Bantuan' , 
	// 				 	'label' => 'Judul',
	// 				 	'rules' => 'required',
	// 				 	'errors' => array('required'=>'%s harus diisi'),
	// 				 ),
	// 				 array(
	// 				 	'field' => 'Target Donasi' , 
	// 				 	'label' => 'target',
	// 				 	'rules' => 'required',
	// 				 	'errors' => array('required'=>'%s harus diisi'),
	// 				 ),
	// 				 array(
	// 				 	'field' => 'Deadline Campaign' , 
	// 				 	'label' => 'deadline',
	// 				 	'rules' => 'required',
	// 				 	'errors' => array('required'=>'%s harus diisi'),
	// 				 ),
	// 				 array(
	// 				 	'field' => 'images' , 
	// 				 	'label' => 'images',
	// 				 	'rules' => 'required',
	// 				 	'errors' => array('required'=>'%s harus diisi'),
	// 				 ),
	// 				 array(
	// 				 	'field' => 'Deskripsi Singkat' , 
	// 				 	'label' => 'desc',
	// 				 	'rules' => 'required',
	// 				 	'errors' => array('required'=>'%s harus diisi'),
	// 				 ),
	// 			);
	// 	$config['upload_path']			=$path;
	// 	$config['allowed_types']		='jpg|png';
	// 	$config['max_size']             = 2048;
 //        $config['max_width']            = 0;
 //        $config['max_height']           = 0;

 //        $this->form_validation->set_rules($val_add);
 //        $this->load->library('upload',$config);

 //        if ($this->form_validation->run() == FALSE) {
	//         $this->load->view('header');
	//         $this->load->view('insertcrowd');
	//         // $this->load->view('footer');
	//     }else{
	//     	$this->upload->do_upload('images');
	//     	$data_upload = $this->upload->data();
	//     	// echo "<pre>";
	//     	// print_r($data_upload);
	//     	// echo "</pre>";
	//     	// die();
	//     	$image_path = '/img/'.$data_upload['file_name'];
	//     	//var_dump($image_path);
	//     	//die();
	//     	// $date = date_create($this->input->post('tanggal'));
	//     	// $date_formatted = date_format($date,"Y/m/d");
	//     	//var_dump($date_formatted);
	//     	//die();
	//         $data = array(
	//         	// 'id_user' => $this->session->userdata('id'),
 //                'judul' => $this->input->post('Judul Bantuan') ,
 //                'dana' => $this->input->post('Target Donasi'),
 //                'sem_desc' =>$this->input->post('desc'),           
 //                'link_reg' => $this->input->post('link'),
 //                'sem_cp' => $this->input->post('CP'),
 //                'sem_img' => $image_path,
 //                ); 
	//         var_dump($data);
	       

	//         //$img = array('upload_data' => $this->upload->data(), );
	//         $this->Crowd_Model->insert_case($data);

	//         // redirect('');
	//     }
	// }


}

/* End of file  */
/* Location: ./application/controllers/ */

 ?>