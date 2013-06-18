<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review_model extends CI_Model {

	
	
	function get_review(){
	  $query = $this->db->get_where('reviews', array('user_id' => 12));
	  return $query->result();
    }
    
    function add_review($data){
	  $this->db->insert('reviews', $data);
	  return;
    }
    
    function update_review($data){
	  $this->db->where('id', 22);
	  $this->db->update('data', $data);
    }
    
    function delete_review(){
	  $this->db->where('id', $this->uri->segment(3));
	  $this->db->delete('data');
  }
	
}