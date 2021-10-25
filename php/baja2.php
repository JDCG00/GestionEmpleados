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
    <h1>Desea borrar a :
        <?php
            $consulta = "SELECT * FROM empleados WHERE IdEmpleados='".$_GET['id']."';";
            $resultado = $conexion->query($consulta);
            $fila = $resultado->fetch_assoc();
            echo  $fila['Nombre']. ' con DNI: '.$fila['DNI'];
        ?>
    </h1>
    <form action="baja2.php" method="post">
        <?php
            echo '<input type="hidden" name="id" value="'.$_GET['id'].'">'
        ?>
        <input type="submit" name="aceptar" value="Aceptar"><br><br>
        <a href="../index.php"><input type="button" name="volver" value="Volver"></a>
    </form>
    <?php
        if ($_POST) {
            $consulta2 = "DELETE FROM empleados WHERE IdEmpleados = '".$_POST['id']."' ";
            $resultado2 = $conexion->query($consulta2);
            header("Location: baja.php ");
        }
    ?>  
</body>
</html>