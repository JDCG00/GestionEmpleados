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
            $consulta = "SELECT * FROM empleados WHERE IdEmpleados='".$_GET['id']."';";
            $resultado = $conexion->query($consulta);
            $fila = $resultado->fetch_assoc();
            echo  $fila['Nombre']. ' con DNI: '.$fila['DNI'];
        ?>
    </h1>
    <form action="modificar2.php" method="post">
        <?php
            echo '<input type="hidden" name="id" value="'.$_GET['id'].'">'
        ?>        
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
    <?php
        if ($_POST) {
            $consulta2 = "UPDATE empleados SET DNI='".$_POST['dni']."', Nombre='".$_POST['nombre']."', Correo='".$_POST['correo']."', Tlfn='".$_POST['telefono']."' WHERE IdEmpleados='".$_POST['id']."';";
            $resultado2 = $conexion->query($consulta2);
            header("Location: modificar.php ");
        }
    ?>  
</body>
</html>