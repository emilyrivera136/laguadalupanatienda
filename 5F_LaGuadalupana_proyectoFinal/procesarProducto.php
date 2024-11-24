<?php
    include 'conexion.php';

    $idProducto=$_POST['idProducto'];
    $idCategoria=$_POST['idCategoria'];
    $idMarca=$_POST['idMarca'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $novedad=$_POST['novedad'];
    $vendido=$_POST['vendido'];
    $imagen=$_POST['imagen'];

    $actualizar="UPDATE producto SET idCategoria='$idCategoria',idMarca='$idMarca',nombre='$nombre',precio='$precio',descripcion='$descripcion',novedad='$novedad',vendido='$vendido',imagen='$imagen'
        WHERE idProducto='$idProducto'";
    $resultado=mysqli_query($conexion,$actualizar);

    if($resultado){
        echo "<script>
            alert('Se han guardado los cambios correcramente');
            window.location='modificarProducto.php';
            </script>";
    }else{
        echo "<script>
            alert('No se pudo actualizar los datos');
            window.location='modificarProducto.php';
            </script>";
    }
?>