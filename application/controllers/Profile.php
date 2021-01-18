<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index($id)
	{	$this->load->model('ModelMitra');

		$data = array();	

		$data['mitra'] = $this->ModelMitra->getMitra($id);

		$this->show('profile',$data);
	}

	public function show($page,$output=null){
		$this->load->view('base/header.php');
		$this->load->view('base/navbar.php');
		$this->load->view('base/sidebar.php');
		$this->load->view($page,$output);
		$this->load->view('base/control_sidebar.php');
		$this->load->view('base/footer.php');
	}
}
