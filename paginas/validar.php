<!--Creado por - Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingresando</title>
</head>
<body bgcolor="C0C0C0">
    <h2>Cargando . . .</h2>
    <?php
    session_start();
    $_SESSION['usser'] = $_REQUEST['usuario'];
    $_SESSION['pass'] = $_REQUEST['password'];
    header("Location: login_registrar.php")
    ?>
</body>
</html>