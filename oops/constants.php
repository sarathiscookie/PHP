<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 05-Sep-18
 * Time: 11:05 PM
 */

class constClass
{
    CONST name = 'My Name';

    public function constFunction()
    {
      echo self::name;
    }
}
// Two method to call constant

//Method-1
//echo constClass::name;

//Method-2
//$obj = new constClass();
//$obj->constFunction();
