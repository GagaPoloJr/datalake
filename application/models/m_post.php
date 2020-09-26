<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_post extends CI_Model{

    // public $userid;

    function insert_post($title,$content){
        $data = array(
            'title'    => $title,
            'content' => $content,
			'user_id' => $this->session->userdata('id')
        );
        $this->db->insert('post',$data);
    }
 
    function get_article_by_id($id){
        $query = $this->db->get_where('post', array('id' =>  $id));
        return $query;
    }
}