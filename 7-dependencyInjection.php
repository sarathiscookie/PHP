<?php
include_once './TestClass.php';
// Construct dependency
class ConstructDependency
{
    private $dependency;

    public function __construct(TestClass $testClass)
    {
        $this->dependency = $testClass;
    }

    public function message()
    {
        return $this->dependency->method();
    }
}

$constructInjectionDependency = new ConstructDependency(new TestClass);
echo $constructInjectionDependency->message();

// Setter injection
class SetDependency
{
    private $dependency;

    public function setDependency(TestClass $testClass)
    {
        $this->dependency = $testClass;
    }

    public function message()
    {
        return $this->dependency->method();
    }
}

$setterInjectionDependency = new SetDependency;
$setterInjectionDependency->setDependency(new TestClass);
echo $setterInjectionDependency->message();

// Method injection
class MethodDependency
{
    public function methodDependency(TestClass $testClass)
    {
        return $testClass->method();
    }
}

$methodInjectionDependency = new MethodDependency;
echo $methodInjectionDependency->methodDependency(new TestClass)
?>