<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model{

    function insert_kategori($kategori){
    $data = array(
			'kategori'    => $kategori,
		);
        $this->db->insert('kategori',$data);
    }

    function get_all_kategori(){
		$this->db->select('*');
		$this->db->from('kategori');
		$query = $this->db->get();
		return $query->result();
    }

    function delete_kategori($id){
		$this->db->where('id_kategori',$id);
		return $this->db->delete('kategori');
    }

    
}