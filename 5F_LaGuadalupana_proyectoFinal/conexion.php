<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conexion</title>
    </head>
    <body>
        <?php
            $hostname="localhost";
            $username="root";
            $password="12345678";
            $bd="laguadalupana";
            $conexion=mysqli_connect($hostname,$username,$password,$bd);
        ?>
    </body>
</html>