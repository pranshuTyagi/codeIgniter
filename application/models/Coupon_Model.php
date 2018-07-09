<?php
class Coupon_Model extends CI_Model 
{
	function saverecords($CouponCode,$CouponType,$CouponValidity)
	{
		$couponid = md5();
	$query="insert into CouponInfo values('$couponid','$CouponCode','$CouponType','$CouponValidity')";
	$this->db->query($query);
	}
}