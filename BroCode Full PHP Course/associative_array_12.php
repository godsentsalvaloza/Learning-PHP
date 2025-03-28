<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="country">Enter country:</label>
        <input type="text" name="country" id="country">
        <input type="submit" value="index">
    </form>
</body>
</html>


<?php
    $capitals = array("USA"=> "Washingon DC", "Japan"=> "Tokyo", "South Korea"=> "Seoul", "India"=> "New Delhi");
    $query = $_POST["country"];

    foreach($capitals as $key => $value) {
        if(strtolower($query) == strtolower($key)){
            echo "<p>The capital of {$key} is {$value}</p>";
        }
    }
    
    
    
    
    // associative array
    // $capitals = array("USA"=> "Washingon DC", "Japan"=> "Tokyo", "South Korea"=> "Seoul", "India"=> "New Delhi");
    // echo $capitals["USA"];


    // $capitals["USA"] = "Las Vegas";
    // $capitals["Germany"] = "Berlin";
    // array_pop($capitals);
    // array_shift($capitals);

    // $keys = array_keys($capitals);
    // $values = array_values($capitals);
    // $capitals = array_flip($capitals);
    // $capitals = array_reverse($capitals);
    // echo count($capitals);
    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }
?>