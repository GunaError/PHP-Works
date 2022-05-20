<?php 
$dbname="pdo";
$name="root";
$host="localhost";
$pass="";
$str="mysql:host=$host;dbname=$dbname;";
try{
    $con=new PDO($str,$name,$pass);
    $name="HITLER";
    $gen="MALE";
    $id="4";
    $sql="update users set NAME=:NAME , GENDER=:GENDER where ID=:ID ";
    $res=$con->prepare($sql);
    $res->execute(["NAME"=>$name,"GENDER"=>$gen, "ID"=>$id]);
    echo "Record Updated!";

}
catch(PDOException $e){
    echo"Connection Error!". $e->getMessage();
}
?>