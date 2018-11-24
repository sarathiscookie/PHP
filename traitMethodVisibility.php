<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 22/11/18
 * Time: 9:57 PM
 */

trait messageOne
{
    public function hello()
    {
        return 'hello';
    }
}

trait messageTwo
{
    public function world()
    {
        return 'world';
    }
}

class welcomeMessage
{
    /*use messageOne {
        hello as protected;
    }*/

    use messageOne, messageTwo;

    public function exclamation()
    {
        return '!';
    }
}

$message = new welcomeMessage;

var_dump($message->hello().' '.$message->world().' '.$message->exclamation()); // here result is error because we changed the access specifier of trait messageOne.