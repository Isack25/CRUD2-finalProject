<!--Creado por - ISAAC TOVAR-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Artículos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h1 class="title" align="center">Listado de Artículos</h1>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas con la conexion");

    $registros = $mysql->query("select ar.codigo as codigoart,
                                        ar.descripcion as descripcionart,
                                        precio,
                                        ru.descripcion as descripcionrub 
                                    from articulos as ar
                                    inner join rubros as ru on ru.codigo=ar.codigorubro") or
        die($mysql->error);

    echo '<table border="1" align="center">';
    echo '<tr><th>Código</th><th>Descripción</th><th>Precio</th><th>Rubro</th></tr>';
    while ($reg = $registros->fetch_array()) {
        echo '<tr>';
        echo '<td>';
        echo $reg['codigoart'];
        echo '</td>';
        echo '<td>';
        echo $reg['descripcionart'];
        echo '</td>';
        echo '<td>';
        echo $reg['precio'];
        echo '</td>';
        echo '<td>';
        echo $reg['descripcionrub'];
        echo '</td>';
        echo '</tr>';
    }
    echo '<table>';

    $mysql->close();

    ?>
    <br>
    <center>
        <br><br>
        <a href="13consulta_articulos.html"><input type="button" value="Consulta  Artículos"></a>
        <a href="15borrado_articulos.html"><input type="button" value="Borrado de Artículos"></a>
        <br>
        <a href="11alta_articulos.php"><input type="button" value="Alta de Artículos"></a>
        <a href="18modificar_articulos.html"><input type="button" value="Modificar Artículos"></a>
    </center>
</body>
</html>