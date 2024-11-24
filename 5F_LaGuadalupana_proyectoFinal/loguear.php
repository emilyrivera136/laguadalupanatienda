<!DOCTYPE html>
<html lang="en">
<   head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loguear</title>
    </head>
    <body>
        <?php
            //Requiero la conexion.php
            require 'conexion.php';
            //Comenzar con la sesion
            session_start();

            //Recibo los valores
            $usuario=$_POST['usuario'];
            $clave=$_POST['clave'];

            //Realizo una consulta
            //count=contar filas
            $query="SELECT Count(*) as contar from sesion where usuario='$usuario' and password='$clave'";
            //Ejecuto la consulta
            $consulta=mysqli_query($conexion,$query);
            //Guardo los datos en un arreglo
            $array=mysqli_fetch_array($consulta);

            if ($array['contar']>0){
                $_SESSION['username']=$usuario;
                header("location: menu.php");
            }else{
                echo("DATOS INCORRECTOS");
            }
        ?>
    </body>
</html>