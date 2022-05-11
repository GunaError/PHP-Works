<?php
 include "db.php";
 
$un=$_POST['username'];
$e=$_POST['email'];
$pwd=$_POST['password'];

$sql="insert into loginform(email,username,password) values('$e','$un','$pwd')";

$result=mysqli_query($con,$sql);

if($result){
    header("location:index.php");
}
else{
    echo $sql;
}
?>
