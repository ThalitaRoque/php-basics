<?php
// Create a function that given two numbers returns the sum of both
function addNumbers ($num1, $num2) {  #Pinta abajo de todo 🢃 
    echo $num1+$num2;
}
addNumbers(1,2);
echo"<br><br>";

// Create a function that given two numbers returns the multiplication of both
function multiplyNumbers($num1, $num2){
    echo $num1*$num2;
}
multiplyNumbers(2,4);
echo"<br><br>";

// Create a function that given two numbers returns the division of both
function divideNumbers($num1, $num2){
    echo $num1/$num2;
}
divideNumbers(6,3);
echo"<br><br>";

// Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function operateNumbers($num1, $num2, $operator) {
    switch($operator){
        case "add":
            return addNumbers($num1,$num2);
        case "multiply":
            return multiplyNumbers($num1,$num2);
        case "divide":
            return divideNumbers($num1,$num2);
        default:
        return Null;
}
}
echo operateNumbers(6,3,"divide");

// Depending on the type of operation received by parameter, the function will execute the function responsible
// for performing the operation, since you have previously implemented the function for each operation separately.


?>