<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 05-Sep-18
 * Time: 12:14 AM
 */
$a = 1;
function globals()
{
    global $a;
    echo $a;
}

// globals(); // Result: 1

function statics()
{
    static $int = 1 + 2;

    $int++;
    echo $int;
}

statics(); // Result: 4