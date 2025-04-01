<?php
// Cookie - Information about a user stored in a web browser

setcookie("fav_food", "pizza", time() + 86400, "/");
setcookie("fav_drink", "coffee", time() + (86400 * 4), "/");

// setcookie("fav_food", "pizza", time() - 0, "/");
// setcookie("fav_drink", "coffee", time() - 0, "/");

foreach($_COOKIE as $key => $value) {
    echo "Key: {$key} <br> Value:{$value} <br>";
}

if(isset($_COOKIE["fav_food"])) {
    echo "Buy some {$_COOKIE["fav_food"]}";
}else {
    echo "I don't know your favorite food";
}
?>