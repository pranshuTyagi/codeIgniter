<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Session_controller extends CI_Controller {

    public function index()
    {
        // Load the session library
        $this->load->library('session');
        // Adding data to the session
        $this->session->set_userdata('name','virat');
        $this->load->view('session_view');
    }
    public function unset_session_data(){
        //loading the session library
        $this->load->library('session');
        //remove session data
        $this->session->unset_userdata('name');
         $this->load->view('session_view');
            
    }
}

/* End of file Session_controller.php */


// To destroy the session we have a method called
// $this->session->sess_destroy();


?>