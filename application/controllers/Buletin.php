<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buletin extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Model_buletin','model_buletin');
		$this->load->library('upload');
	}

	function index(){
		$this->load->view('Admin/tambahbuletin');
	}

	function halaman_edit($id){
		$data['buletin'] = $this->model_buletin->get_buletin_by_id($id)->result();

		$this->load->view('Admin/editbuletin', $data);
	}

	function save(){
		$title = $this->input->post('title',TRUE);
		$content = $this->input->post('content',TRUE);
		$this->model_buletin->insert_buletin($title,$content);
		$id = $this->db->insert_id();
		$result = $this->model_buletin->get_buletin_by_id($id)->row_array();
		$data['title'] = $result['title'];
		$data['content'] = $result['content'];
        $this->session->set_flashdata('success', 'Buletin Berhasil Ditambah');
		redirect(base_url() . 'Admin/buletin');

	}

	function konfirmasi_buletin($id){
		date_default_timezone_set('Asia/Jakarta');
		$data['coba'] = $this->db->query("select * from buletin where id ='$id'")->result();

        $data = array(
			'status' => 'yes',
			'date_uploaded' => date('Y-m-d H:i:s')
        );
        $where = array(
            'id' => $id
        );
        $this->model_buletin->update_data($where, $data, 'buletin');
        $this->session->set_flashdata('info', 'Buletin Berhasil Dipublish');
        redirect(base_url() . 'Admin/buletin');

	}

	function hide_buletin($id){
		$data['post'] = $this->db->query("select * from buletin where id ='$id'")->result();
		$data = array(
			'status' => 'no'
		);
		$where = array(
			'id' => $id
		);
		$this->model_buletin->update_data($where, $data, 'buletin');
		$this->session->set_flashdata('warning', 'Buletin Berhasil Disembunyikan');
        redirect(base_url() . 'Admin/buletin');
		

	}

	function edit(){
		$id = $this->input->post('id',TRUE);
		$title = $this->input->post('title',TRUE);
		$content = $this->input->post('content',TRUE);
		$this->model_buletin->edit_buletin($title,$content,$id);
		$result = $this->model_buletin->get_buletin_by_id($id)->row_array();
		$data['title'] = $result['title'];
		$data['content'] = $result['content'];
        $this->session->set_flashdata('info', 'Buletin Berhasil Diubah');
		redirect(base_url() . 'Admin/buletin');

	}

	//Upload image summernote
	function upload_image(){
		if(isset($_FILES["image"]["name"])){
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image')){
				$this->upload->display_errors();
				return FALSE;
			}else{
				$data = $this->upload->data();
		        //Compress Image
		        $config['image_library']='gd2';
		        $config['source_image']='./assets/images/'.$data['file_name'];
		        $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= TRUE;
	            $config['quality']= '60%';
	            $config['width']= 800;
	            $config['height']= 800;
	            $config['new_image']= './assets/images/'.$data['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
				echo base_url().'assets/images/'.$data['file_name'];
			}
		}
	}


	//Delete image summernote
	function delete_image(){
		$src = $this->input->post('src');
		$file_name = str_replace(base_url(), '', $src);
		if(unlink($file_name)){
	        echo 'File Delete Successfully';
	    }
	}

	function delete_buletin($id){
		$this->model_buletin->delete_buletin($id);
        $this->session->set_flashdata('danger', 'Buletin Berhasil Dihapus');
		redirect('admin/buletin');
	}

	
}