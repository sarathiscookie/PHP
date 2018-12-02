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
        return 'Welcome';
    }

}

trait secondMessage {

    public function message()
    {
        return 'Hello';
    }
}

class welcomeMsg {

    use firstMessage, secondMessage {
        firstMessage::message insteadof secondMessage;
    }

    public function symbol()
    {
        return ';';
    }
}

$obj = new welcomeMsg;

var_dump($obj->message().' '.$obj->symbol());


