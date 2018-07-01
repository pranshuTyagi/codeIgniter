<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    public function index()
    {
        /* Load the form helper */  
        $this->load->helper(array('form'));
        /* Load the form validation library */ 
        $this->load->library('form_validation');
        // Set the validation rules for name field in the form
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[12]');
        
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('myform');
            
        } else {
            # code.
            $this->load->view('formsuccess');
            
        }
        
    }

}

/* End of file Form.php */




?>