<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_artikel');
        $this->load->helper('text');
    }
    public function index()
    {
        $this->load->database();
        $data['title'] = "Welcome to BEM UNDIP 2020";
        $data['terbaru'] = $this->db->query('select * from post where status="yes" order by date_updated desc limit 6')->result();
        // $data['post'] = $this->Model_artikel->get_article();
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



    public function maintanance()
    {
        $this->load->view("maintanance");
    }
    public function list_artikel()
    {
        $this->load->library('pagination');

        $data['utama'] = $this->Model_artikel->get_main_article();
        $data['title'] = "Kumpulan Artikel BEM UNDIP 2020";
        // $data['post'] = $this->Model_artikel->get_article();
        // $data['post'] = $this->db->query('select * from post where status="yes" order by id desc')->result();
        $this->db->from('post');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;
        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['post'] = $this->Model_artikel->getArticle($config['per_page'], $data['start']);
        $data['kategori'] = $this->Model_artikel->get_kategori();

        $this->load->view("Page/artikel", $data);
    }
    public function artikel_kategori($id)
    {
        $this->load->library('pagination');

        $data['utama'] = $this->Model_artikel->get_main_article();
        $data['title'] = "Kumpulan Artikel BEM UNDIP 2020";
        // $data['post'] = $this->Model_artikel->get_article();
        // $data['post'] = $this->db->query('select * from post where status="yes" order by id desc')->result();
        $this->db->from('post');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;
        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['post'] = $this->Model_artikel->get_Article_kategori($id);
        $data['post2'] = $this->Model_artikel->get_Article_kategori2($id);
        $data['kategori'] = $this->Model_artikel->get_kategori();


        $this->load->view("Page/artikel_kategori", $data);
    }

    public function detail_artikel($slug_title)
    {
        $this->load->model('Model_artikel', 'article');
        $data['post'] = $this->article->detail($slug_title);
        $data['right_post'] = $this->article->get_right_article();
        $this->load->view('Page/detail_artikel', $data);
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

    public function aspirasi()
    {
       
        $this->load->model('Model_aspirasi', 'model_aspirasi');
        $name = $this->input->post('name', TRUE);
        $aspirasi = $this->input->post('aspirasi', TRUE);
        $data = $this->model_aspirasi->insert_aspirasi($name, $aspirasi);
        echo json_encode($data);
        


    }
}
