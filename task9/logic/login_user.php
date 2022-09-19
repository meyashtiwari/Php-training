<?php
    $user_email = $_POST["email"];
    $user_password = $_POST["password"];

    $server = "localhost";
    $user = "testuser";
    $password = "pheuture";
    $db = "pheuture";

    $connection = new mysqli($server, $user, $password, $db);

    if($connection->connect_error) {
        echo "Connection failed: " . $connection->connect_error;
    }

    $fetch_query = "SELECT * from user where email = '$user_email'";

    $result = $connection->query($fetch_query);

    if($result->num_rows > 0) {
        $fetched_user_record = $result->fetch_assoc();
        
        if($user_password === $fetched_user_record["password"]) {
            echo "Login succesfull";
        }
        else {
            echo "Password is incorrect";
        }
    }
    else {
        echo "No user found!";
    }
    $connection->close();
?>