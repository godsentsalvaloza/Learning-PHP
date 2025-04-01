<?php
    // session = SGB used to store information on user to be used across multiple pages.
    // ex. login credentials
    session_start();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>This is a login page</h2>
    <a href="./home.php">This goes to the homepage</a>
    <br>

    <form action="./index.php" method="post">
        <label for="">Username: </label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="">Password: </label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])) {
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $_SESSION["password"] = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            header("Location: home.php");
        }else {
            echo "ERROR: Empty username or password";
        }
    }
?>