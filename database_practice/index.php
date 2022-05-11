<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="select.php" method="post">
        <h4>Login Form</h4>
        <label for="">Enter your Email:</label><br>
        <input type="email" name="email"><br>
        <label for="">Enter your Password:</label><br>
        <input type="password" name="password"><br>
        <button>Login</button>
        <p>For <a href="register.php">Registration</a></p>
        </form>
    </div>
</body>
</html>