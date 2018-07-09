<?php
class Coupon_CI extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	
	//load Model
	$this->load->model('Coupon_Model');
	}

	public function savedata()
	{
		//load registration view form
		$this->load->view('Coupondetails');
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('CouponCode');
		$e=$this->input->post('CouponType');
		$m=$this->input->post('CouponValidity');
		
//call saverecords method of Hello_Model and pass variables as parameter
		$this->Coupon_Model->saverecords($n,$e,$m);		
		echo "Records Saved Successfully";
		}
	}
}
?>