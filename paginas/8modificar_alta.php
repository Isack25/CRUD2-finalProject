<!--Creado por Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Rubros</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h2 class="title" align="center">Modificar Rubros</h2>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die('Problemas con la conexion de la base de datos');

    $mysql->query("update rubros set descripcion='$_REQUEST[descripcion]' where codigo=$_REQUEST[codigo]") or
        die($mysql->error);

    echo '<center>Se modificó la descripción del rubro</center>';

    $mysql->close();
    ?>
    <br>
    <center> <a href="6modificar_rubros.html"><input type="button" value="Regresar a modificar Rubros"></a></center>
</body>
</html>