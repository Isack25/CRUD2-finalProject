<!--Creado por - Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
</head>
<body bgcolor="c0c0c0">
    <?php
    session_start();
    session_destroy();

    header('Location:../index.php');
    ?>
</body>
</html>