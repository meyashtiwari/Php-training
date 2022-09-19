<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home</title>
        <style>
            * {
               margin: 0;
               padding: 0;
            }
            body {
               background: #ecf1f4;
            }
            h1 {
                text-align: center;
                border-bottom: 1px solid #fff;
                padding-bottom: .5rem;
                margin-bottom: .5rem;
            }
            div{
                list-style: none;
                border: 1px solid #000;
                border-radius: 6px;
                color: #fff;
                width: 400px;
                background: #3e3d3d;
                padding: 40px 20px;
                box-sizing: border-box;
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }
            div li{
                padding: 10px;
            }
        </style>
    </head>

    <body>
        <div>
            <h1>Welcome</h1>
            <li>
                <b>Name</b>: 
                <?php
                    session_start();
                    if(isset($_SESSION['name'])) 
                        echo $_SESSION['name'];
                    else 
                        header("location: signup.php");
                ?>
            </li>
            <li>
                <b>Username</b>: 
                <?php
                    echo $_SESSION['username'];
                ?>
            </li>
            <li>
                <b>Email</b>: 
                <?php
                    echo $_SESSION['email'];
                ?>
            </li>
            <li>
                <b>Password</b>: 
                <?php
                    echo $_SESSION['password'];
                ?>
            </li>
        </div>
    </body>

</html>