<?php
if ($_POST) {
    $usuario = $_POST['usuario'];      //tu_numcontrol@itoaxaca.edu.mx
    $password = $_POST['password'];      //numcontrolTSO

    if ($usuario == "24160753@itoaxaca.edu.mx" && $password == "24160753") {
        header("Location: admin.php");
        exit();
    } else {
        echo "<p>Usuario o contraseña incorrectos</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Inicio de sesión</h2>

<form method="POST">
    Usuario:<br>
    <input type="text" name="usuario"><br><br>

    Contraseña:<br>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Entrar">
</form>

</body>
</html>
