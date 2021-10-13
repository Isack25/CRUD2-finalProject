<!--Creado por - ISAAC TOVAR-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrado Artículos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h1 class="title" align="center">Borrado de Artículos</h1>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas con la conexión");

    $registro = $mysql->query("select descripcion from articulos where codigo=$_REQUEST[codigo]") or
        die($mysql->error);

    if ($reg = $registro->fetch_array()) {
        $mysql->query("delete from articulos where codigo=$_REQUEST[codigo]") or
            die("$mysql->error");
        echo '<center>La descripcion del artículo eliminado es: ' . $reg['descripcion'] . '</center>';
    } else
        echo '<center>No existe un articulo con dicho código</center>';

    $mysql->close();
    ?>
    <br>
    <center> <a href="15borrado_articulos.html"><input type="button" value="Regresar"></a></center>
</body>
</html>