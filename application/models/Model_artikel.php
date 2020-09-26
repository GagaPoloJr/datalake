<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_artikel extends CI_Model{

	public $id_data;
	 // fungsi untuk menginput data ke database
	 function insert_data($data, $table)
	 {
		 $this->db->insert($table, $data);
		 return $this->db->insert_id();
	 }
 
	 // fungsi untuk mengedit data
	 function edit_data($where, $table)
	 {
		 return $this->db->get_where($table, $where);
	 }
	 // fungsi untuk mengupdate atau mengubah data di database
	 function update_data($where, $data, $table)
	 {
		 $this->db->where($where);
		 $this->db->update($table, $data);
	 }
	 // fungsi untuk menghapus data dari database
	 function delete_data($where, $table)
	 {
		 $this->db->delete($table, $where);
	 }
 
	 function delete_all($table)
	 {
		 $this->db->empty_table($table);
	 }
 
	 function cek_login($table, $where)
	 {
		 return $this->db->get_where($table, $where);
	 }
	 function insert_multiple($data, $table)
	 {
		 $this->db->insert_batch($table, $data);
	 }


	 
	
	function insert_post($title,$content){
		$this->id = $this->input->post('id');
		$id_kategori = $this->input->post('id_kategori');
		$this->id_data = uniqid();
		$this->thumbnail = $this->_uploadThumbnail();
		$slug_title = url_title($this->input->post('title'), 'dash', TRUE);
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			'title'    => $title,
			'id' => $this->id,
			'content' => $content,
			'date_created' => date('Y-m-d H:i:s'),
			'date_uploaded' => 'no',
			'slug_title'  => $slug_title,
			'kategori' => $id_kategori,
			'thumbnail' => $this->thumbnail,
			'date_updated' => date('Y-m-d H:i:s'),
			'user_id' => $this->session->userdata('id')
		);
		$this->db->insert('post',$data);
	}



	function edit_post($title,$content,$id){
		$this->db->where('id',$id);
		$id_kategori = $this->input->post('id_kategori');
		$this->id_data = $this->input->post('old_data');
		// $thumbnail = $_FILES["thumbnail"]["name"];
		if(!empty($_FILES["thumbnail"]["name"])){
			$this->thumbnail = $this->_uploadThumbnail();
		}else{
			$this->thumbnail = $this->input->post('old_data');
		};
		$slug_title = url_title($this->input->post('title'), 'dash', TRUE);
		date_default_timezone_set('Asia/Jakarta');
		// if()
		$data = array(
			'title'    => $title,
			'content' => $content,
			'kategori' => $id_kategori,
			'slug_title' => $slug_title,
			'thumbnail' => $this->thumbnail,
			'date_updated' => date('Y-m-d H:i:s'),
			'user_id' => $this->session->userdata('id')
		);
		$this->db->update('post',$data);
	}

	public function _uploadThumbnail()
    {
		$field_name 					= "thumbnail";
		$nmfile                 		 = $this->id_data;
        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'jpg|jpeg|png';
		$config['file_name']    	    = $nmfile;
		$config['overwrite'] 			= TRUE;
        // $config['encrypt_name']            = true;
        $config['max_size']             = 2048; // 1MB
		$this->upload->initialize($config);

		$this->load->library('upload', $config);
		

        if (!$this->upload->do_upload($field_name)) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('artikel', 'refresh');
        } else {
			$gbr = $this->upload->data();
			$result  = array('thumbnail' => $gbr);
			$dfile   = $result['thumbnail']['file_name'];
	
			$config['image_library'] = 'gd2';
			$config['source_image'] = './assets/images/' . $dfile;
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = TRUE;
			$config['quality'] = '60%';
			$config['width'] = 800;
			$config['height'] = 800;
			$config['new_image'] = './assets/images/' . $dfile;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			return $dfile;
        }
	}

	function get_article_by_id($id){
		$query = $this->db->get_where('post', array('id' =>  $id));
		return $query;
	}

	//ini untuk nampilin dihalaman depan
	function get_article() {
		$this->db->select('post.*, user.name');
		$this->db->from('post');
		$this->db->join('user', 'post.user_id = user.user_id', 'LEFT');
		$this->db->order_by('post.date_created', 'DESC');
		$this->db->where([
			'status' => 'yes'
		
		]);
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();
	}

	function get_kategori(){
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('kategori.kategori');
		$query = $this->db->get();
		return $query->result();
	}



	//ini untuk nampilin semua artikel pake pagination
	function getArticle($limit, $start){
		$this->db->select('post.*, user.name');
		$this->db->join('user', 'post.user_id = user.user_id', 'LEFT');
		$this->db->order_by('post.date_created', 'DESC');
		$this->db->where([
			'status' => 'yes'
		]);
		return $this->db->get('post', $limit, $start)->result();
	}


	function get_Article_kategori($id){
		$this->db->select('post.*, user.name, kategori.*');
		$this->db->join('user', 'post.user_id = user.user_id', 'LEFT');
		$this->db->join('kategori', 'post.kategori = kategori.id_kategori', 'LEFT');
		$this->db->order_by('post.date_created', 'DESC');
		$this->db->where([
			'post.kategori' => $id,
			'status' => 'yes'
		]);
		return $this->db->get('post')->result();
	}

	function get_Article_kategori2($id){
		$this->db->select('post.*, user.name, kategori.*');
		$this->db->join('user', 'post.user_id = user.user_id', 'LEFT');
		$this->db->join('kategori', 'post.kategori = kategori.id_kategori', 'LEFT');
		$this->db->order_by('post.date_created', 'DESC');
		$this->db->where([
			'post.kategori' => $id,
			'status' => 'yes'
		]);
		return $this->db->get('post', $id)->row_array();
	}
	
	//ini untuk nampilin terbaru banget
	function get_main_article() {
		$this->db->select('post.*, user.name');
		$this->db->from('post');
		// $this->db->join('post', 'publish.id_content = post.id ','LEFT');
		$this->db->join('user', 'post.user_id = user.user_id', 'LEFT');
		$this->db->order_by('post.date_created', 'DESC');
		$this->db->where([
			'status' => 'yes'
		]);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	//ini untuk admin nampilin semua artikel sesuai siapa yg bikin
	function get_all_post(){
		$id_session = $this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('user', 'post.user_id = user.user_id ');
		$this->db->join('kategori', 'post.kategori =id_kategori');
		// $this->db->where(['status' => 'yes']);
		$this->db->where(['post.user_id' => $id_session]);
		$this->db->order_by('post.id', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	//ini untuk admin nampilin artikel terakhir tergantung limit yang diinginkan
	function get_all_post_limit($limit){
		$id_session = $this->session->userdata('id');
		$this->db->select('post.*, user.name');
		$this->db->from('post');
		$this->db->join('user', 'post.user_id = user.user_id ');
		$this->db->where(['post.user_id' => $id_session]);
		$this->db->order_by('post.date_updated', 'desc');
		$this->db->limit($limit);
		$query = $this->db->get();
		return $query->result();
	}

	// ini nampilin artikel disebalah kanan pas lagi baca, nampilin 3/5
	function get_right_article() {
		$this->db->select('post.*, user.name');
		$this->db->from('post');
		// $this->db->join('post', 'publish.id_content = post.id ','LEFT');
		$this->db->join('user', 'post.user_id = user.user_id', 'LEFT');
		$this->db->order_by('post.date_created', 'DESC');
		$this->db->where([
			'status' => 'yes'
		]);
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result();
	}

	function delete_article($id){
		$this->db->where('id',$id);
		return $this->db->delete('post');
	}

	  // detail post
	  public function detail($slug_title)
	  {
		  $this->db->select('post.*,user.name');
		  $this->db->from('post');
		  // join
		// $this->db->join('publish', 'post.id = publish.id_content');
		  $this->db->join('user', 'post.user_id = user.user_id', 'LEFT');
		  // endjoin
		  $this->db->where([
			  'status' => 'yes',
			  'post.slug_title' => $slug_title
		  ]);
		  $this->db->order_by('id', 'DESC');
		  $query = $this->db->get();
		  return $query->row_array();
	  }

}