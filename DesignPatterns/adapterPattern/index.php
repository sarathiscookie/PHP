<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-01-30
 * Time: 20:30
 */
require '../../vendor/autoload.php';

/*use Adapter\Paypal;

$obj = new Paypal;

echo $obj->sendPayment(12);*/
// If we send amount from other modules, we need to call this method "sendPayment()" again and again.  This method is not good.

// Reason is: If Paypal changed method name. eg: sendPayment() to sendFinalAmount(). It affects all the modules. So for avoiding this issue, we can use Adapter Pattern.

// Inside Adapter Pattern we can call this method and classes connect with this adapter. So If Paypal changed method name, we only change method name in our adapter. It won't affect all modules related to send amount.

use Adapter\PayPalAdapter;

use Adapter\CreditCard;

$payPalAdapter = new PayPalAdapter();

echo $payPalAdapter->pay(1200);

$creditCardAdapter = new CreditCard();

echo $creditCardAdapter->payAmount(105);


