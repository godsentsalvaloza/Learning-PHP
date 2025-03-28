
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">
        <label for="quantity">quantity: </label>
        <input type="number" name="quantity" id="quantity">
        <input type="submit" value="total">

    </form>

    <!-- GET -->
    <!-- <form action="index.php" method="get">
        <label for="uername">username: </label><br>
        <input type="text" name="username" id="username"> <br>

        <label for="password">password: </label><br>
        <input type="password" name="password" id="password"> <br>
        <input type="submit" value="Log in">
    </form> -->

    <!-- POST -->
    <!-- <form action="index.php" method="post">
        <label for="uername">username: </label><br>
        <input type="text" name="username" id="username"> <br>

        <label for="password">password: </label><br>
        <input type="password" name="password" id="password"> <br>
        <input type="submit" value="Log in">
    </form> -->
</body>
</html>
<?php
    // echo "{$_GET["username"]} <br>";
    // echo $_GET["password"];

    // echo "{$_POST["username"]} <br>";
    // echo $_POST["password"];

    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $price * $quantity;
    echo "you have ordered {$quantity} x {$item}s <br>";
    echo "total: \${$total}";

?>