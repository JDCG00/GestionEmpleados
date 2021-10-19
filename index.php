<?php
    function formulario1(){
        echo '
            <h3>¿Qué desea hacer: CONSULTAR datos / dar de ALTA / dar de BAJA datos / MODIFICAR datos ?</h3>
            <p><a href="consultar.php">1.- CONSULTAR DATOS</a></p>
            <p><a href="alta.php">2.- DAR DE ALTA DATOS</a></p>
            <p><a href="baja.php">3.- DAR DE BAJA DATOS</a></p>
            <p><a href="modificar.php">4.- MODIFICAR DATOS</a></p>
        ';
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión Empleadoss</title>
</head>
<body>
    <?php
        formulario1();
    ?>
</body>
</html>