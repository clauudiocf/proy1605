<?php
/*session_start();
$_SESSION["saludo"]="Hola Mundo";*/
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="Revision.php"> Revisi&oacute;n sesi&oacute;n</a>
        
        <form method="post" action="Revision.php">
            <div><label>Nombre:</label><input type="text" name="nombre"/></div>
            <div><label>Clave:</label><input type="text" name="clave"/></div>
            <input type="submit" name="aceptar">
        </form>
        
    </body>
</html>