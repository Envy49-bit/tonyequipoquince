<?php
include("conexion.php");

if(isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $conexion->query("INSERT INTO refacciones(nombre, descripcion, precio, stock)
    VALUES('$nombre','$descripcion','$precio','$stock')");
}

if(isset($_GET['eliminar'])){
    $id = $_GET['eliminar'];
    $conexion->query("DELETE FROM refacciones WHERE id=$id");
}

$resultado = $conexion->query("SELECT * FROM refacciones");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel de administración</title>
</head>
<body>

<h2>CRUD Refacciones</h2>

<form method="POST">
    Nombre:<br>
    <input type="text" name="nombre"><br>

    Descripción:<br>
    <input type="text" name="descripcion"><br>

    Precio:<br>
    <input type="text" name="precio"><br>

    Stock:<br>
    <input type="text" name="stock"><br><br>

    <input type="submit" name="guardar" value="Guardar">
</form>

<hr>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Precio</th>
    <th>Stock</th>
    <th>Acción</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()){ ?>
<tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['descripcion']; ?></td>
    <td><?php echo $fila['precio']; ?></td>
    <td><?php echo $fila['stock']; ?></td>
    <td>
        <a href="admin.php?eliminar=<?php echo $fila['id']; ?>"
        onclick="return confirm('¿Eliminar registro?')">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
