<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "dbbusiness";
    $conn = "";
    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }catch(mysqli_sql_exception) {
        echo "could not connect";
    }

    if($conn){
        echo "Connection established";
    }else {
        echo "Connetion not established";
    }
?>