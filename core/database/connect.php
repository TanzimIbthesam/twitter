<?php 
$dsn="mysql:host=localhost;dbname=tweety";
$user="root";
$pass="";
try{
    $pdo=new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connection established successfully";

}catch (PDOException $e){
    die("Connection error").$e->getMessage();
}



?>