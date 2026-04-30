<?php
include("conexion.php");

if(!isset($_GET['id'])) {
    header("Location: admin.php");
    exit();
}

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
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar — Papelería Tony</title>
    <style>
        :root {
            --bg-color: #0d0d0d;
            --text-color: #ffffff;
            --accent-color: #3498db;
            --border-color: #222;
        }

        body {
            margin: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .edit-box {
            width: 100%;
            max-width: 500px;
            padding: 40px;
        }

        h2 {
            font-size: 3rem;
            line-height: 0.9;
            letter-spacing: -0.05em;
            text-transform: uppercase;
            margin-bottom: 50px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            text-transform: uppercase;
            font-size: 0.7rem;
            letter-spacing: 0.1em;
            color: #555;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 2px solid #333;
            padding: 10px 0;
            color: white;
            font-size: 1.1rem;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: var(--accent-color);
        }

        .btn-update {
            margin-top: 40px;
            background: white;
            color: black;
            border: none;
            padding: 15px 0;
            width: 100%;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .btn-update:hover {
            opacity: 0.8;
        }

        .cancel-link {
            display: block;
            margin-top: 30px;
            color: #555;
            text-decoration: none;
            font-size: 0.8rem;
            text-transform: uppercase;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="edit-box">
        <h2>MODIFICAR<br>REGISTRO</h2>
        
        <form method="POST">
            <div class="form-group">
                <label>Nombre del Articulo</label>
                <input type="text" name="nombre" value="<?php echo $articulo['nombre']; ?>" required>
            </div>

            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" name="descripcion" value="<?php echo $articulo['descripcion']; ?>">
            </div>

            <div class="form-group">
                <label>Precio Unitario</label>
                <input type="text" name="precio" value="<?php echo $articulo['precio']; ?>" required>
            </div>

            <div class="form-group">
                <label>Stock en Almacen</label>
                <input type="number" name="stock" value="<?php echo $articulo['stock']; ?>" required>
            </div>

            <input type="submit" name="actualizar" value="Actualizar Cambios" class="btn-update">
        </form>

        <a href="admin.php" class="cancel-link">← Cancelar y volver</a>
    </div>

</body>
</html>
