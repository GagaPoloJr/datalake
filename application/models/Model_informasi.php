<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_informasi extends CI_Model{



	//ini untuk nampilin semua artikel pake pagination
	function getInformasi($limit, $start){
		$this->db->select('informasi.*, user.name');
		$this->db->join('user', 'informasi.user_id = user.user_id', 'LEFT');
		$this->db->order_by('informasi.date_created', 'DESC');
		return $this->db->get('informasi', $limit, $start)->result();
	}

	//ini untuk nampilin terbaru banget
	function get_main_informasi($number) {
		$this->db->select('informasi.*, user.name');
		$this->db->from('informasi');
		$this->db->join('user', 'informasi.user_id = user.user_id', 'LEFT');
		$this->db->order_by('informasi.date_created', 'DESC');
		$this->db->limit($number);
		$query = $this->db->get();
		return $query->result();
	}

	
		// ini nampilin artikel disebalah kanan pas lagi baca, nampilin 3/5
		function get_right_informasi() {
			$this->db->select('informasi.*, user.name');
			$this->db->from('informasi');
			// $this->db->join('post', 'publish.id_content = post.id ','LEFT');
			$this->db->join('user', 'informasi.user_id = user.user_id', 'LEFT');
			$this->db->order_by('informasi.date_created', 'DESC');
			$this->db->limit(3);
			$query = $this->db->get();
			return $query->result();
		}

	function delete_buletin($id){
		$this->db->where('id',$id);
		return $this->db->delete('buletin');
	}

	  // detail post
	  public function detail_info($slug_title)
	  {
		  $this->db->select('informasi.*,user.name');
		  $this->db->from('informasi');
		  // join
		// $this->db->join('publish', 'post.id = publish.id_content');
		  $this->db->join('user', 'informasi.user_id = user.user_id', 'LEFT');
		  // endjoin
		  $this->db->where([
			  'informasi.slug_title' => $slug_title
		  ]);
		  $this->db->order_by('id', 'DESC');
		  $query = $this->db->get();
		  return $query->row_array();
	  }

}