<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php"></form>

    <input type="hidden" name="id" value="<?php echo $data['id']?>"><br>
    <input type="text" name="Name" value="<?php echo $data['Name']?>"><br>
    <input type="text" name="Surname" value="<?php echo $data['Surname']?>"><br>
    <input type="email" name="email" value="<?php echo $data['email']?>"><br>
</body>
</html>