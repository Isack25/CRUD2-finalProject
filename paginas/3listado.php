<!--Creado por - Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h1 class="title" align="center">Listados</h1>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas en la conexion de la base de datos");

    $registros = $mysql->query("select codigo, descripcion from rubros") or
        die($mysql->error);

    echo '<table align="center">';
    echo '<tr><th>Código</th><th>Descripción</th></tr>';
    while ($reg = $registros->fetch_array()) {
        echo '<tr>';
        echo '<td>';
        echo $reg['codigo'];
        echo '</td>';
        echo '<td>';
        echo $reg['descripcion'];
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
    $mysql->close();
    ?>
    <br>
    <center>
        <a href="1rubros.html"><input type="button" value="Alta de Rubros"></a>
        <a href="4consultas_rubros.html"><input type="button" value="Consulta Rubros"></a><br>
        <a href="6modificar_rubros.html"><input type="button" value="Modifica Rubros"></a>
        <a href="9borrado_rubros.html"><input type="button" value="Borrar los Rubros"></a>
    </center>
    </table>
</body>
</html>