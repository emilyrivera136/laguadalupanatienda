<?php
    include 'conexion.php';

    $idMarca=$_POST['idMarca'];
    $nombre=$_POST['nombre'];

    $actualizar="UPDATE marca SET nombre='$nombre' WHERE idMarca='$idMarca'";
    $resultado=mysqli_query($conexion,$actualizar);

    if($resultado){
        echo "<script>
            alert('Se han guardado los cambios correcramente');
            window.location='modificarMarca.php';
            </script>";
    }else{
        echo "<script>
            alert('No se pudo actualizar los datos');
            window.location='modificarMarca.php';
            </script>";
    }
?>