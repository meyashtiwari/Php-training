<?php
    $user_name = $_POST["first_name"]." ".$_POST["last_name"];
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
        echo "This email is already registered!";
    }
    else {
        $insert_query = "INSERT INTO user values('$user_name', '$user_email', '$user_password')";

        if ($connection->query($insert_query) === TRUE) {
            header("location:signin.php");
        } else {
            echo("Error: ". $connection->error);
        }
    }
    $connection->close();
?>