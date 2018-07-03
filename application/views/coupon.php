<?php
echo "records from database </br>";
foreach($coup as $rec){
    echo $rec->CouponId." ".$rec->CouponCode."</br>";
}
?>