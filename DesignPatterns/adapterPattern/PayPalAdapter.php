<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-01-30
 * Time: 22:00
 */

namespace Adapter;


class PayPalAdapter implements Paymentinterface {

    private $paypal;

    public function __construct()
    {
        $this->paypal = new PayPal();
    }

    public function pay($amount)
    {
        return $this->paypal->sendPayment($amount);
    }

}