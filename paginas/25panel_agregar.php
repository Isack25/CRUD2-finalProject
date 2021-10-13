<!--Creado por - ISAAC TOVAR-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h1 class="title" align="center">Alta de Artículos</h1>
    <center>
        <form action="26panel_agregar_alta.php" method="post">
            <input type="text" name="descripcion" size="30" placeholder="Ingrese la descripcion del artículo" required>
            <br><br>
            <input type="text" name="precio" size="30" placeholder="Ingrese el precio" required>
            <br><br>
            <b>Seleccione rubro:</b><select name="codigorubro" required>
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
            <input type="submit" value="Confirmar">
        </form>
    </center>
</body>
</html>