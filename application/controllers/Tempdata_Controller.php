<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Tempdata_Controller extends CI_Controller {

    public function index()
    {
        $this->load->library('session');
        $this->load->view('tempdata_view');
        
    }
    public function add(){
        $this->load->library('session');
        $this->load->helper('url');
        
        $this->session->set_tempdata('item', 'item-value',5);
        //temp data will be removed after five seconds
        redirect('tempdata');        
        
    }

}

/* End of file Tempdata_Controller.php */


?>