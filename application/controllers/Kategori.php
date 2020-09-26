<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MY_Controller{
	
	function __construct(){
		parent::__construct();
        $this->load->model('Model_artikel','model_artikel');
        $this->load->model('Model_admin','model_admin');
        $this->load->model('Model_kategori','model_kategori');
		$this->load->library('upload');
	}

	function index(){
		$this->load->view('Admin/tambahkategori');
	}

	function save(){
		$kategori = $this->input->post('kategori',TRUE);
        $this->model_kategori->insert_kategori($kategori);
        $this->session->set_flashdata('success', 'Kategori Berhasil Ditambah');
        redirect('admin/kategori');
	}

	function delete_kategori($id){
		$this->model_kategori->delete_kategori($id);
        $this->session->set_flashdata('danger', 'Kategori Berhasil dihapus');
		redirect('admin/kategori');
	}

	

	
}