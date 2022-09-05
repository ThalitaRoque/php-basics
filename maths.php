<?php

// This file as its name properly indicates will be used for working with mathematical operators and the specific PHP 
// functions for:
// Define a variable whose value is the result of the function that returns an absolute value.
// Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
// Define a variable whose value is the result of the function that returns the highest value of a series of values ​
// ​that are received by parameter.
// Define a variable whose value is the result of the function that returns the lowest value of a series of values 
// ​​that are received by parameter.
// Define a variable whose value is the result of the function that returns a random number


$absolute = abs(-5);
echo $absolute;    // 5 (integer)
echo"<br><br>";

$rounded = ceil(2.5);
echo $rounded;
echo"<br><br>";

$highest = max(1,3,6,8,9);
echo $highest;
echo"<br><br>";

$lowest = min(2,4,5,7,8);
echo $lowest;
echo"<br><br>";

$random = rand();
echo $random;


?>