<form method="POST">

    <div class="input-group">
        <input
            type="text"
            name="nombre"
            value="<?= $producto['nombre'] ?>"
            required
        >
    </div>

    <div class="input-group">
        <input
            type="text"
            name="descripcion"
            value="<?= $producto['descripcion'] ?>"
            required
        >
    </div>

    <div class="input-group">
        <input
            type="number"
            name="precio"
            value="<?= $producto['precio'] ?>"
            required
        >
    </div>

    <div class="input-group">
        <input
            type="number"
            name="stock"
            value="<?= $producto['stock'] ?>"
            required
        >
    </div>

    <button class="btn">Guardar cambios</button>

</form>
