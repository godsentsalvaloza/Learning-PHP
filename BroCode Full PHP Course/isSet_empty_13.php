<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="username" id="name">

        <br>

        <label for="password">Password: </label>
        <input type="password" name="password" id="password">

        <br>

        <input type="submit" value="Log In" name="login">

    </form>
</body>
</html>


<?php
// isset() returns TRUE if variable is decleared and not NULL
// empty() return TRUE if the variable is not decleard, false, NULL



if(isset($_POST["login"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $userName = $_POST["username"];
        $password = $_POST["password"];
        echo "Welcome, {$userName}";
    }else {
        echo "Please enter values in username and password";
    }
}

// $userName = "Sentry";

// // $result = isset($userName) ? $result = $userName : $result = "Undefined Username";
// // echo $result;

// $result = empty($userName) ? $result = "Empty" : $result = $userName;
// echo $result;
?>