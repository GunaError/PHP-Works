<?php  
   
    if(isset($_GET['somevalues'])){
        $id=$_GET['id'];
        $em=$_GET['email'];
        $pass=$_GET['password'];
        $uname=$_GET['username'];

        $con=mysqli_connect("localhost","root","","userlogin");
        if(!$con){
            die("Connection Lost!".mysqli_connect_error());
        }

        $query="update loginform SET password = '$pass' where id=$id";
        $result=mysqli_query($con,$query);
    
        if($result){
            header('location:fetch.php');
        }else{
            echo "Error occured while Updating!";
        }
    }


    





?>