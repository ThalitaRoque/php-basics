<?php
// Create a simple condition that evaluates whether the current day is Monday. 
// Only in the case that the condition is met, it shows a message of “We are on Monday”.
$d = new DateTime();
if ($d->format("w") == 1) {
    echo "We are on Monday";
};

echo"<br><br>";

// Create a simple condition that evaluates whether the current month is October. If the condition is met,
//  it shows a message of the type "We are in October".
//  Otherwise, if this condition is not met, show the current month in words as it come from DateTime.

if ($d->format("m") == 10) {
    echo "We are on October";
} else {
    echo "{$d->format('F')}";
};

echo"<br><br>";

// Create a double condition that evaluates:
// If the current minute is less than 10. Displays a message of type "the current minute is less than 10", 
// if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". 
// If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”

if ($d->format("i") < 10) {

    echo "The current minute is less than 10";

} elseif ($d->format("i") > 15) {

    echo "The current minute is more than 15";

} else {

    echo "Does not meet any conditions";

};

echo"<br><br>";

// Create a switch type control structure to display a different message depending on the current day of the week.
//  You can write any type of message, because the important thing is that you understand 
//  how it works and in what cases you can use it.

switch ($d->format("w")) {
    case 1:
        echo "Today is Monday";
        break;
    case 2:
        echo "Today is Tuesday";
        break;
    case 3:
        echo "Today is Wednesday";
        break;
    case 4:
        echo "Today is Thursday";
        break;
    case 5:
        echo "Today is Friday";
        break;
    case 6:
        echo "Today is Saturday";
        break;
    case 7:
        echo "Today it is Sunday";
        break;
    default:
        echo "The week is over";
};