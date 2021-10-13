<!--Creado por - ISAAC TOVAR-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modificar Artículos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h1 class="title" align="center">Modificar Artículos</h1>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");

    $mysql->query("update articulos set 
                        descripcion='$_REQUEST[descripcion]',
                        precio=$_REQUEST[precio],
                        codigorubro=$_REQUEST[codigorubro]
            where codigo=$_REQUEST[codigo]") or
        die($mysql->error);

    echo '<center>Se modificaron los datos del artículo</center>';

    $mysql->close();

    ?>
    <br>
    <center>
        <a href="11ata_articulos.php"><input type="button" value="Alta de Artículos"></a>
        <a href="13consulta_articulos.html"><input type="button" value="Consulta Artículos"></a>
        <br>
        <a href="15borrado_articulos.html"><input type="button" value="Borrado Artículos"></a>
        <a href="17listado_articulos.php"><input type="button" value="Listado de Artículos"></a>
    </center>
</body>
</html>