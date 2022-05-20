<?php
$name="root";
$host="localhost";
$pass="";
$dbname="pdo";
$str="mysql:host=$host;dbname=$dbname;";
try{
    $con=new PDO($str,$name,$pass);
    $sql="delete from users where ID=:ID";
    $res=$con->prepare($sql);
    $id="4";
    $res->execute(["ID"=>$id]);
    echo"record deleted!";

}
catch(PDOException $e){
 echo"Connection Error".$e->getMessage();
}



?>