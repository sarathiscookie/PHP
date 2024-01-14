<?php 
# Dependency Inversion Principle
# DIP states that high-level modules should not depend on low-level modules; instead, they should both depend on abstractions. Additionally, abstractions should not depend on details; rather, details should depend on abstractions.

# Violation: the OrderController directly depends on a specific FileLogger class.
/*class FileLogger {
    public function log($message) {
        // Log message to a file
    }
}
class OrderController {
    private $logger;
    public function __construct() {
        $this->logger = new FileLogger(); // Dependency on FileLogger
    }
    public function performAction() {
        // Perform user-related action
        $this->logger->log('Action performed by OrderController');
    }
}*/

# Solution: Applying DIP by introducing an interface and dependency injection.
interface Logger
{
    public function log();
}

class FileLogger implements Logger
{
    public function log()
    {
        return 'I am storing logs to files';
    }
}

class DatabaseLogger implements Logger
{
    public function log()
    {
        return 'I am storing logs to database';
    }
}

class OrderController
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function performAction()
    {
        // Storing order details
        // ....
        // Storing to log.
        return $this->logger->log();
    }
}

$order = new OrderController(new FileLogger());
echo $order->performAction();
?>