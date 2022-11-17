<?php require 'views/header.php' ?>
    <div id="main">
        <h1 class="color-2">Registrar alumnos </h1>
        <form action="<?php echo constant('URL') ?>nuevo/registrarNuevoAlumno" method="post">
            <!-- <p>
                <label for="matricula">Matricula</label>
                <input type="text" name="matricula" id="">
            </p> -->
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="" required>
            </p>
            <p>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="" required>
            </p>
            <p>
                <input type="submit" value="registrar">
            </p>
        </form>

    </div>
<?php require 'views/footer.php' ?>
