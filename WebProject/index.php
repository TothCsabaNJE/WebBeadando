<DOCTYPE html>
<html lang="en">
    <header>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WebNev</title>
    </header>

    <body>
        <h1>WebNev Login Page</h1>
        <div>
            <form action="loginMethod.php" method="post">
                <p>Login or <a href="register.php">create an account</a><br>
                <br>Username:  <input type="text" name="username" required value="<?php if (isset($_COOKIE['username'])){ echo $_COOKIE['username'];}?>"><br><br>
                Password: <input type="password" name="password" required value="<?php if (isset($_COOKIE['password'])){ echo $_COOKIE['password'];}?>"><br><br>
                Remember Me&nbsp<input type="checkbox" id="remember_me" name="remember_me">&nbsp&nbsp
                <input type="submit" value="Sign in" name="login"></p>

            </form>
        </div>
    </body>

</html>