<!--Creado por Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas de Rubros</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h2 class="title" align="center">Resultados de la Consulta</h2>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas de con la conexión");

    $registros = $mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or
        die($mysql->error);

    if ($reg = $registros->fetch_array())
        echo '<center>La descripción del rubro es: ' . $reg['descripcion'] . ' </center><br>';
    else
        echo '<center>No existe un rubro con dicho código</center><br>';
    $mysql->close();
    ?>
    <br>
    <center> <a href="4consultas_rubros.html"><input type="button" value="Regresar"></a></center>
</body>
</html>