<?php
    require("conexion.php");
    $conexion = new mysqli(SERVIDOR, USUARIO, PW, BD);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Baja</title>
</head>
<body>
    <h1>Baja</h1>
        <form action="baja.php" method="post">
            <label for="baja">Usuario que desea eliminar: </label>
            <select>
                <?php
                    $consulta = "SELECT * FROM empleados ";
                    $resultado = $conexion->query($consulta);
                    while ($fila = $resultado->fetch_assoc()) {
                        
                    }
                ?>
            </select>
            <input type="submit" name="borrar" value="Borrar"><br><br>
            <a href="../index.php"><input type="button" name="volver" value="Volver"></a>
    </form>
</body>
</html>