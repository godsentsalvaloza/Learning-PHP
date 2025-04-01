<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sanitize Data</h2>
    <form action="index.php" method="post">
        <label for="">Uername</label>
        <input type="text" name="username" id="">
        <br>
        <label for="">Password</label>
        <input type="text" name="password" id="">
        <br>
        <input type="submit" value="submit" name="submit">
        <br>
    </form>

<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])) {
            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

            echo "<p>Username: {$username} <br> Password: {$password}</p>";
        } else {
            echo "<p>ERROR: Missing username of password</p>";
        }
    }
?>
</body>
</html>