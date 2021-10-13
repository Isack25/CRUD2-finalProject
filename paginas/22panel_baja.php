<!--Creado por - ISAAC TOVAR-->
<?php
//Creado por - ISAAC TOVAR
$mysql = new mysqli("localhost", "root", "", "base2");
if ($mysql->connect_error)
    die("Problemas de conexión");

$mysql->query("delete from articulos where codigo=$_REQUEST[codigo]") or
    die($mysql->error);

$mysql->close();

header('Location:21panel_listado.php')
?>