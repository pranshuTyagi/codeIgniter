<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Redirect_controller extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');

        redirect('https://www.google.com');
        
    }
    public function computer_graphics(){
        $this->load->helper('url');
        redirect('https://www.computergraphics.com');
    }

}

/* End of file Redirect_controller.php */




?>