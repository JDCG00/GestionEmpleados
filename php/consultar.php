<?php
    /*
    require_once('conexion.php');
    class Consultar extends Conexion
    {
        public $nombreserver = '127.0.0.1';
        public $usuario = 'root';
        public $contrasenia = '';
        public $basedatos = 'bdempleados';
        public $dni = $_POST['DNI'];

        public $conexion = mysqli_connect($nombreserver, $usuario, $contrasenia, $basedatos);

        public $consulta = 'SELECT * FROM empleados WHERE DNI = '.$dni;


        public $resultado = mysqli_query($conexion, $consulta);
    }
    */
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Consultar</title>
    </head>
    <body>
        <h1>Consultar</h1>
        <form action="consultar.php" method="post">
            <label for="dni">Introduzca DNI: </label>
            <input name="dni" type="text"><br><br>
            <input type="submit" name="enviar">
        </form>
    </body>
</html>
