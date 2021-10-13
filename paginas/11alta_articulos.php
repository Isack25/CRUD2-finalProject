<!--Creado por Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Alta de Artículos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="wallp">
    <h1 class="title" align="center">Alta de Artículos</h1>
    <form action="12resultado_articulos.php" method="post">
        <center>
            <input type="text" name="descripcion" placeholder="Ingrese la descripción del Artículo" size="26" required>
            <br>
            <input type="text" name="precio" placeholder="Ingrese el precio del Artículo" required size="26">
            <br><br>
            <b>Selecciona rubro:</b><select name="codigorubro">
                <?php
                $mysql = new mysqli("localhost", "root", "", "base2");
                if ($mysql->connect_error)
                    die("Problemas con la conexion");

                $registros = $mysql->query("select codigo,descripcion from rubros") or
                    die($mysql->error);
                while ($reg = $registros->fetch_array()) {
                    echo "<option value=\"" . $reg['codigo'] . "\">" . $reg['descripcion'] . "</option>";
                }
                ?>
            </select>
            <br><br>
            <input type="submit" value="Cofirmar">
        </center>
    </form>
    <br><br>
    <center>
        <a href="13consulta_articulos.html"><input type="button" value="Consulta  Artículos"></a>
        <a href="15borrado_articulos.html"><input type="button" value="Borrado de Artículos"></a>
        <br>
        <a href="17listado_articulos.php"><input type="button" value="Listado Artículos"></a>
        <a href="18modificar_articulos.html"><input type="button" value="Modificar Artículos"></a>
    </center>
</body>

</html>