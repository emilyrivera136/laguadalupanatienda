<?php
    include 'conexion.php';

    $id=$_GET['id'];
    $eliminar="DELETE FROM categoria WHERE idCategoria='$id'";

    $resultado=mysqli_query($conexion,$eliminar);

    if($resultado){
        header("location: modificarCategoria.php");
    }else{
        echo "<script>
            alert('Nose pudo eliminar el archivo');
            window.history.go(-1);
            </script>";
    }
?>