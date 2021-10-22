<?php
    require("conexion.php");
    $conexion = new mysqli(SERVIDOR, USUARIO, PW, BD);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modificar</title>
</head>
<body>
    <h1>Modificar</h1>
    <form action="modificar2.php" method="post">
        <label for="modificar">Usuario que desea modificar: </label>
        <select>
            <?php
                $consulta = "SELECT DNI, Nombre, Correo, Tlfn FROM empleados ";
                $resultado = $conexion->query($consulta);
                while ($fila = $resultado->fetch_assoc()) {
                    $id = $fila['idEmpleados'];
                    $nombre = $fila['Nombre'];
                    $dni = $fila['DNI'];
                    echo "<option value='".$id."'>$nombre con DNI: '".$dni."'</option>";
                }
            ?>
        </select>
        <a href="modificar2.php?nombre='.fila['Nombre'].'"><input type="submit" name="modificar" value="Modificar"></a><br><br>
        <a href="../index.php"><input type="button" name="volver" value="Volver"></a>
    </form>   
</body>
</html>