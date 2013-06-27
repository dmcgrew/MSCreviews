<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Star extends CI_Controller {

    function index(){
        if(!$this->ion_auth->logged_in()){redirect('login');}
        
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->library('form_validation');
        
        
        $content = array();
        
        $content['users'] = $this->ion_auth->users(2)->result();
        
        
        
        $this->form_validation->set_rules('employee', 'Employee', 'trim|required');
        $this->form_validation->set_rules('star', 'Star Content', 'trim|required');
        $this->form_validation->set_message('required', 'This field is required.');
        $this->form_validation->set_error_delimiters('<span class="label label-important"><i class="icon-exclamation-sign icon-white"></i> ', '</span>');
        
        if ($this->form_validation->run() == FALSE){
    			$this->load->view('add_star', $content); //reload if validation fails
    		
    		} else { 
    		
    		    $data = array(
    	  			'user_id' => $this->input->post('employee'),
    	  			'star_content' => $this->input->post('star')
    	  		);
                
            
    		
    		    //submit form stuff
    		    $this->load->model('Star_model');
    		    $this->Star_model->add_star($data); //pass $data array to add star nodel
    	  		//$this->load->view('add_star', $content); //load add star view and pass $data array to it
    	  		
    	  		//send an email
    	  		if($this->input->post('email') == 'email') {
        	  		$this->load->library('email');
                    $this->email->set_newline("\r\n");
                    
                    $from_user = $this->ion_auth->user()->row();
                    $to_user = $this->ion_auth->user($this->input->post('employee'))->row(); //need to grab user ID from the form here
            
                    $this->email->from($from_user->email, $from_user->first_name . ' ' . $from_user->last_name);
                    //$this->email->from('dmcgrew@marketspaceagency.com', 'Dustin McGrew');
                    $this->email->to($to_user->email);
                    
                    $this->email->subject('Congrats! You have received a star!');
                    $this->email->message('You have received a STAR from '.$from_user->first_name . ' ' . $from_user->last_name . $this->input->post('star'));	
                    
                    if($this->email->send()){
            				$this->load->view('add_star_success', $content);
                        } else {
                            show_error($this->email->print_debugger());
                    }
    	  		}
    	  		
    		}
        
        
    }
    

    

}