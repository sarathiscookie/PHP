<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2018-12-03
 * Time: 22:05
 */

function gen()
{
    yield 1;
    yield 2;
    yield 3;
    yield 4;

    yield from gen2();
}

function gen2()
{
    yield 5;
    yield 6;
    yield 7;
    yield 8;
}

foreach(gen() as $val)
{
    echo $val, PHP_EOL;
}