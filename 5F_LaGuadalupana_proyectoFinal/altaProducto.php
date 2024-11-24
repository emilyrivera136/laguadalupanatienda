<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alta Producto</title>
    </head>
    <body>
        <?php
            //Requiero la conexion.php
            include 'conexion.php';
            //Comenzar con la sesion
            session_start();

            //Resibo los valores
            $idProducto=$_POST['idProducto'];
            $idCategoria=$_POST['idCategoria'];
            $idMarca=$_POST['idMarca'];
            $nombre=$_POST['nombre'];
            $precio=$_POST['precio'];
            $descripcion=$_POST['descripcion'];
            $novedad=$_POST['novedad'];
            $vendido=$_POST['vendido'];
            $imagen=$_POST['imagen'];

            //Consulta para insertar
            $insertar="INSERT INTO producto(idProducto,idCategoria,idMarca,nombre,precio,descripcion,novedad,vendido,imagen)
            VALUES('$idProducto','$idCategoria','$idMarca','$nombre','$precio','$descripcion','$novedad','$vendido','$imagen')";

            $verificar_id=mysqli_query($conexion, "SELECT * FROM producto WHERE idProducto='$idProducto'");

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
                echo("Producto registrado");
            }

            //Cerrar conexion
            mysqli_close($conexion);
        ?>
    </body>
</html>