<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-01-30
 * Time: 23:03
 */

namespace Adapter;


class CreditCardAdapter implements Paymentinterface {

    private $creditcard;

    public function __construct()
    {
        $this->creditcard = new CreditCard();
    }

    public function pay($amount)
    {
        return $this->creditcard->payAmount($amount);
    }

}