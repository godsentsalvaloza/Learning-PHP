<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>">Username</label>
        <input type="text" name="username" id="">
        <br>
        <input type="submit" value="submit" name="submit">
        <br>
    </form>
</body>
</html>
<?php
    // SERVER - contains headers, paths, and script locations.
    // Shows everything you need to know about current web page environment
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "{$_POST["username"]}";
    }

    // foreach($_SERVER as $key => $value) {
    //     echo "{$key} = {$value} <br>";
    // }
?>