<?php
 // arithmetic operators
 $x = 10;
 $y = 2;
 $z = null;

$z = $x + $y;
echo "{$z} </br>";
$z = $x - $y;
echo "{$z} </br>";
$z = $x * $y;
echo "{$z} </br>";
$z = $x / $y;
echo "{$z} </br>";
$z = $x ** $y;
echo "{$z} </br>";
$z = $x % $y;
echo "{$z} </br>";

// Increment and decrement counters
$counter = 0;
$counter = $counter + 1;
$counter++;
$counter--;
echo $counter;

// Operator presedence
$result = 1 + 2 - 3 * 4 / 5 ** 6;
echo $result;
?>

