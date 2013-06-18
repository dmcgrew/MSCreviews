<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review extends CI_Controller {


	
	function index(){
        $this->load->model('Review_model');
        
      	$data = array();
    
      	if($query = $this->Review_model->get_review()){
    	  	$data['records'] = $query;
      	}
      	
      	$this->load->view('review_list', $data);
    }
	
	
	function single_review(){
        $this->load->model('Review_model');
        
      	$data = array();
    
      	if($query = $this->Review_model->get_review()){
    	  	$data['records'] = $query;
      	}
      	
      	$this->load->view('review', $data);
    }
    
    
    function create(){
	  	$this->load->view('create_review');
    }
    
    
    function edit(){
	  $data = array(
	  	'title' => $this->input->post('title'),
	  	'content' => $this->input->post('content')
	  );
	  
	  //$this->load->model('Site_model');  //autoloaded
	  $this->Site_model->add_record($data);
	  $this->load->view('edit_review');
	  //print_r($data);
    }
    
 
	
	
}