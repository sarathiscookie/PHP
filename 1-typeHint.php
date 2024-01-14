<?php

// Example 1
class User
{
    public $message = "Hello User";
}

function welcomeUser(User $user)
{
    echo $user->message . "\n";
}

welcomeUser(new User);

function calculate(int $number)
{
    echo $number * 2 . "\n";
}

calculate(3);
?>