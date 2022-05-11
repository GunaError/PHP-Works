<?php
    
    if(isset($_GET['somevalues'])){
        $username=$_GET['username'];
        $email=$_GET['email'];
        $password=$_GET['password'];

        $con=mysqli_connect('localhost','root','','userlogin');
        if(!$con){
            die("Connection Lost!".mysqli_connect_error());
        }
        $query="insert into loginform(username,email,password) values('$username','$email','$password')";
        $result=mysqli_query($con,$query);
        if($result){
            // echo "Successfully inserted . <a href='reg.php'>Go Back</a>";
            header('location:reg.php');
        }else{
            echo "error While insterting data";
        }
    
    }


   
?>