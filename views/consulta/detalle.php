<?php require 'views/header.php' ?>
    <div id="main">
        <h1 class="color-2">Registrar alumnos </h1>
        <form action="<?php echo constant('URL') ?>nuevo/registrarNuevoAlumno" method="post">
            <p>
                <label class="form-label" for="matricula">Matricula</label>
                <input class="form-control" type="text" name="matricula" value="<?php echo $this->alumno->matricula; ?>" disabled>
            </p>
            <p>
                <label class="form-label" for="nombre">Nombre: </label>
                <input class="form-control" type="text" name="nombre" value="<?php echo $this->alumno->nombre; ?>" required>
            </p>
            <p>
                <label class="form-label" for="apellido">Apellido:</label>
                <input class="form-control" type="text" name="apellido" value="<?php echo $this->alumno->apellido; ?>" required>
            </p>
            <p>
                <input class="btn btn-dark mb-2" type="submit" value="Actualizar Alumno">
            </p>
        </form>

    </div>
<?php require 'views/footer.php' ?>
