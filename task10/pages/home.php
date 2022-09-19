<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="../assets/styles/styles.css" rel="stylesheet">
    <title>Home Page</title>
</head>
<body>
    <?php 
        // require_once("../database/connection.php");
        session_start();
        include("../components/header.php");
        
        if($_SESSION["db_connection"]) {
            // $db_connection = $_SESSION["db_connection"];
            include("../components/data_table.php");
        }
        else {
            header("location: ../index.php");
        }
        include("../components/footer.php"); 
    ?>
</body>
</html>