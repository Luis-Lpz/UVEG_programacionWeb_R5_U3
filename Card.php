<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
    <link rel="stylesheet" href="Card.css">
</head>

<body>
    <div class="container">
        <h1>Alumno</h1>
        <p>Nombre: <?php echo $_POST["Nombre"]?> <?php echo $_POST["Apellidos"]?></p>
        <p>Edad: <?php echo $_POST["Edad"]?> años</p>
        <p>Contacto: <?php echo $_POST["Correo"]?></p>
        <img src="user.png">
    </div>
</body>

</html>