<?php 
             //fetch the data from Database


    $con=mysqli_connect('localhost','root','','userlogin');
    if(!$con){
        die("connection Unsuccessfully:".mysqli_connect_error());
    }
   $query="Select id,username,email,password From loginform";
   $result=mysqli_query($con,$query);
   $rows=mysqli_num_rows($result);
   if($rows>0){
       //only show the count of the row ;
            // echo $rows."records found";

       //To show the only one value of the table
            // $rows=mysqli_fetch_assoc($result);
            // print_r($result);

       //To show the all details in the table
            // while($row=mysqli_fetch_assoc($result)){
            //     echo"<pre>";
            //     print_r($row); 
            //     echo"<pre>";
            // }  
        //To show the porperty only, like id = 1;
                // while($rows=mysqli_fetch_assoc($result)){
                //     echo "<pre>";
                //     echo $rows['email'];
                //     echo "<pre>";
                // }

        //display all the rows of properties in the table form
                echo "<table>";
                echo "<tr>";
                echo"<td>action</td>";
                echo "<td>id</td>";
                echo "<td>username</td>";
                echo"<td>email</td>";
                echo "<td>password</td>";
                echo "</tr>";
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    echo"<tr>";
                    echo"<td><a href='delete.php?id=$id'>delete</a><a href='reg2.php?id=$id'>Update</a></td>";
                    echo"<td>".$row['id']."</td>";
                    echo"<td>".$row['username']."</td>";
                    echo"<td>".$row['email']."</td>";
                    echo"<td>".$row['password']."</td>";
                    echo "</tr>";
                    }
                    echo "<a href='reg.php'>Back to registration</a>";
                    echo "</table>";
                   
   }
   else{
    echo"Records not found";
   }
?>