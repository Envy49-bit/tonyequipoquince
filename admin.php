<?php
include("conexion.php");

if(isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $conexion->query("INSERT INTO articulos(nombre, descripcion, precio, stock) 
    VALUES('$nombre','$descripcion','$precio','$stock')");
}

if(isset($_GET['eliminar'])){
    $id = $_GET['eliminar'];
    $conexion->query("DELETE FROM articulos WHERE id=$id");
}

$resultado = $conexion->query("SELECT * FROM articulos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard — Papelería Tony</title>
    <style>
        :root {
            --bg-color: #0d0d0d;
            --card-bg: #161616;
            --text-color: #ffffff;
            --accent-color: #3498db;
            --border-color: #222;
        }

        body {
            margin: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Inter', sans-serif;
            padding: 40px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 60px;
        }

        h2 {
            font-size: 3rem;
            line-height: 0.9;
            letter-spacing: -0.05em;
            text-transform: uppercase;
            margin: 0;
        }

        .container {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 60px;
        }

        .form-section h3 {
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.2em;
            color: #555;
            margin-bottom: 30px;
        }

        .form-group { margin-bottom: 20px; }
        label { display: block; font-size: 0.7rem; text-transform: uppercase; color: #888; margin-bottom: 5px; }
        
        input[type="text"], input[type="number"] {
            width: 100%;
            background: #111;
            border: 1px solid var(--border-color);
            padding: 12px;
            color: white;
            outline: none;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background: white;
            color: black;
            border: none;
            padding: 15px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            text-transform: uppercase;
            font-size: 0.7rem;
            letter-spacing: 0.1em;
            color: #555;
            padding: 15px 10px;
            border-bottom: 1px solid var(--border-color);
        }

        td {
            padding: 20px 10px;
            border-bottom: 1px solid var(--border-color);
            font-size: 0.9rem;
        }

        tr:hover { background: #111; }

        .btn-action {
            text-decoration: none;
            font-size: 0.7rem;
            text-transform: uppercase;
            font-weight: bold;
            margin-right: 15px;
        }

        .edit { color: var(--accent-color); }
        .delete { color: #e74c3c; }

        .logout-btn {
            color: #555;
            text-decoration: none;
            font-size: 0.8rem;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <header>
        <h2>Inventario</h2>
        <a href="index.php" class="logout-btn">Salir del sistema →</a>
    </header>

    <div class="container">
        <div class="form-section">
            <h3>Nuevo Registro</h3>
            <form method="POST">
                <div class="form-group">
                    <label>Nombre del Producto</label>
                    <input type="text" name="nombre" required>
                </div>
                <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" name="descripcion">
                </div>
                <div class="form-group">
                    <label>Precio (MXN)</label>
                    <input type="text" name="precio" required>
                </div>
                <div class="form-group">
                    <label>Stock Disponible</label>
                    <input type="number" name="stock" required>
                </div>
                <input type="submit" name="guardar" value="Añadir a Catálogo">
            </form>
        </div>

        <!-- Sección de Tabla (READ / DELETE)[cite: 1] -->
        <div class="table-section">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($fila = $resultado->fetch_assoc()){ ?>
                    <tr>
                        <td style="color: #444;"><?php echo $fila['id']; ?></td>
                        <td style="font-weight: bold;"><?php echo $fila['nombre']; ?></td>
                        <td style="color: #888;"><?php echo $fila['descripcion']; ?></td>
                        <td>$<?php echo $fila['precio']; ?></td>
                        <td><?php echo $fila['stock']; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $fila['id']; ?>" class="btn-action edit">Editar</a>
                            <a href="admin.php?eliminar=<?php echo $fila['id']; ?>" 
                               class="btn-action delete" 
                               onclick="return confirm('¿Confirmar eliminación?')">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
