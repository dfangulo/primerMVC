<?php require 'views/header.php' ?>
<div id="main">
    <h1 class="color-2">Seccion de Consulta</h1>
    <div id="respuesta" class="center"></div>
    <table style="width: 100%;" class="table">
        <thead>
            <tr class="row">
                <th class="col">Nombre</th>
                <th class="col">Apellído</th>
                <th class="col">Matricula</th>
                <th class="col">Editar</th>
                <th class="col">Eliminar</th>
                <!-- <th>Eliminar</th> -->
            </tr>
        </thead>
        <tbody id="tbody-alumnos">
            <?php
            include_once 'models/alumno.php';
            foreach ($this->alumnos as $row) {
                $alumno = new Alumno();
                $alumno = $row;
            ?>
                <tr id="fila-<?php echo $alumno->matricula ?>" class="row">
                    <td class="col"><?php echo $alumno->matricula ?></td>
                    <td class="col"><?php echo $alumno->nombre ?></td>
                    <td class="col"><?php echo $alumno->apellido ?></td>
                    <td class="col"><a href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>" class=" btn  btn-outline-primary">Editar</a></td>
                    <td class="col"><button class="bEliminar btn  btn-outline-primary" data-matricula="<?php echo $alumno->matricula ?>">eliminar</button></td>
                    <!-- <td><a href="<?php echo constant('URL') . 'consulta/eliminarAlumno/' . $alumno->matricula; ?>">Eliminar</a></td> -->
                </tr>
            <?php   } ?>
        </tbody>
    </table>
</div>
<?php require 'views/footer.php' ?>
<script src="<?php echo constant('URL') ?>public/js/main.js"></script>