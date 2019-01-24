<?php

$price = 5; // Global Variables

$tax = 1.25; // Global Variables

$func = function ($tax) use ($price) {
    return 'Result: '. $price * $tax;
};

echo $func($tax);