<?php
include("conexion.php");

$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM articulos WHERE id=$id");
$articulo = $resultado->fetch_assoc();

if(isset($_POST['actualizar'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $conexion->query("UPDATE articulos SET nombre='$nombre', descripcion='$descripcion', precio='$precio', stock='$stock' WHERE id=$id");
    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Editar Artículo</h2>
    <form method="POST">
        Nombre: <input type="text" name="nombre" value="<?php echo $articulo['nombre']; ?>"><br>
        Descripción: <input type="text" name="descripcion" value="<?php echo $articulo['descripcion']; ?>"><br>
        Precio: <input type="text" name="precio" value="<?php echo $articulo['precio']; ?>"><br>
        Stock: <input type="text" name="stock" value="<?php echo $articulo['stock']; ?>"><br>
        <input type="submit" name="actualizar" value="Actualizar">
    </form>
</body>
</html>
