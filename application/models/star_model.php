<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Star_model extends CI_Model {

    function add_star($data){
        $this->db->insert('stars', $data);
        return;
    }

}