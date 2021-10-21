<?php
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

            }
        ?>
    </body>
</html>
