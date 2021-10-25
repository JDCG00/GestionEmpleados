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
        <label for="modificar">Usuario que desea modificar: </label><br><br>
        <?php
            $consulta = "SELECT IdEmpleados, DNI, Nombre, Correo, Tlfn FROM empleados ";
            $resultado = $conexion->query($consulta);
            while ($fila = $resultado->fetch_assoc()) {
                $id = $fila['IdEmpleados'];
                $nombre = $fila['Nombre'];
                $dni = $fila['DNI'];
                echo "<label value=".$id.">".$nombre." con DNI: ".$dni."</label>&nbsp&nbsp&nbsp";
                echo '<a href="modificar2.php?id='.$id.'"><input type="button" name="modificar" value="Modificar"></a><br><br>';
            }
        ?>
        <a href="../index.php"><input type="button" name="volver" value="Volver"></a>
    </form>
</body>
</html>