<?php
    require("conexion.php");
    $conexion = new mysqli(SERVIDOR, USUARIO, PW, BD);

    $consulta = "SELECT * FROM empleados ";
    $resultado = $conexion->query($consulta);
    while ($fila = $resultado->fetch_assoc()) {
        echo 'IdEmpleados: ' .$fila['IdEmpleados']. '<br/>';
        echo 'DNI: ' .$fila['DNI']. '<br/>';
        echo 'Nombre: ' .$fila['Nombre']. '<br/>';
        echo 'Correo: ' .$fila['Correo']. '<br/>';
        echo 'Teléfono: ' .$fila['Tlfn']. '<br/>';
    }
    ?>