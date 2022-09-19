<?php
    require __DIR__ . '/vendor/autoload.php';
    require_once("./database/connection.php");
    session_start();

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $db_connection = new connection($_ENV["DB_HOST"],
                        $_ENV["DB_USER"], 
                        $_ENV["DB_PASSWORD"], 
                        $_ENV["DB_NAME"]);

    if($db_connection->connect_db()) {
        echo "Connection Established";
        $_SESSION["db_connection"] = $db_connection;
        header("location: ./pages/home.php");
    } 
    else {
        echo "Connection Error";
    }
?>