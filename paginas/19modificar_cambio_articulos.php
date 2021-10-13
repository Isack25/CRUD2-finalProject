<!--Creado por - ISAAC TOVAR-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Artículos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h1 class="title" align="center">Modificar Artículos</h1>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas con la conexión");

    $registro = $mysql->query("select descripcion,
                                    precio,
                                    codigorubro
                                from articulos where codigo=$_REQUEST[codigo]") or

        die($mysql->error);

    if ($reg = $registro->fetch_array()) {
    ?>
        <center>
            <form action="20modificar_alta_articulos.php" method="post">
                <input type="text" name="descripcion" size="30" value="<?php echo $reg['descripcion']; ?>">
                <br><br>
                <input type="text" name="precio" size="30" value="<?php echo $reg['precio']; ?>">
                <br><br>
                <b>Rubro:</b><select name="codigorubro">
                    <?php
                    $registros2 = $mysql->query("select codigo,descripcion from rubros") or
                        die($mysql->error);
                    while ($reg2 = $registros2->fetch_array()) {
                        if ($reg2['codigo'] == $reg['codigorubro'])
                            echo "<option value=\"" . $reg2['codigo'] . "\" selected>" . $reg2['descripcion'] .
                                "</option>";
                        else
                            echo "<option value=\"" . $reg2['codigo'] . "\">" . $reg2['descripcion'] . "</option>";
                    }
                    ?>
                </select>

                <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>">
                <br> <br>
                <input type="submit" value="Confirmar">
            </form>
        </center>
    <?php
    } else
        echo '<center>No existe un artículo con dicho código</center>';

    $mysql->close();
    ?>
    <br>
    <center>
        <a href="11alta_articulos.php"><input type="button" value="Alta de Artículos"></a>
        <a href="13consulta_articulos.html"><input type="button" value="Consulta Artículos"></a>
        <br>
        <a href="15borrado_articulos.html"><input type="button" value="Borrado Artículos"></a>
        <a href="17listado_articulos.php"><input type="button" value="Listado de Artículos"></a>
    </center>
</body>
</html>