<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class FlashData_Controller extends CI_Controller {

    public function index()
    {
        // Load the sesion library
        $this->load->library('session');
        
        //Redirect ot the home page
        $this->load->view('flashdata_home');
        
    }

    public function add(){
        //load sesion library
        $this->load->library('session');
        $this->load->helper('url');
        
        //set the flash data
        $this->session->set_flashdata('item','item-value');
        //redirect to the home page
        redirect('flashdata');
        

    }

}

/* End of file FlashData_Controller.php */

?>