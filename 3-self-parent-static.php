<?php

// self
class User
{
    public static $message = 'Welcome on board. ';

    public static function detail()
    {
        echo self::$message;
    }
}

User::detail();

// parent
class Season
{
    public static function summer()
    {
        echo 'Summer season';
    }
}

class Temperature extends Season
{
    public static function degree()
    {
        echo parent::summer() . " is hot. it reaches 40 degrees.";
    }
}

Temperature::degree();

// static:
class Fruits
{
    public static $message = "Welcome to market ";

    public static function seedless()
    {
        echo Self::$message . 'Seedless fruits are not available now.';
    }
}

echo Fruits::$message; // Accessing static property.

Fruits::seedless(); // Calling static method.
?>
