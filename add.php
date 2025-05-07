<?php


    include_once('config.php');


    if(isset($_POST['submit']))
    {


        $username = $_POST['username'];
        $password = $_POST['password'];




            $sql = "INSERT INTO register(username,password) VALUES (:username, :password)";


            $insertSql = $conn->prepare($sql);


            $insertSql->bindParam(':username', $username);
            $insertSql->bindParam(':password', $password);


            $insertSql->execute();


            echo "The user has been added successfully";



    }



?>