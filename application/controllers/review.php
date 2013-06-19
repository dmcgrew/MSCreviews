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
	  	//$this->load->view('create_review');
	  	
	  	$this->load->helper(array('form', 'url'));
	  	$this->load->library('form_validation');
	  	
	  	$this->form_validation->set_rules('kpa1', 'KPA 1', 'trim|required');
	  	
	  	if ($this->form_validation->run() == FALSE){
			$this->load->view('create_review');
		
		} else {
			
			$data = array(
	  			'kpa1' => $this->input->post('kpa1'),
	  			'kpa1_rating' => $this->input->post('kpa1_rating')
	  		);
	  		
	  		$content = array(
	  			'alert_type' => 'alert-success',
	  			'message' => 'The review has been saved!'
	  		);
	  		$this->load->model('Review_model');
			$this->Review_model->add_review($data);
	  		$this->load->view('create_review', $content);
		}
	  	
	  	
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