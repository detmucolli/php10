<?php
$username = $_GET['username'];
$password = $_GET['password'];

echo $username;
echo "<br>";
echo $password;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="get">
    <label for="name">Username</label></br>
    <input type="text" id="username" name="username" placeholder="Username">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password">

    <input type="submit" value="Submit">
</form>
</body>
</html>