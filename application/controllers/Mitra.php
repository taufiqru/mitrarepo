<?php
defined('BASEPATH') or exit('no direct access allowed!');

class Mitra extends CI_Controller{
	function __construct(){
		parent::__construct();
	}	

	public function add(){
		$this->show('tambah_mitra.php');
	}

	public function table(){
		$crud = new Grocery_CRUD_Extended();
		$crud->unset_jquery();
		$crud->set_table('mitra');
		$crud->unset_add();
		$crud->unset_edit();
		$crud->unset_delete();
		$output = $crud->render();
		$this->show('tabel_mitra.php',$output);
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