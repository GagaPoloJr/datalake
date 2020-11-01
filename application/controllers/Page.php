<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_buletin');
        $this->load->model('Model_informasi');

        $this->load->helper('text');
		$this->load->helper('kebutuhan_helper');

    }
    public function index()
    {
        $this->load->database();
        $data['title'] = "Welcome to DATALAKE BEM UNDIP 2020";
        $data['terbaru'] = $this->db->query('select * from buletin where status="yes" order by date_updated desc limit 6')->result();
        // $data['post'] = $this->Model_artikel->get_article();
        $data['counting'] = $this->db->query('select * from database_bem')->row_array();
        $data['count_buletin'] = $this->db->query("select count(*) as total_b from buletin where status='yes'")->row_array();
        $data['count_informasi'] = $this->db->query('select count(*) as total_in from informasi')->row_array();
        $data['informasi'] = $this->Model_informasi->get_main_informasi(6);


        $this->load->view("Landingpage/bem", $data);
    }

    public function tentang()
    {
        $data['title'] = "Tentang BEM UNDIP 2020";
        $this->load->view("Landingpage/tentang", $data);
    }
    public function bem_fakultas()
    {
        $data['title'] = "BEM Fakultas UNDIP";
        $this->load->view("Landingpage/bem_fakultas", $data);
    }
    public function informasi()
    {
        $this->load->library('pagination');

        $data['informasi'] = $this->Model_informasi->get_main_informasi(1);
        $data['title'] = "Kumpulan Informasi BEM UNDIP 2020";
        $this->db->from('informasi');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;
        // initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['informasi_post'] = $this->Model_informasi->getInformasi($config['per_page'], $data['start']);
        $this->load->view("Page/informasi", $data);

    }
    public function detail_info($slug_title)
    {
        $this->load->model('Model_informasi', 'informasi');
        $data['post'] = $this->informasi->detail_info($slug_title);
        $data['right_post'] = $this->informasi->get_right_informasi();
        $this->load->view('Page/detail_informasi', $data);
    }

    public function maintanance()
    {
        $this->load->view("maintanance");
    }
    public function list_buletin()
    {
        $this->load->library('pagination_buletin');

        $data['utama'] = $this->Model_buletin->get_main_buletin();
        $data['title'] = "Kumpulan Artikel BEM UNDIP 2020";
        // $data['post'] = $this->Model_artikel->get_article();
        // $data['post'] = $this->db->query('select * from post where status="yes" order by id desc')->result();
        $this->db->from('buletin');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;
        // initialize
        $this->pagination_buletin->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['post'] = $this->Model_buletin->getBuletin($config['per_page'], $data['start']);

        $this->load->view("Page/buletin", $data);
    }
   
    public function detail_buletin($slug_title)
    {
        $this->load->model('Model_buletin', 'buletin');
        $data['post'] = $this->buletin->detail($slug_title);
        $data['right_post'] = $this->buletin->get_right_buletin();
        $this->load->view('Page/detail_buletin', $data);
    }
    public function database()
    {
        $data['title'] = "Database BEM UNDIP 2020";
        $data['counting'] = $this->db->query('select * from database_bem')->row_array();
        $this->load->view('Page/database', $data);
    }

    public function proker()
    {
        $data['title'] = "Proker BEM UNDIP 2020";
        $this->load->view('Landingpage/proker', $data);
    }

    public function struktur()
    {
        $data['title'] = "Profile BEM UNDIP 2020";
        
        $this->load->view('Landingpage/struktur', $data);
    }

   
}
