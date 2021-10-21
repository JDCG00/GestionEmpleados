<?php
    require("conexion.php")
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Alta</title>
    </head>
    <body>
        <h1>Alta</h1>
        <form action="alta.php" method="post">
            <label for="dni">DNI: </label>
            <input type="text" name="dni"><br><br>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre"><br><br>
            <label for="correo">Correo: </label>
            <input type="text " name="correo"><br><br>
            <label for="telefono">Teléfono: </label>
            <input type="number" name="telefono"><br><br>
            <input type="submit" name="enviar" value="Enviar"><br><br>
            <a href="../index.php"><input type="button" name="volver" value="Volver"></a>
        </form>
    </body>
</html>