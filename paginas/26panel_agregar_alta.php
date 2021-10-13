<!--Creado por - ISAAC TOVAR-->
<?php
$mysql = new mysqli("localhost", "root", "", "base2");
if ($mysql->connect_error)
    die("Problemas con la conexion");

$mysql->query("insert into articulos(descripcion,precio,codigorubro)
                    value('$_REQUEST[descripcion]',$_REQUEST[precio], $_REQUEST[codigorubro])") or
    die($mysql->error);

$mysql->close();

header('Location:21panel_listado.php')

?>