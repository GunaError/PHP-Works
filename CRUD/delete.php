<?php 
$con=mysqli_connect("localhost","root","","userlogin");
if(!$con){
    die("Connection lost!".mysqli_connect_error());
}
$id=$_GET['id'];
$query="delete from loginform where id=$id";
$result=mysqli_query($con,$query);
if($result){
    echo"successfully deleted!";
}else{
    echo"error!";
}

?>