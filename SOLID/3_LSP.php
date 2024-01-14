<?php
# Liskov Substitution Principle.
# The LSP states that objects of a superclass should be replaceable with objects of its subclasses without affecting the correctness of the program.

/*class Duck
{
    public function fly()
    {
        return 'I can fly';
    }

    public function swim()
    {
        return 'I can swim';
    }

    public function sound()
    {
        return 'I can make sound';
    }
}

class ToyDuck extends Duck
{
    public function fly()
    {
        return 'I can fly';
    }

    public function swim()
    {
        return 'I can swim';
    }

    public function sound()
    {
        return 'I can make sound';
    }
}*/

# In ToyDuck class violates the LSP. Cause in the ToyDuck class has an fly method. But naturally, a toy duck does not fly.
######### Solution ###########

interface FlyInterface
{
    public function fly();
}

interface SwimInterface
{
    public function swim();
}

interface SoundInterface
{
    public function sound();
}

class ToyDuck implements SwimInterface, SoundInterface
{
    public function swim()
    {
        return 'I can swim';
    }

    public function sound()
    {
        return 'I can make sound';
    }
}

class BirdDuck implements SwimInterface, SoundInterface, FlyInterface
{
    public function fly()
    {
        return 'I can fly';
    }

    public function swim()
    {
        return 'I can swim';
    }

    public function sound()
    {
        return 'I can make sound';
    }
}

//echo (new ToyDuck)->swim();

echo (new BirdDuck)->fly();