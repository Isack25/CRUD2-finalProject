<!--Creado por - ISAAC TOVAR-->
<?php
$mysql = new mysqli("localhost", "root", "", "base2");
if ($mysql->connect_error)
    die("Problemas con la conexion");

$mysql->query("update articulos set
                            descripcion='$_REQUEST[descripcion]',
                            precio=$_REQUEST[precio],
                            codigorubro=$_REQUEST[codigorubro]
                    where codigo=$_REQUEST[codigo]") or
    die($mysql->error);

$mysql->close();

header('Location:21panel_listado.php')
?>