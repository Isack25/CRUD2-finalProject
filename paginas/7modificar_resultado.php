<!--Creado por Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar de Rubros</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h2 class="title" align="center">Modificar Rubros</h2>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas con la conexion a la base de datos");

    $registro = $mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or
        die($mysql->error);

    if ($reg = $registro->fetch_array()) {
    ?>
        <form action="8modificar_alta.php" method="POST">
            <center><input type="text" name="descripcion" size="25" value="<?php echo $reg['descripcion']; ?>">
                <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>"></center>
            <br><br>
            <center><a href="6modificar_rubros.html"><input type="button" value="Regresar"></a>
                <input type="submit" value="Confirmar"></center>
        </form>
    <?php
    } else
        echo '<center>No existe un rubro con dicho código</center>';

    $mysql->close();
    ?>
</body>
</html>