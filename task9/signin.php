<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/styles/styles.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <main>
        <div class="form-wrap">
            <form action="./logic/login_user.php" method="POST">
                <h1>Login</h1>
                <h5>New User? <a href="./signup.php">Sign up</a></h5>
                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" name="email" required/>
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input type="password" name="password" required/>
                </div>
                <div class="input">
                    <button type="submit" name="submit">Sign in</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>