<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
</head>
<body>
    
</body>
</html>
<?php
 // arrays
 $foods = array("apple", "coconut", "orange", "banana");

//  array_push($foods, "grapes", "strawberry");
//  array_pop($foods);
// array_unshift($foods, "grapes", "strawberry");
//  array_unshift($foods);
//  echo "{$foods[0]} <br>";
//  echo "{$foods[1]} <br>";
//  echo "{$foods[2]} <br>";
//  echo "{$foods[3]} <br>";

$foods = array_reverse($foods);

foreach($foods as $food) {
    echo "{$food} for sale <br>";
}
?>