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
    <h1>Modificar
        <?php
            $consulta = "SELECT Nombre, DNI FROM empleados ";
            $resultado = $conexion->query($consulta);
            $fila = $resultado->fetch_assoc();
            echo  $fila['Nombre']. ' con DNI: ' .$fila['DNI'];
        ?>
    </h1>
    <form action="modificar2.php" method="post">
    <label for="dni">DNI: </label>
        <input type="text" name="dni"><br><br>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre"><br><br>
        <label for="correo">Correo: </label>
        <input type="text " name="correo"><br><br>
        <label for="telefono">Teléfono: </label>
        <input type="text" name="telefono"><br><br>
        <input type="submit" name="modificar" value="Modificar"><br><br>
        <a href="../index.php"><input type="button" name="volver" value="Volver"></a>
    </form>   
</body>
</html>