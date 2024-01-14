<?php

final class FinalClass
{
    public function userDetails()
    {
        echo "Data";
    }
}

// This would throw an error: "Class ChildClass may not inherit from final class (FinalClass)"
class ChildClass extends FinalClass
{
    //
}
?>