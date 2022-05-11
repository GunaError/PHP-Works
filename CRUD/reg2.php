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
    <?php 
         $con=mysqli_connect("localhost","root","","userlogin");
         if(!$con){
             die("Connection Lost!".mysqli_connect_error());
         }
         $id=$_GET['id'];
         $query="select id,username,email,password from loginform where id=$id";
         $result=mysqli_query($con,$query);     
         $rows=mysqli_num_rows($result);
         if($rows>0){
            $row=mysqli_fetch_assoc($result);
            
         
    
    ?>
<div class="container2">
    <form action="update.php" method="get">
        <input type="hidden" name="id" value="<?=$id ?>">
        <h4>Update Form</h4>
        <label for="">Update your username:</label><br>
        <input type="text" name="username" value="<?=$row['username'] ?>"><br>
        <label for="">Update your Email:</label><br>
        <input type="email" name="email" value="<?=$row['email'] ?>"><br>
        <label for="">Update your Password:</label><br>
        <input type="password" name="password" value="<?=$row['password'] ?>"><br><br>
        <button name="somevalues" value="updating">Update</button><br>
        
        <a href="fetch.php">See Records</a>
        </form>
    </div>
</body>
<?php }
else{
    echo"Record not found!";
} ?>
</html>