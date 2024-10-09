<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar datos del formulario</title>
</head>
<body>
    <?php
    #Recbibir los datos por POST
    $nombre = $_POST["txtNombre"];

    echo "Tu nombre es: $nombre <br>";

    $edad = $_POST["txtEdad"];
    echo "Tu edad es de: $edad<br>"

    $selecCar = $_POST["seleccioneCarrera"];
    echo "Tu carrera es: $selecCar";
    ?>

</body>
</html>