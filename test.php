<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 10/11/18
 * Time: 4:12 PM
 */

trait firstMessage {

    public function message()
    {
        return 'Hello';
    }

}

trait secondMessage {

    public function messages()
    {
        return 'World';
    }
}

class welcomeMsg {

    use firstMessage, secondMessage;

    public function symbol()
    {
        return ';';
    }
}

$obj = new welcomeMsg;

var_dump($obj->message().' '.$obj->messages().' '.$obj->symbol());


