<?php
    $userName = "Sentry Malaguena";
    $fullName = array("Sentry", "M.", "Malaguena");
    $phone = "123-456-7890";
    // $userName = strtolower($userName);
    // $userName = strtoupper($userName);
    // $userName = trim($userName);
    // $userName = str_pad($userName, 20, "s");
    // $userName = str_replace("-", "[]", $phone);
    // $userName = strrev($userName);
    // $userName = str_shuffle($userName);
    // $equals = strcmp($username, "Sentry Malaguena");
    // $userName = strlen($phone);
    // $index = strpos($phone, "-");
    // $userName = substr($userName, 0, 6);

    $name = explode("-", $phone);
    foreach($name as $key => $value) {
        echo "{$key} {$value} <br>";
    }

    $full = implode(" ", $fullName);
    echo $full . "<br>"; 
    echo "{$userName} <br>";
    // echo $index;
?>