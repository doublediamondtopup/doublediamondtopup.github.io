<?php
if(@$_POST['submit']){
  $amount=@$_REQUEST['amt'];
  $link="upi://pay?pa=merchant1062975.augp@aubank&pn=TOPUP&tn=OrderID:4562&am=".$amount."&cu=INR";
 header("Location: ".$link, true, 301);  
}else{
  header("Location: diamonds.php");
}
?>