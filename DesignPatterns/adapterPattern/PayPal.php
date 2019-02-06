<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-01-30
 * Time: 20:27
 */

namespace Adapter;

class PayPal {

    public $amount;

    public function sendPayment($amount)
    {
        return 'Payed using PayPal and amount is '. $amount . '. ';
    }
}