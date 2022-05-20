<?php 
$dbname="pdo";
$uname="root";
$pass="";
$host="localhost";
$str="mysql:host=$host;dbname=$dbname";
try{
    $con=new PDO($str,$uname,$pass);
    $name="VETRI";
    $gen="MALE";
    $city="SIVAGANGAI";
    $sql="insert into users(NAME,GENDER,CITY) VALUES(:NAME,:GENDER,:CITY)";
    $res=$con->prepare($sql);
    $res->execute(["NAME"=>$name,"GENDER"=>$gen,"CITY"=>$city]);
    echo "Data Saved";

}
catch(PDOException $e){
    echo "connection error".$e->getMessage();
}

?>