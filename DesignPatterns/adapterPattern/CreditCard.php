<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-01-30
 * Time: 22:59
 */

namespace Adapter;


class CreditCard {

    public $amount;

    public function payAmount($amount) {

        return 'Amount payed using Credit Card. Amount is '. $amount;
    }
}