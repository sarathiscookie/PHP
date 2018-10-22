<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 15/10/18
 * Time: 8:44 PM
 */

abstract class mailer
{
    abstract public function sendEmail();

    public function credentials()
    {
      return 'Credentials';
    }
}

class admin extends mailer
{
    public function sendEmail()
    {
        return 'admin@gmail.com';
    }
}

class user extends mailer
{
    public function sendEmail()
    {
        return 'user@gmail.com';
    }
}

echo (new admin)->credentials();