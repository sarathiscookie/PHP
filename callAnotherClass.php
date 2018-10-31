<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 30/10/18
 * Time: 8:19 PM
 */
class logToDatabase
{
    public function execute($message)
    {
        var_dump('This is a database log of user: '.$message);
    }
}

class logToFile
{
    public function execute($message)
    {
        var_dump('This is a file log of user: '.$message);
    }
}

class userController
{
    protected $logger;

    public function __construct(logToFile $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'Jane Doe';
        $this->logger->execute($user);
    }
}

$message = new userController(new logToFile());

$message->show();