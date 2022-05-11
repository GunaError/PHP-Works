<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="container2">
    <form action="insertin.php" method="get">
        <h4>Registration Form</h4>
        <label for="">Enter your username:</label><br>
        <input type="text" name="username"><br>
        <label for="">Enter your Email:</label><br>
        <input type="email" name="email"><br>
        <label for="">Enter your Password:</label><br>
        <input type="password" name="password"><br><br>
        <button name="somevalues">Submit</button><br>
        <p>For <a href="index.php">Log In</a></p>
        <a href="fetch.php">See Records</a>
        </form>
    </div>
</body>
</html>