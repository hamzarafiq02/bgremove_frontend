<?php
require_once('./class/paypal.php');
require_once('./class/httprequest.php');

if(isset($_POST['submit_payment'])){
    $paypal = new PayPal();
    $paypalRet = ($paypal->doExpressCheckout($_POST['amount']));
}
?>

