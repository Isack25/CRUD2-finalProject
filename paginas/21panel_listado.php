<!--Creado por - ISAAC TOVAR-->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Listado de artículos</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>*{font-family: Arial;}</style>
</head>
<body class="wallp">
    <h1 class="title" align="center">Panel de Mantenimiento</h1>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");

    $registros = $mysql->query("select ar.codigo as codigoart,
                                        ar.descripcion as descripcionart,
                                        precio,
                                        ru.descripcion as descripcionrub 
                                    from articulos as ar
                                    inner join rubros as ru on ru.codigo=ar.codigorubro") or
        die($mysql->error);

    echo '<table align="center" border="1">';
    echo '<tr><th>Código</th><th>Descripción</th><th>Precio</th>
        <th>Rubro</th><th>Eliminar</th><th>Editar</th></tr>';
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
        echo '<td>';
        echo '<a href="22panel_baja.php?codigo=' . $reg['codigoart'] . '">Borrar</a>';
        echo '</td>';
        echo '<td>';
        echo '<a href="23panel_modificar.php?codigo=' . $reg['codigoart'] . '">Modificar</a>';
        echo '</td>';
        echo '</tr>';
    }
    echo '<tr><td colspan="6" align="center">';
    echo '<a href="25panel_agregar.php">Agrega un nuevo artículo</a>';
    echo '</td></tr>';
    echo '<table>';

    $mysql->close();
    ?>
</body>
</html>