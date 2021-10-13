<!-- Creado por - ISAAC TOAVAR -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Listado - Usuarios</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h1 class="title" align="center">Listado de Usuarios</h1>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas con la conexion");
    
    $registros = $mysql->query("select id,usuario from usuarios") or
        die($mysql->error);
    
    echo '<table align="center" border="1">';
    echo '<tr><th>Código</th><th>Usuarios</th></tr>';
    while ($reg = $registros->fetch_array()) {
        echo '<tr>';
        echo '<td>';
        echo $reg['id'];
        echo '</td>';
        echo '<td>';
        echo $reg['usuario'];
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
    $mysql->close();
    ?>
</body>
</html>