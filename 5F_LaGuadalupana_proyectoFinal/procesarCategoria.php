<?php
    include 'conexion.php';

    $idCategoria=$_POST['idCategoria'];
    $nombre=$_POST['nombre'];

    $actualizar="UPDATE categoria SET nombre='$nombre' WHERE idCategoria='$idCategoria'";
    $resultado=mysqli_query($conexion,$actualizar);

    if($resultado){
        echo "<script>
            alert('Se han guardado los cambios correcramente');
            window.location='modificarCategoria.php';
            </script>";
    }else{
        echo "<script>
            alert('No se pudo actualizar los datos');
            window.location='modificarCategoria.php';
            </script>";
    }
?>