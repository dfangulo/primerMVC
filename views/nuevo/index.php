<?php require 'views/header.php' ?>
<div id="main">
    <h1 class="color-2">Registrar alumnos </h1>

    <p class="center">
        <?php if (isset($this->mensaje)) {
            echo $this->mensaje;
        } ?></p></br>
    <div class="container">
        <div class="row">
            <div class="col-4 center">
                <form action="<?php echo constant('URL') ?>nuevo/registrarNuevoAlumno" method="post">
                    <p>
                        <label for="nombre" class="form-label">Nombre: </label>
                        <input type="text" name="nombre" id="" class="form-control" required>
                    </p>
                    <p>
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" name="apellido" id="" class="form-control" required>
                    </p>
                    <p>
                        <input type="submit" value="registrar" class="btn btn-primary mb-3 ">
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'views/footer.php' ?>