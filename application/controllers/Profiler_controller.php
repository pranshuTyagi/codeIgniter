<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Profiler_controller extends CI_Controller {

    public function index()
    {
        $this->output->enable_profiler(TRUE);
        $this->load->view('test');
           
    }
    public function disable(){
        $this->output->enable_profiler(FALSE);
        $this->load->view('test');
        
    }

}

/* End of file Profiler_controller.php */




?>