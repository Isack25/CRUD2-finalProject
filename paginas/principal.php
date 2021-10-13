<!--Creado por - Isaac Tovar-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio | Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <style>
        body {
            background: #045796;
        }
    </style>
</head>
<body>
    <center>
        <!--Barra de menú-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="fondo7">
            <div class="container-fluid">
                <a class="navbar-brand" href="21panel_listado.php" id="nombre" target="myiframe"><img src="../media/logo.png" width="70"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" align="center">
                        <li class="nav-item">
                            <a class="nav-link" href="21panel_listado.php" target="myiframe">Panel de CRUD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="1rubros.html" target="myiframe">Tablas de Rubros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="11alta_articulos.php" target="myiframe">Tabla de Atículos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="27usuarios.php" target="myiframe">Tabla de Usuario</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br>
        <center><iframe name="myiframe" src="21panel_listado.php" width="50%" height="320px"></iframe></center>
        </section>
        <br><br><br><br><br>
        <a href="../index.html"><input type="button" value="Cerrar sesión"></a>
</body>
</html>