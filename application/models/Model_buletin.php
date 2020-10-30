<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buletin extends CI_Model{


	function get_buletin_by_id($id){
		$query = $this->db->get_where('buletin', array('id' =>  $id));
		return $query;
	}

	//ini untuk nampilin dihalaman depan
	function get_buletin() {
		$this->db->select('buletin.*, user.name');
		$this->db->from('buletin');
		$this->db->join('user', 'buletin.user_id = user.user_id', 'LEFT');
		$this->db->order_by('buletin.date_created', 'DESC');
		$this->db->where([
			'status' => 'yes'
		
		]);
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();
	}


	//ini untuk nampilin semua artikel pake pagination
	function getBuletin($limit, $start){
		$this->db->select('buletin.*, user.name');
		$this->db->join('user', 'buletin.user_id = user.user_id', 'LEFT');
		$this->db->order_by('buletin.date_created', 'DESC');
		$this->db->where([
			'status' => 'yes'
		]);
		return $this->db->get('buletin', $limit, $start)->result();
	}



	//ini untuk nampilin terbaru banget
	function get_main_buletin() {
		$this->db->select('buletin.*, user.name');
		$this->db->from('buletin');
		$this->db->join('user', 'buletin.user_id = user.user_id', 'LEFT');
		$this->db->order_by('buletin.date_created', 'DESC');
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
		$this->db->from('buletin');
		$this->db->join('user', 'buletin.user_id = user.user_id ');
		$this->db->where(['buletin.user_id' => $id_session]);
		$this->db->order_by('buletin.id', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	//ini untuk admin nampilin artikel terakhir tergantung limit yang diinginkan
	function get_all_post_limit($limit){
		$id_session = $this->session->userdata('id');
		$this->db->select('buletin.*, user.name');
		$this->db->from('buletin');
		$this->db->join('user', 'buletin.user_id = user.user_id ');
		$this->db->where(['buletin.user_id' => $id_session]);
		$this->db->order_by('buletin.date_updated', 'desc');
		$this->db->limit($limit);
		$query = $this->db->get();
		return $query->result();
	}

		// ini nampilin artikel disebalah kanan pas lagi baca, nampilin 3/5
		function get_right_buletin() {
			$this->db->select('buletin.*, user.name');
			$this->db->from('buletin');
			// $this->db->join('post', 'publish.id_content = post.id ','LEFT');
			$this->db->join('user', 'buletin.user_id = user.user_id', 'LEFT');
			$this->db->order_by('buletin.date_created', 'DESC');
			$this->db->where([
				'status' => 'yes'
			]);
			$this->db->limit(5);
			$query = $this->db->get();
			return $query->result();
		}

	  // detail post
	  public function detail($slug_title)
	  {
		  $this->db->select('buletin.*,user.name');
		  $this->db->from('buletin');
		  // join
		// $this->db->join('publish', 'post.id = publish.id_content');
		  $this->db->join('user', 'buletin.user_id = user.user_id', 'LEFT');
		  // endjoin
		  $this->db->where([
			  'status' => 'yes',
			  'buletin.slug_title' => $slug_title
		  ]);
		  $this->db->order_by('id', 'DESC');
		  $query = $this->db->get();
		  return $query->row_array();
	  }

}