<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon_controller extends CI_Controller {

    public function __construct(){
        parent:__construct();
    }

    public function get_coupons(){
        $this->load->model('Coupon_Model');
        $data['coup'] = $this->Coupon_Model->getCoupons();
        return json_encode($data);
    }
   public function apply_coupon(){
    // From the url route params,we get the id of the coupon from coupons/:coupon
    $id = intval($this->uri->segment(3));
    // if there is a valid id
    if($id != ''){
        //load the model
        $this->load->model('Coupon_Model');
        //get the specific coupon from the coupons table.
        $coupon = $this->Coupon_Model->getCoupon($id);

        $data['couponid'] = $coupon->couponid;
        $data['couponcode'] = $coupon->couponcode;
        $data['coupontype'] = $coupon->coupontype;
        $data['couponvalidity'] = $coupon->couponvalidity;

        $this->load->library('form_validation');
        $this->form_validation->set_rules('couponcode', 'trim|required|min_length[5]|max_length[20]');

        
        if ($this->form_validation->run() == TRUE) {
            if($data['couponcode'] == $this->input->post('couponcode')){
                $this->Coupon_Model->applyCoupon($data);
                return json_encode('Coupon has been applied');
            }else{
                return json_encode('Invalid coupon');
            }
        }
    }
    
}
}
/* End of file Coupon_controller.php */
// Couponid,Couponcode,couponctype,couponvalidity
?>