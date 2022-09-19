<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/styles/styles.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <main>
        <div class="form-wrap">
            <form action="./logic/register_user.php" method="POST">
                <h1>Create Account</h1>
                <h5>Already have an account? <a href="./signin.php">Sign in</a></h5>
                <div class="input">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" required/>
                </div>
                <div class="input">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" required/>
                </div>
                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" name="email" required/>
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input type="password" name="password" required/>
                </div>
                <div class="input">
                    <button type="submit" name="submit">Sign up</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>