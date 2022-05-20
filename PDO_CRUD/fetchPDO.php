<?php
$host="localhost";
$uname="root";
$pass="";
$dbname="pdo";
$str="mysql:host=$host;dbname=$dbname";
try{
    $con=new PDO($str,$uname,$pass);
    $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    $sql="select * from users where GENDER=?";
    // $city="KARAIKUDI";
    $gender="FEMALE";
    // $name="NAVEEN";
    $res=$con->prepare($sql);
    $res->execute([$gender]);
    $user=$res->fetchall();
    foreach($user as $row){
        echo $row->NAME."---".$row->GENDER."---".$row->CITY."<br>";
    }
    // while($row=$res->fetch()){
    //     echo $row->NAME."---".$row->CITY."<br>";
    // }
}
catch(PDOException $e){
    echo "connection error". $e->getMessage();
}


?>