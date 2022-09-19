<?php
    $associativeArray = array(
        "Yash" => "Php Developer",
        "Shashwat" => "Python Developer",
        "Pomit" => "Python Developer",
        "Shivam" => "Php Developer"
    );

    foreach($associativeArray as $Name => $Profile) {
        echo "The value $Profile of the array key is $Name <br />";
    }
?>