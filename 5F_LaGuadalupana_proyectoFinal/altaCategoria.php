<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alta Marca</title>
    </head>
    <body>
        <?php
            //Requiero la conexion.php
            include 'conexion.php';
            //Comenzar con la sesion
            session_start();

            //Resibo los valores
            $idCategoria=$_POST['idCategoria'];
            $nombre=$_POST['nombre'];

            //Consulta para insertar
            $insertar="INSERT INTO categoria(idCategoria,nombre)
            VALUES('$idCategoria','$nombre')";

            $verificar_id=mysqli_query($conexion, "SELECT * FROM categoria WHERE idCategoria='$idCategoria'");

            //Indicar la cantidad de nombres iguales
            if (mysqli_num_rows($verificar_id)>0) {
                echo("El ID ya esta registrado");
                //Para que se salga
                exit;
            }

            //Ejecutar la consulta
            $resultado=mysqli_query($conexion,$insertar);

            if (!$resultado) {
                echo("Error al registrarse");
            }else{
                echo("Categoria registrada");
            }

            //Cerrar conexion
            mysqli_close($conexion);
        ?>
    </body>
</html>