<?php
    include('conexion.php');
    $id=$_GET['id'];
    $producto="SELECT * FROM producto WHERE idProducto='$id'";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar Producto</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>
    <br><br>
        <h1>La Guadalupana</h1>
        <br><br>

        <nav>
            <ul class="lista">
                <li><a href="#">Altas</a>
                    <ul>
                        <li><a href="altaMarca.html">Marca</a></li>
                        <li><a href="altaCategoria.html">Categoria</a></li>
                        <li><a href="altaProducto.html">Producto</a></li>
                    </ul>
                </li>
                <li><a href="#">Modificar y Eliminar</a>
                    <ul>
                        <li><a href="modificarMarca.php">Marca</a></li>
                        <li><a href="modificarCategoria.php">Categoria</a></li>
                        <li><a href="modificarProducto.php">Producto</a></li>
                    </ul>
                </li>
                <li><a href="#">Consultas</a>
                    <ul>
                        <li><a href="consultaMarca.php">Marca</a></li>
                        <li><a href="consultaCategoria.php">Categoria</a></li>
                        <li><a href="consultaProducto.php">Producto</a></li>
                    </ul>
                </li>
                <li><a href="index.html">Pagina Principal</a></li>
            </ul>
        </nav>

        <h2>Modificar Categoria</h2>
        <br>
        <form id="form1" action="procesarProducto.php" method="POST">
            <table width="60%" border="1" aling="center">
                <tr>
                    <td>idProducto:</td>
                    <td>idCategoria:</td>
                    <td>idMarca:</td>
                    <td>Nombre:</td>
                    <td>Precio:</td>
                    <td>Descripcion:</td>
                    <td>Novedad:</td>
                    <td>Vendido:</td>
                    <td>Imagen:</td>
                </tr>

                <?php
                    $resultado=mysqli_query($conexion,$producto);
                    while ($row=mysqli_fetch_assoc($resultado)) {?>

                <tr>
                    <td><input type="number" value="<?php echo $row ['idProducto'];?>"name="idProducto"></td>
                    <td><input type="number" value="<?php echo $row ['idCategoria'];?>"name="idCategoria"></td>
                    <td><input type="number" value="<?php echo $row ['idMarca'];?>"name="idMarca"></td>
                    <td><input type="text" value="<?php echo $row ['nombre'];?>"name="nombre"></td>
                    <td><input type="number" value="<?php echo $row ['precio'];?>"name="precio"></td>
                    <td><input type="text" value="<?php echo $row ['descripcion'];?>"name="descripcion"></td>
                    <td><input type="text" value="<?php echo $row ['novedad'];?>"name="novedad"></td>
                    <td><input type="text" value="<?php echo $row ['vendido'];?>"name="vendido"></td>
                    <td><input type="file" value="<?php echo $row ['imagen'];?>"name="imagen"></td>
                </tr>

                <?php } mysqli_free_result($resultado); ?>

                <tr>
                    <td colspan="9" aling="center">
                    <br><br>
                    <input type="submit" value="Actualizar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>