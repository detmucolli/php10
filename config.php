<?php
session_start();

$localhost = "localhost";
$user = "root";
$pass = "";
$dbname = "db1";



try{
    $conn = new PDO("mysql:host=$localhost; dbname=$dbname", $user, $pass);
}catch(Exception $e){
    echo "error";
}



?>