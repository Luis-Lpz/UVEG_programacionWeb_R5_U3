<!-- Nombre del módulo: Programación web -->
<!-- Reto 5. Programemos en PHP -->
<!-- Nombre completo: Luis Alejandro López López -->
<!-- Matrícula: 18008311 -->
<!-- Fecha de elaboración: 21/07/2023 -->
<!-- Nombre del asesor: Dora Alicia Álvarez Medina -->

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar alumno</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="contenedor">
        <form method="post" action="Card.php">
            <h1>Registrar alumno</h1>
            <p>Nombre</p>
            <input type="text" name="Nombre" id="Nombre" placeholder="Ingrese su Nombre(s)">
            <p>Apellidos</p>
            <input type="text" name="Apellidos" id="Apellidos" placeholder="Ingrese sus Apellidos">
            <p>Edad</p>
            <input type="number" name="Edad" id="Edad" placeholder="Ingrese su edad">
            <p>Correo</p>
            <input type="email" name="Correo" id="Correo" placeholder="Ingrese su correo electrónico">
            <p>Contraseña</p>
            <input type="password" name="Contraseña" id="Contraseña" placeholder="Ingrese su contraseña">
            <button class=button>Registrar</button>
        </form>
    </div>
</body>

</html>