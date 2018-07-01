<?php   
    // The Test class extends an in-built class called CI_Controller. This class must 
    // be extended whenever you want to make your own Controller class.
    
    // Name of the controller class must start with the uppercase character
    //The controller must be called with the lowercase letter

    //Method name and the classname should be different if they are the same
    //the method will override the class's functionality.

    class Test extends CI_Controller {
        // Codeigniter calls the index method from the uri
        public function index() {
            // echo "Hello World";
            // The view can be loaded with the following syntax
            $this->load->view('test');
        }
        //Codeigniter calls the hello method from the uri
        public function hello(){
            echo "This is Hello World";
        }
    }
    // Call the controller by the writing test in lowercase in the uri

    //http://localhost/codeigniter/index.php/test


?>