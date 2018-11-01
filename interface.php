<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 30/10/18
 * Time: 9:53 PM
 */

interface Logger
{
    public function execute($user);
}

class logsToDatabase implements Logger
{
    public function execute($user)
    {
        var_dump('This is a database log of user: '.$user);
    }
}

class logsToFile implements Logger
{
    public function execute($user)
    {
        var_dump('This is a file log of user: '.$user);
    }
}

class userControllerData
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'Jane Doe';
        $this->logger->execute($user);
    }
}

$userMsg = new userControllerData(new logsToDatabase);

$userMsg->show();