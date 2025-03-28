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

    $hours = 60;
    $rate = 15;
    $weeklyPay = null;

    if($hours <= 0) {
        $weeklyPay = 0;
    }
    elseif($hours <= 40) {
        $weeklyPay = $hours  * $rate;
    }else {
        $weeklyPay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }
    echo "You made \${$weeklyPay} this week";

    // $age = 100;
    // if($age >= 100) {
    // echo "You are too old to enter this site.";
    // }
    // if($age >= 18) {
    //     echo "You may enter this site";
    // }elseif ($age <= 0) {
    //     echo "This was not a valid age";
    // }else {
    //     echo "You must be 18 or above to enter";
    // }

    // $adult = true;
    // if($adult) {
    //     echo "<br> you may enter this site";
    // }else {
    //     echo "You must be an adult to enter";
    // }
?>