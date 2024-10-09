<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <section>
        <h1>Formularios con PHP.</h1>
        <form action="procesar-form.php" method="post"> <!-- action especifica quien va a recibir los datos del formulario (A que archivo se van a anviar). El metodo get envia los datos a traves de la URL. Y con un post los datos se envian de manera incriptada (ocultos).-->
            <fieldset>
                <legend>Formulario con PHP.</legend>
                <input type="text" placeholder="Nombre" name="txtNombre">
                <input type="number" placeholder="Edad" name="txtEdad">
                <select name="seleccioneCarrera" id="" size="1">
                    <option value="">--Seleccione Carrera--</option>
                    <option value=Sistemas"">Ing. Sistemas Computacionales</option>
                    <option value="Meca">Ing. Mecatronica</option>
                    <option value="Logistica">Ing. Lógistica</option>
                    <option value="Industrial">Ing. Industrial</option>
                    <option value="Civil">Ing. Civil</option>
                </select>
                <button>Registrar</button>
                <button>Nuevo</button>
            </fieldset>        
        </form>
    </section>
    <?php
    ?>
</body>
</html>