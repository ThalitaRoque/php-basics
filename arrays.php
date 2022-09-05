<?php

// Define a simple array composed of text strings

$arrayStrings = array("Monday","Tuesday","Wednesday");
print_r($arrayStrings);
echo"<br><br>";



// Define a simple array consisting of whole numbers and decimal numbers


$arrayNumbers = array(4,5,6,7,8);
print_r($arrayNumbers);
echo"<br><br>";
// Define a multidimensional array


$arrayMultidimensional = array(
    array("Banana",1),
    array("Apple",2),
    array("Pear",3),
    array("Mango",4)
);
print_r($arrayMultidimensional);
echo"<br><br>";

// Execute the function that allows to obtain the length of an array


// Execute the function that allows to obtain the combination of two arrays
print_r(array_merge($arrayStrings,$arrayNumbers));
echo"<br><br>";

// Execute the function that once is given an array return the last element of it
array_push($arrayStrings, "Thursday");

// Execute the function that once is given an array add a new element to the array in question
print_r($arrayStrings);