<?php
    class Coupon_Model extends CI_Model{

        public function getCoupon(){
            $query = $this->db->get('couponinfo');
            return $query->result();

        }
    }
?>
