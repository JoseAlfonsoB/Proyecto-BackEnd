<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primero aplicacion con PHP</title>
</head>
<body>
    <h1>Soy un encabezado de HTML.</h1>
    <!-- Este es el scrip del codigo PHP. -->
    <?php
    #Este puede ser un comentario de una sola linea en PHP.
    // Estes es otro comentario de una sola linea.
    /* 
        Y este es un comentario de mutliples lineas.
    */
    /*VARAIBLES: siempre comienzan con un signo de pesos ($).
        ->PHP no es un lenguaje tipado.
    */
    $nombre = "Alfonso";
    $mensaje = "Mi primero aplicacion con PHP";
    echo "<h2>Hola mundo desde PHP.</h2>"; #Esta es una impración en PHP (Salido por pantalla).
    echo "<h3>Bienvenido $nombre</h3><h4>$mensaje</h4>";
    ?>
    <ul>
        <a href="pagina2.php"><li>Formularios</li></a>
    </ul>

</body>
</html>