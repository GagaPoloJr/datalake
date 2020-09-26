<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_aspirasi extends CI_Model{

    function insert_aspirasi($name,$aspirasi){
    $data = array(
			'name'    => $name,
            'aspirasi' => $aspirasi,
		);
        $this->db->insert('aspirasi',$data);
    }

    function get_all_data(){
		$this->db->select('*');
		$this->db->from('aspirasi');
		$query = $this->db->get();
		return $query->result();
    }

    function get_aspirasi($id){
      $this->db->select('*');
      $this->db->from('aspirasi');
      $this->db->where([
        'id_aspirasi' => $id
      ]);
      $query = $this->db->get();
      return $query->result();
    }

    function delete_aspirasi($id){
		$this->db->where('id_aspirasi',$id);
		return $this->db->delete('aspirasi');
    }
    }