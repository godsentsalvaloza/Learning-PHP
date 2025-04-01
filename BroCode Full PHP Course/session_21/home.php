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
    <title>Document</title>
</head>
<body>
    <h2>This is a homepage</h2>
    <a href="./index.php">This goes to the login page</a>
    <br>
    <form action="home.php" method="post">
        <input type="submit" value="Log out" name="log-out">
    </form>
</body>
</html>
<?php
    echo "HI, {$_SESSION["username"]}";
    
    if(isset($_POST["log-out"])){
        session_destroy();
        // $_SESSION["username"] = null;
        // $_SESSION["password"] = null;
        header("Location: index.php");
    }
?>