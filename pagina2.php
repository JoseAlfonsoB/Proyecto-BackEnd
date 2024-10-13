<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="Styles/styles.css">
</head>
<body>
    <section class="wrapper">
        <form action="procesar-form.php" method="post"> <!-- action especifica quien va a recibir los datos del formulario (A que archivo se van a anviar). El metodo get envia los datos a traves de la URL. Y con un post los datos se envian de manera incriptada (ocultos).-->
                <h2>Formulario con PHP.</h2>
                <div class="input-field">
                    <input type="text" name="txtNombre" required />
                    <label for="">Nombre</label>
                </div>
                <div class="input-field">
                    <input type="number" name="txtEdad" required />
                    <label for="">Edad</label>
                </div>

                <select name="seleccioneCarrera" class="carrera" size="1">
                    <option value="">--Seleccione Carrera--</option>
                    <option value=Sistemas"">Ing. Sistemas Computacionales</option>
                    <option value="Meca">Ing. Mecatronica</option>
                    <option value="Logistica">Ing. Lógistica</option>
                    <option value="Industrial">Ing. Industrial</option>
                    <option value="Civil">Ing. Civil</option>
                </select>

                <button type="submit">Registrar</button>
                <button type="submit">Nuevo</button>
                <fieldset></fieldset>      
                <div class="register">
          <p>No tienes una cuenta? <a href="#">Registrate</a></p>
        </div>  
        </form>
    </section>
    <?php
    ?>
</body>
</html>