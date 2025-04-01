<?php
    include("./database.php");

    $sql = "SELECT * FROM users WHERE usernames ='Sentry'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<br>" .$row["id"] . "<br>";
        echo "<br>" .$row["usernames"] . "<br>";
        echo "<br>" .$row["passwords"] . "<br>";
    } else {
        echo "No user found";
    }

    // if multiple rows
    // if(mysqli_num_rows($result) > 0) {
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo "<br>" .$row["id"] . "<br>";
    //         echo "<br>" .$row["usernames"] . "<br>";
    //         echo "<br>" .$row["passwords"] . "<br>";
    //     }
       
    // } else {
    //     echo "No user found";
    // }
    mysqli_close($conn);

?>
