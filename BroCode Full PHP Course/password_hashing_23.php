<?php
    // Hashing - transforming sensitive data into mathematical process.

    $password = "Loveu1333";

    $hash = password_hash($password, PASSWORD_DEFAULT);
    // echo $hash;

    if(password_verify("Loveu1333", $hash)){
        echo "Access Granted!";
    }else {
        echo "Access Denied";
    }
?>