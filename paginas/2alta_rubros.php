<!--Creado por - Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altas</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h2 class="title" align="center">Ver Rubros</h2>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die('Problemas con la conexion de la base de datos');

    $mysql->query("insert into rubros(descripcion) values ('$_REQUEST[descripcion]')") or
        die($mysql->error);

    $mysql->close();

    echo "<center>El nuevo rubro se almacenó</center>";
    ?>
    <br>
    <center><a href="1rubros.html"><input type="button" value="Regresar"></a></center>
</body>
</html>