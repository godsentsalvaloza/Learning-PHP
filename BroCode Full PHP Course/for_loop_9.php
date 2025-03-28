<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="iteration">Number of iteraions: </label>
        <input type="number" name="iteration" id="iteration">
        <input type="submit" value="calculate!">
    </form>
</body>
</html>
<?php

$counter = $_POST["iteration"];
for($count = 1; $count <= $counter; $count++){
    echo "<p>Count {$count}</p>";
}

// for($count = 0; $count < 5; $count++) {
//     echo "<p>Hello PHP!</p>";
// }
?>