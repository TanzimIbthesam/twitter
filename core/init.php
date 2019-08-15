<?php 
include 'database/connect.php';
include 'classes/user.php';
include 'classes/tweet.php';
include 'classes/follow.php';
global $pdo;
$getFromU=new User($pdo);
$getFromU=new Tweet($pdo);
$getFromU=new Follow($pdo);

define("BASE_URL","http://localhost/Php/projects/twitter");

?>