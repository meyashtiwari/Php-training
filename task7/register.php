<?php 
    $f_name = $_POST["fName"];
    $m_name = $_POST["mName"];
    $l_name = $_POST["lName"];
    $aadhar_number = $_POST["aadharNumber"];
    $dob = $_POST["dob"];
    $country = $_POST["country"];

    $servername = "localhost";
    $username = "testuser";
    $password = "pheuture";
    $db_name = "pheuture";

    $conn = new mysqli($servername, $username, $password, $db_name);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $insert_query = "INSERT INTO profile(f_name, m_name, l_name, aadhar, dob, country) values('$f_name', '$m_name', '$l_name', $aadhar_number, '$dob', '$country')";

    if ($conn->query($insert_query) === TRUE) {
        echo("Succesful");
    } else {
        echo("Error: " . $insert_query . "<br>" . $conn->error);
    }
?>