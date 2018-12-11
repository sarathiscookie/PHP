<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2018-12-03
 * Time: 21:18
 */
// Example one

class logData {

    public $msg = 'I am not an anonymous class';

    public function log($msg)
    {
        var_dump($msg);
    }

}

$logData = new logData;

$logData->log(
    new class {

        public $msg = 'I am an anonymous class';

        public function log($msg)
        {
            var_dump($msg);
        }
    }
);

// Example two

class userData {

    public $txt = 'Test Data';

    public function data($txt)
    {
        var_dump($txt);
    }
}

$user = new userData;

$user->data( new class{

    public $txt = 'Anonymous test data';

    public function data($txt)
    {
        var_dump($txt);
    }

});