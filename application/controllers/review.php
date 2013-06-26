<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review extends CI_Controller {


	
	function your_reviews(){
	    $this->load->helper(array('date'));
	    
        $this->load->model('Review_model');
        
      	$data = array();
    
      	if($query = $this->Review_model->list_reviews()){
    	  	$data['records'] = $query;
      	}
      	
      	$this->load->view('review_list', $data);
    
    }
	
	
	function view(){
        $this->load->model('Review_model');
        
      	$data = array();
    
      	if($query = $this->Review_model->get_review()){
    	  	$data['records'] = $query;
      	}
      	
      	$this->load->view('single_review', $data);
    }
    

    
    function create(){
        $groups = array('admin', 'reviewer');
        if (!$this->ion_auth->in_group($groups)) {
            $this->session->set_flashdata('message', 'You do not have permission to create reviews.');
			redirect('welcome/index');
        } else {
	  
	  	
    	  	$this->load->helper(array('form', 'url', 'date'));
    	  	$this->load->library('form_validation');
    	  	
    	  	$content = array();
          
          	$content['users'] = $this->ion_auth->users(2)->result();
          	
    	  	//form validation rules
    	  	$this->form_validation->set_rules('employee', 'Employee', 'trim|required');
    	  	
    	  	$this->form_validation->set_rules('kpa1', 'KPA 1', 'trim|required');
    	  	$this->form_validation->set_rules('kpa1_rating', 'KPA 1 Rating', 'trim|required|greater_than[0]');
    	  	
    	  	$this->form_validation->set_rules('kpa2', 'KPA 2', 'trim|required');
    	  	$this->form_validation->set_rules('kpa2_rating', 'KPA 2 Rating', 'trim|required|greater_than[0]');
    	  	
    	  	//run validation
    	  	if ($this->form_validation->run() == FALSE){
    			$this->load->view('create_review', $content); //reload if validation fails
    		
    		} else { //do this if validation passes..
    			//get values from form and save in $data array
    			$data = array(
    	  			'employee_id' => $this->input->post('employee'),
    	  			'kpa1' => $this->input->post('kpa1'),
    	  			'kpa1_rating' => $this->input->post('kpa1_rating'),
    	  			'kpa2' => $this->input->post('kpa2'),
    	  			'kpa2_rating' => $this->input->post('kpa2_rating'),
    	  			'date_updated' => date('Y-m-d H:i:s'),
    	  			'date_created' => date('Y-m-d H:i:s'),
    	  			'published' => $this->input->post('draft_pub')
    	  		);
    	  		
    	  		if($this->input->post('draft_pub') == 1) {
    	  		   $data['date_published'] = date('Y-m-d H:i:s');
    	  		} else {
        	  	   $data['date_published'] = 0;
    	  		}
    	  		
    	  		//set messages
    	  		$content['alert_type'] = 'alert-success';
                $content['message'] = 'The review has been saved!';
    	
    	  		$this->load->model('Review_model'); //load review model
    			$this->Review_model->add_review($data); //pass $data array to review model
    	  		$this->load->view('create_review', $content); //load create review view and pass $content array to it
    		}
    		
    		
	  	
	  	}//end ion auth else statement
	  	
    } // end create()
    
    
    
    
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