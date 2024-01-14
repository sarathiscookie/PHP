<?php
# Interface Segregation Principle
# Clients should not be forced to depend upon interfaces that they do not use.

/*interface Workable
{
    public function code();
    public function test();
    public function automationTest();
}
class Developer implements Workable
{
    public function code()
    {
        return 'coding';
    }
    public function test()
    {
        return 'testing in localhost';
    }
    public function automationTest()
    {
        return 'automation testing in localhost';
    }
}
class Tester implements Workable
{
    public function code()
    {
        // Tester is having to implement an unnecessary method
         throw new Exception('Opps! I can not code');
    }
    public function test()
    {
        return 'testing in test server';
    }
    public function automationTest()
    {
        return 'automation testing in localhost';
    }
}

class ProjectManagement
{
    public function processCode(Workable $member)
    {
        $member->code();
    }
}*/

# In the above example, we need to call an unnecessary method in the Tester class.
######### Solution ###########

interface ManageableInterface
{
    public function beManaged();
}

interface CodeableInterface
{
    public function code();
}

interface ManualTestableInterface
{
    public function manualTest();
}

interface AutoTestableInterface
{
    public function autoTest();
}

class Programmer implements CodeableInterface, ManualTestableInterface
{
    public function code()
    {
        return 'Coding';
    }

    public function manualTest()
    {
        return 'Manual Testing';
    }
}

class Tester implements ManualTestableInterface, AutoTestableInterface
{
    public function manualTest()
    {
        return 'Manual Testing';
    }

    public function autoTest()
    {
        return 'Automation Testing';
    }
}

class Manager implements ManageableInterface
{
    public function beManaged()
    {
        return 'Managing Team';
    }
}

class ProjectLead
{
    public function process(ManageableInterface $manager, CodeableInterface $coder)
    {
        return $manager->beManaged().' '.$coder->code();
    }
}

echo (new ProjectLead())->process(new Manager(), new Programmer());