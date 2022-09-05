<?php
// Print a text string
print "This is a text string";
echo"<br><br>";

// Print a text string that interpret variables
$var = "This is also a string";
print_r($var);
echo"<br><br>";

// Concatenate a previously declared variable in a text string

print $var." more text";
echo"<br><br>";

// Execute the function that allows you to replace text in a string (case sensitive)
print str_replace("string","different thing",$var);
echo"<br><br>";

// Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
print str_ireplace("this","That one",$var);
echo"<br><br>";

// Execute the function that allows you to write a text N times
print str_repeat("Repeat",4);
echo"<br><br>";

// Execute the function that allows to obtain the length of a text string
print strlen("Hello");
echo"<br><br>";

// Executes the function that allows to obtain the position of the first occurrence of a text within a text string
print strpos("New York", "York");
echo"<br><br>";

// Execute the function that allows a text string to be capitalized
print ucwords("what a time to be alive");
echo"<br><br>";

// Execute the function that allows you to transform a text string to lowercase
print strtolower("HELLO How ARE You?");
echo"<br><br>";

// Execute the function that allows to obtain a text substring from a given position
print substr("abcdefghijk",2,3);























?>