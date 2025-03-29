<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Visa</label>
        <input type="radio" value="visa" name="credits" id="">   
        <br>

        <label for="">Mastercard</label>
        <input type="radio" value="mastercard" name="credits" id="">   
        <br>

        <label for="">American Express</label>
        <input type="radio" value="american_express" name="credits" id="">   
        <br>
        
        <input type="submit" value="Confirm" name="confirm">
    </form>
</body>
</html>


<?php

if(isset($_POST["confirm"]))
{

    if(isset($_POST["credits"])) {
        $credit_card = $_POST["credits"];
        echo $credit_card;
    }else {
        echo "Please choose a card provider";
    }
}
?>