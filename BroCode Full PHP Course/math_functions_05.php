<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">
        <label for="radius">Radius: </label>
        <input type="text" name="radius" id="radius">
        <input type="submit" value="Calculate">
    </form>

    <!-- <form action="index.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x" id=""> <br>
        <label for="">y:</label>
        <input type="text" name="y" id=""> <br>
        <label for="">z:</label>
        <input type="text" name="z" id=""> <br>
        <input type="submit" value="total">
        
    </form> -->
</body>
</html>

<?php 
// Circle calculator

$radius = $_POST["radius"];
$area = null;
$circumference = null;
$diameter = null;

$area = round((pi() * pow($radius, 2)), 2); 
$circumference = round((pi() * (2 * $radius)),2);
$diameter = ($radius * 2);

echo "<p>Area: {$area}</p>";
echo "<p>Circumference: {$circumference}</p>";
echo "<p>Diameter: {$diameter}</p>";

// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// $total = null;

// Math Functions

// $total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = sqrt($x);
// $total = pow($x, $y);
// $total = min($x, $y, $z);
// $total = max($x, $y, $z);
// $total = pi();
// $total = rand(1, 6);

// echo $total;
?>