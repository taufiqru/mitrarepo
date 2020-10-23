<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->show('tabel_mitra');
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
