<?php
    include('conexion.php');
    $producto="SELECT * FROM producto";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta producto</title>
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
        <br>

        <h2>Consultas Producto</h2>
        <table border="1" width="100%">
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
                <td><?php echo $row['idProducto'];?></td>
                <td><?php echo $row['idCategoria'];?></td>
                <td><?php echo $row['idMarca'];?></td>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['precio'];?></td>
                <td><?php echo $row['descripcion'];?></td>
                <td><?php echo $row['novedad'];?></td>
                <td><?php echo $row['vendido'];?></td>
                <td><?php echo $row['imagen'];?></td>
            </tr>

            <?php } ?>

            </table>
    </body>
</html>