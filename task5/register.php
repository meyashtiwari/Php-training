<?php 
    session_start();
    if(sizeof($_POST)){
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];
        $_SESSION["name"]=$_POST["name"];
        $_SESSION["email"]=$_POST["email"];
        header('location:home.php');
    }
    else{
        header('location:signup.php');
    }
?>