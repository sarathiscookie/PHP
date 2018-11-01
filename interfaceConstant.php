<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 01/11/18
 * Time: 9:38 PM
 */

interface interfaceConstant
{
    const number = 5;
}

// Cannot inherit previous-inherited or override constant from inheritance
/*
class changeConst implements interfaceConstant
{
    const number = 6;
}
*/

var_dump(interfaceConstant::number);