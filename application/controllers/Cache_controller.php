
<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Cache_controller extends CI_Controller {

    public function index()
    {
        //enable cache
        $this->ouput->cache(1);
        $this->load->view('test');
    }

    public function delete_file_cache(){
        $this->output->delete_cache('cachecontroller');
    }

}

/* End of file Cache_controller.php */

?>