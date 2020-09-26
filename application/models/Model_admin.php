<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model{
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
     
     function get_all_user(){
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
    }
    
    function insert_akun($name,$user_name,$user_password){
		$data = array(
			'name'    => $name,
			'user_password' => $user_password,
            'user_name' => $user_name,
            'user_level' => "2"
		);
		$this->db->insert('user',$data);
    }

    function get_akun_by_id($id){
		$query = $this->db->get_where('user', array('user_id' =>  $id));
		return $query;
    }
    
    function edit_akun($name,$user_name,$user_password,$id){
		$this->db->where('user_id',$id);
		$data = array(
			'name'    => $name,
			'user_password' => $user_password,
            'user_name' => $user_name,
            'user_level' => "2"
		);
		$this->db->update('user',$data);
	}
    

    function delete_akun($id){
		$this->db->where('user_id',$id);
		return $this->db->delete('user');
    }
    

}