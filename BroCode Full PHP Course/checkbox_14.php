<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Pizza</label>
        <input type="checkbox" name="pizza" value="Pizza" id="">
        <br>
        <label for="">Hamburger</label>
        <input type="checkbox" name="hamburger" value="Hamburger" id="">
        <br>
        <label for="">Hotdog</label>
        <input type="checkbox" name="hotdog" value="Hotdog" id="">
        <br>
        <label for="">Taco</label>
        <input type="checkbox" name="taco" value="Taco" id="">

        <br>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])) {
        if(isset($_POST["pizza"])){
            echo "You like Pizza! <br/>";
        }
        if(isset($_POST["hamburger"])){
            echo "You like Hamburger! <br/>";
        }
        if(isset($_POST["hotdog"])){
            echo "You like Hotdog! <br/>";
        }
        if(isset($_POST["taco"])){
            echo "You like Taco! <br/>";
        }
    }
?>