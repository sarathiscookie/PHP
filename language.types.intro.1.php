<?php
$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer
/* Get type of a variable */
echo gettype($a_bool).'<br />';
/* Check variable is integer */
if(is_int($an_int)){
    echo $an_int += 4 . '<br />';
}
/* Check variable is character */
if(is_string($a_str2)){
    echo $a_str2 . '<br />';
}

/* Set type to a variable */
//echo settype($a_str2, 'integer');
