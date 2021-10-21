<?php
    require("conexion.php");
    $conexion = new mysqli(SERVIDOR, USUARIO, PW, BD);
    function formulario1(){
        echo '
            <h1>Consultar</h1>
            <form action="consultar.php" method="post">
                <label for="dni">Introduzca DNI: </label>
                <input name="dni" type="text"><br><br>
                <input type="submit" name="enviar" value="Enviar"><br><br>
                <a href="../index.php"><input type="button" name="volver" value="Volver"></a>
            </form>
        ';
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Consultar</title>
    </head>
    <body>
        <?php
            if(!$_POST){
                formulario1();
            }else{
                $resultado = $conexion->query($consulta);
                while ($fila = $resultado->fetch_assoc()) {
                    echo 'IdEmpleados: ' .$fila['IdEmpleados']. '<br/>';
                    echo 'DNI: ' .$fila['DNI']. '<br/>';
                    echo 'Nombre: ' .$fila['Nombre']. '<br/>';
                    echo 'Correo: ' .$fila['Correo']. '<br/>';
                    echo 'Teléfono: ' .$fila['Tlfn']. '<br/>';
                }
            }
        ?>
    </body>
</html>
