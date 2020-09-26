<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi extends MY_Controller{

    function __construct(){
		parent::__construct();
        $this->load->model('Model_aspirasi','model_aspirasi');
    }
    
    function index(){
		
    }
    
    function delete_aspirasi($id){
        $this->model_aspirasi->delete_aspirasi($id);
		redirect('admin/aspirasi');
    }
    public function get_aspirasi($id){
        $data['aspirasi'] =$this->model_aspirasi->get_aspirasi($id);
        $this->load->view('Admin/lihat_aspirasi', $data);
    }
}