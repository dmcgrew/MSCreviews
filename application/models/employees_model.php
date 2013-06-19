<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employees_model extends CI_Model {

	
	
	function get_employees(){
	  $query = $this->db->get('employees');
	  return $query->result();
    }


}