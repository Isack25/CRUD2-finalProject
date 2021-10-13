<!--Creado por Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body class="wallp">
    <h1 class="title" align="center">Borrar Rubros</h1>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base2");
    if ($mysql->connect_error)
        die("Problemas con la conexion de datos");

    $registro = $mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or
        die($mysql->error);

    if ($reg = $registro->fetch_array()) {
        $mysql->query("delete from rubros where codigo=$_REQUEST[codigo]") or
            die($mysql->error);
        echo '<center>La descripcion del rubro eliminado es:' . $reg['descripcion'] . '</center>';
    } else {
        echo '<center>No existe Rubro con dicho Código</center>';
    }
    $mysql->close();
    ?>
    <br><br>
    <center><a href="9borrado_rubros.html"><input type="button" value="Regresar"></a></center>
</body>
</html>