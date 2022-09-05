<?php
#Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
$d =  new DateTime();
echo $d->format("Y-m-d");

echo"<br><br>";

#Get the current date in any format

$date = new DateTime("NOW");
echo $date->format("Y-m-d");

echo"<br><br>";

#Get the current day

echo $date->format("d");
echo"<br><br>";

#Get the current month in numerical format (1-12)

echo $date->format("m");
echo"<br><br>";

#Get the current minute with leading zeros (00 - 59)

echo $date->format("i");
echo"<br><br>";


?>