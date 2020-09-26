<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_artikel','model_artikel');
        $this->load->model('Model_admin','model_admin');
        $this->load->model('Model_aspirasi','model_aspirasi');
        $this->load->model('Model_kategori','model_kategori');
        $this->load->model('Model_buletin','model_buletin');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
    }


    public function index()
    {
        $data['post'] = $this->model_artikel->get_all_post_limit(10);
        $this->load->view('Admin/dashboard', $data);
    }
    public function upload()
    {
        $this->load->view('Admin/upload');
    }

    public function artikel(){
        
        $this->load->database();
        // $a['post'] = $this->db->query("SELECT * FROM publish JOIN post ON publish.id_content = post.id JOIN user ON post.user_id = user.user_id");
        // $this->load->view('Admin/artikel',$a);
        $data['post'] = $this->model_artikel->get_all_post();
        $this->load->view('Admin/artikel', $data);
    }

    public function akun(){
        $this->load->database();
        
        $data['user'] = $this->model_admin->get_all_user();
        $this->load->view('Admin/user', $data);

    }

    public function aspirasi(){
        $this->load->database();
        
        $data['aspirasi'] = $this->model_aspirasi->get_all_data();
        $this->load->view('Admin/aspirasi', $data);
    }
    

    public function kategori(){
        $this->load->database();
        $hitung = $this->db->from('kategori')->count_all_results();
        $data['kategori'] = $this->model_kategori->get_all_kategori();
        $this->load->view('Admin/kategori', $data);
    }

    public function buletin(){
        
        $this->load->database();
        $data['buletin'] = $this->model_buletin->get_all_post();
        $this->load->view('Admin/buletin', $data);
    }

 




}