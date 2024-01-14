<?php

class ParentClass
{
    public final function overridden()
    {
        echo 'Parent class';
    }
}

class ChildClass extends ParentClass
{
    public function overridden()
    {
        // This would throw an error: "Cannot override final method ParentClass::overridden()"
    }
}
?>