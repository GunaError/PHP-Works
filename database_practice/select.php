<?php
session_start();

include "db.php";

$e=$_POST['email'];
$pwd=$_POST['password'];
$sql="select * from loginform where email='$e' and password='$pwd'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
echo $count;
if($count>0){
    header("location:home.php");
    $_SESSION['username']=$e;
}
else{
    header("location:index.php");
}

?>

