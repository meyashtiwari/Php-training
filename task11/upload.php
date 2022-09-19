<?php
    $target_dir = getcwd().DIRECTORY_SEPARATOR."uploads".DIRECTORY_SEPARATOR;
    $original_file_name = basename($_FILES["myfile"]["name"]);
    $canBeUploadedFlag = true;

    $fileExtension = strtolower(pathinfo($original_file_name,PATHINFO_EXTENSION));
    
    $user_email = $_POST['email'];
    $target_file_name = time() . '.' . $fileExtension;
    $save_location = $target_dir . $target_file_name;

    if ($_FILES["myfile"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $canBeUploadedFlag = false;
    }

    if($fileExtension != "xlsx" && $fileExtension != "docx" && $fileExtension != "doc" ) {
        echo "Only xlsx, docx & doc files are allowed.";
        $canBeUploadedFlag = false;
    }

    if ($canBeUploadedFlag == false) {
        echo " Sorry, your file was not uploaded.";
    } 
    else {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $save_location)) {
            require_once("./database/db_connection.php");
            $query = "INSERT INTO file_uploads(email, original_file_name, uploaded_file_name) 
                        values('$user_email', '$original_file_name', '$target_file_name')";

            if ($conn->query($query) === TRUE) {
                echo("Succesfull");
            } else {
                echo("Error: " . $query . "<br>" . $conn->error);
            }
        } 
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>