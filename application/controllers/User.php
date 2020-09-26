<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller{
	
	function __construct(){
		parent::__construct();
        $this->load->model('Model_artikel','model_artikel');
		$this->load->model('Model_admin','model_admin');
		$this->load->library('upload');
	}

	function index(){
		$this->load->view('Admin/tambahadmin');
	}

	function halaman_edit($id){
		$data['akun'] = $this->model_admin->get_akun_by_id($id)->result();
		$this->load->view('Admin/editadmin', $data);
	}

	function save(){
		$name = $this->input->post('name',TRUE);
        $user_name = $this->input->post('user_name',TRUE);
		$user_password = $this->input->post('user_password',TRUE);
        $this->model_admin->insert_akun($name,$user_name,$user_password);
        
        redirect('admin/akun');
	}

	
	function edit(){
		$id = $this->input->post('user_id',TRUE);
		$name = $this->input->post('name',TRUE);
        $user_name = $this->input->post('user_name',TRUE);
		$user_password = $this->input->post('user_password',TRUE);
        $this->model_admin->edit_akun($name,$user_name,$user_password,$id);
        
        redirect('admin/akun');
		
	}

	function delete_akun($id){
		$this->model_admin->delete_akun($id);
		redirect('admin/akun');
	}

	
}