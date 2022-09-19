<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Signup Page</title>
        <style>
           * {
               margin: 0;
               padding: 0;
           }
           body {
               background: #ecf1f4;
           }
           .form-wrap {
               width: 320px;
               background: #3e3d3d;
               padding: 40px 20px;
               box-sizing: border-box;
               position: fixed;
               left: 50%;
               top: 50%;
               transform: translate(-50%, -50%);
           }
           h1 {
               text-align: center;
               color: #fff;
               font-weight: normal;
               margin-bottom: 25px;
           }
           input {
               width: 100%;
               background: none;
               border: 1px solid #fff;
               border-radius: 3px;
               padding: 6px 15px;
               box-sizing: border-box;
               margin-bottom: 20px;
               font-size: 16px;
               color: #fff;
           }
           #submit {
               background: #bac675;
               border: 0;
               cursor: pointer;
               color: #000;
           }
           #submit:hover {
               background: #a4b15c;
           }
        </style>
    </head>

    <body>
        <div class="form-wrap">
            <form action="register.php" method="POST">
                <h1>Sign Up</h1>
                <input id="name" type="text" name="name" placeholder="Name" required/>
                <input id="email" type="email" name="email" placeholder="Email" required/>
                <input id="username" type="text" name="username" placeholder="Username" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <input id="submit" type="submit" />
            </form>
        </div>
    </body>

</html>