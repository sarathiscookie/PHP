<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 22/11/18
 * Time: 9:33 PM
 */

trait one {
    public function smallTask()
    {
        return 'smallTaskOne';
    }

    public function largeTask()
    {
        return 'largeTaskOne';
    }
}

trait two {
    public function smallTask()
    {
        return 'smallTaskTwo';
    }

    public function largeTask()
    {
        return 'largeTaskTwo';
    }
}

class Tasks {

    use one, two {
        one :: smallTask insteadof two;
        two :: largeTask insteadof one;
    }
}

class anotherTask {
    use one, two {
        one :: largeTask insteadof two;
        two :: smallTask insteadof one;
    }
}

$tasks = new Tasks;

var_dump($tasks->smallTask());

var_dump($tasks->largeTask());

$anotherTasks = new anotherTask;

var_dump($anotherTasks->smallTask());

var_dump($anotherTasks->largeTask());
