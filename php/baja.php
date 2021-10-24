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
    <form action="#" method="post">
        <label for="baja">Usuario que desea eliminar: </label><br><br>     
        <?php
            $consulta = "SELECT IdEmpleados, Nombre, DNI FROM empleados ";
            $resultado = $conexion->query($consulta);
            while ($fila = $resultado->fetch_assoc()) {
                $id = $fila['IdEmpleados'];
                $nombre = $fila['Nombre'];
                $dni = $fila['DNI'];
                echo "<label value=$id>$nombre con DNI: $dni</label>&nbsp&nbsp&nbsp";
                echo '<input type="submit" name="borrar" value="Borrar"><br><br>';
            }
        ?>        
        <?php
            if ($_POST) {
                $consulta2 = "DELETE FROM empleados WHERE IdEmpleados = '".$id."'";
                $resultado2 = $conexion->query($consulta2);
            }
        ?>
        <a href="../index.php"><input type="button" name="volver" value="Volver"></a>
    </form>   
</body>
</html>