<!--Creado por Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de articulos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wallp">
    <h1 class="title" align="center">C A R G A N D O . . . </h1>
    <?php
        $mysql = new mysqli("localhost", "root", "", "base2");
        if ($mysql->connect_error)
            die("Problemas con la conexión");

        $mysql->query("insert into articulos(descripcion,precio,codigorubro)
            values ('$_REQUEST[descripcion]','$_REQUEST[precio]','$_REQUEST[codigorubro]')") or
        die($mysql->error);

        echo '<center>El nuevo artículo se almacenó</center>';

        $mysql->close();
    ?>
    <br>
    <center> <a href="11alta_articulos.php"><input type="button" value="Regresar"></a></center>
</body>
</html>
