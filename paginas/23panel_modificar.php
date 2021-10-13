<!--Creado por - ISAAC TOVAR-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h1 class="title" align="center">Panel de Mantenimiento</h1>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas con la conexion");

    $registro = $mysql->query("select descripcion,
                                        precio,
                                        codigorubro
                                    from articulos where codigo=$_REQUEST[codigo]") or

        die($mysql->error);

    if ($reg = $registro->fetch_array()) {
    ?>
        <center>
            <form action="24panel_modificar_alta.php" method="post">
                <input type="text" name="descripcion" size="30" value="<?php echo $reg['descripcion']; ?>" placeholder="Descripcion del Artículo">
                <br><br>
                <input type="text" name="precio" size="30" value="<?php echo $reg['precio']; ?>">
                <br><br>
                <select name="codigorubro">
                    <?php
                    $registro2 = $mysql->query("select codigo,descripcion from rubros") or
                        die($mysql->error);
                    while ($reg2 = $registro2->fetch_array()) {
                        if ($reg2['codigo'] == $reg2['codigorubro'])
                            echo "<option value=\"" . $reg2['codigo'] . "\" selected>" . $reg2['descripcion'] . "</option>";
                        else
                            echo "<option value=\"" . $reg2['codigo'] . "\">" . $reg2['descripcion'] . "</option>";
                    }
                    ?>
                </select>
                <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>">
                <br><br>
                <input type="submit" value="Confirmar">
            </form>
        </center>
    <?php
    } else
        echo '<center>No existe un artículo con dicho código</center>';

    $mysql->close();
    ?>
</body>
</html>