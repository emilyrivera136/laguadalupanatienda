<?php
    include 'conexion.php';

    $id=$_GET['id'];
    $eliminar="DELETE FROM producto WHERE idProducto='$id'";

    $resultado=mysqli_query($conexion,$eliminar);

    if($resultado){
        header("location: modificarProducto.php");
    }else{
        echo "<script>
            alert('Nose pudo eliminar el archivo');
            window.history.go(-1);
            </script>";
    }
?>