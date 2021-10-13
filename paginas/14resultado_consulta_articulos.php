<!--Creado por Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Artículos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="wallp">
    <h2 class="title" align="center">Consulta de artículos</h2>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas con la conexión");

    $registros = $mysql->query("select ar.descripcion as descripcionart, precio, ru.descripcion as descripcionrub 
                                from articulos as ar
                                inner join rubros as ru on ru.codigo=ar.codigorubro
                                where ar.codigo=$_REQUEST[codigo]") or

        die($mysql->error);

    if ($reg = $registros->fetch_array()) {
        echo '<center><b>Descripción:' . $reg['descripcionart'] . '</center>' . '<br>';
        echo '<center>Precio:' . $reg['precio'] . '</center>' . '<br>';
        echo '<center>Rubro:' . $reg['descripcionrub'] . '</b></center>' . '<br>';
    } else
        echo '<center>No existe artículo con dicho código</center>';

    $mysql->close();

    ?>
    <br>
    <center><a href="13consulta_articulos.html"><input type="button" value="Regresar"></a></center>
    <br>
    <center>
        <a href="11alta_articulos.php"><input type="button" value="Alta de artículos"></a>
        <a href="15borrado_articulos.html"><input type="button" value="Borrado de Artículos"></a>
        <br>
        <a href="17listado_articulos.php"><input type="button" value="Listado Artículos"></a>
        <a href="18modificar_articulos.html"><input type="button" value="Modificar Artículos"></a>
    </center>
</body>

</html>