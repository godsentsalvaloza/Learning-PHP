<?php
    include("./database.php");


    $username = "Raige";
    $password = "Raige450";
    $hash = password_hash($username, PASSWORD_DEFAULT); 

    $sql = "INSERT INTO users (usernames, passwords)
            VALUES('$username', '$hash')";

    try{
        mysqli_query($conn, $sql);
        echo "query successful";
    }catch(mysqli_sql_exception){
        echo  "<br> ERROR: unknown problem";
    }
    
    // mysqli_close($conn);
?>
