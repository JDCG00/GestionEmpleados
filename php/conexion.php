<?php
    class Conexion 
    {
        public $nombreserver = '127.0.0.1';
        public $usuario = 'root';
        public $contrasenia = '';
        public $basedatos = 'bdempleados';
        public $numclase = $_POST['numeroclase'];

        public $conexion = mysqli_connect($nombreserver, $usuario, $contrasenia, $basedatos);

        public $consulta = 'SELECT * FROM alumnos WHERE numero = '.$numclase;


        public $resultado = mysqli_query($conexion, $consulta);
    }
    
?>