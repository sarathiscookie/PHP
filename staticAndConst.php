<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 24/10/18
 * Time: 11:11 PM
 */
class staticAndConst
{
    public static $tax = 2;

    const tax = 5;
}

var_dump(staticAndConst::tax);

var_dump(staticAndConst::$tax = 2.5);

//Note: Static values may change but const values not possible to change