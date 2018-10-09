<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 02-Aug-18
 * Time: 8:48 PM
 */
class visibility
{
    private $private     = 'Private';
    protected $protected = 'Protected';
    public $public       = 'Public';

    public function visibilityFunc()
    {
        echo $this->private;
        echo $this->protected;
        echo $this->public;
    }

}

//$obj = new visibility();
//echo $obj->private;   // Not visible
//echo $obj->protected; // Not visible
//echo $obj->public;    // Visible
//$obj->visibilityFunc(); // Visible - Values are "Protected", "Public and "Private"

class visibilityExtend extends visibility
{
    // We can redeclare public and protected but not private.
    public $public       = 'Public extend';
    public $protected    = 'Protected extend';

    public function visibilityFuncExtend()
    {
        echo $this->protected;
        echo $this->public;
    }
}

$objExtend = new visibilityExtend();
//echo $objExtend->public; // Visible - Value is Public extend
//echo $objExtend->protected; // Not Visible
//echo $objExtend->private; // Not Visible
//$objExtend->visibilityFuncExtend(); //Visible - Values are "Protected" and "Public extend"

/*Note: As of PHP 7.1.0, class constants may be defined as public, private, or protected. Constants declared without any explicit visibility keyword are defined as public.*/

class constantClass
{
    // Here we defined the constants
    public const myPublic = 'myPublic';
    protected const myProtected = 'myProtected';
    private const myPrivate = 'myPrivate';

    public function constFunction()
    {
        self::myPublic;
        self::myProtected;
        self::myPrivate;
    }
}

$obj = new constantClass();
//echo $obj::myPublic; // It works
//echo $obj::myProtected; // Fatal error
//echo $obj::myPrivate; // Fatal error
//$obj->constFunction();

class constClassExtend extends constantClass
{
    public function constExtendFunction()
    {
        self::myPublic;
        self::myProtected;
        //echo self::myPrivate;
    }
}

$objExtended = new constClassExtend();
//echo $objExtended::myPublic;
//$objExtended->constExtendFunction(); // myClass and myProtected works. myPrivate not works.
