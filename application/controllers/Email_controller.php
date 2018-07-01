<?php

class Email_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
    
    }
    public function index()
    {
        $this->load->helper('form');
        $this->load->view('email_form');
    }

    public function send_email(){
        $from_email = 'prince.cenation@gmail.com';
        $to_email = $this->input->post('email');
    
        //Load the email library
        $this->load->library('email');
        
        $this->email->from('prince.cenation@gmail.com', 'Prateek Madaan');
        $this->email->to('jatinarora1992@gmail.com');

        $this->email->subject('HELLO');
        $this->email->message('World');
        
        $this->email->send();
        
        echo $this->email->print_debugger();
        
        //Send Email
        if($this->email->send())
            $this->session->set_flashdata('email_sent', 'Email sent successfully');
        else
            $this->session->set_flashdata('email_sent', 'Error in sending the email');
            $this->load->view('email_form');
        
    }

}

/* End of file Email_controller.php */






?>